"""
Crawler for Twitter data
module: twitter_crawler
author: Ricardo Silveira <ricardosilveira@poli.ufrj.br>
"""
from __future__ import unicode_literals
from bs4 import BeautifulSoup
import requests
import logging

LOGGER = logging.getLogger(__name__)
logging.basicConfig(filename='cats_graph.log', level=logging.INFO)


class TwitterCrawler(object):
    """
    Crawler for Twitter data

    Methods
    -------
    get_user_lookup
    get_followers
    """

    def __init__(self, **kwargs):
        """
        Sets caller to connect to Twitter API

        Parameters
        ----------
        config: dict
            Settings for crawling twitter data, it must include the following:
        credential_queue: <Credential_Queue object>
            Object to make API calls and manage the credentials
        """
        self.__credential_queue = kwargs.get("credential_queue")
        self.__base_url = "https://api.twitter.com/1.1/"

    def __check_errors(self, data, api_call):
        """
        Checks if it is needed to repeat the request which returned `data`

        Parameters
        ----------
        data: dict
            Return of API request, must contain keys `header` and `data`
        api_call: str
            Label for request to update time window

        Returns
        -------
        (bool, bool)
            False, True: Request should not be repeated and its content is
                         not available.
            False, False: Request should not be repeated, but the data was
                          returned.
            True, False: Request must be repeated, and data is not available
        """
        # Connection error
        if not data["data"]:
            LOGGER.debug("Request failed!")
            return False, True
        # Successful request
        if "errors" not in data["data"] and "error" not in data["data"]:
            try:
                close_time = data["header"]['x-rate-limit-reset']
                self.__credential_queue.update_window(close_time, api_call)
                # Preventing error in next request
                if data["header"]['x-rate-limit-remaining'] == "0":
                    self.__credential_queue.next_credential(api_call)
            except KeyError:
                pass
            return False, False
        # Some error found
        if "errors" in data["data"] or "error" in data["data"]:
            # Credential reached limit
            if data["data"]["errors"][0]["code"] == 88:
                close_time = data["header"]['x-rate-limit-reset']
                self.__credential_queue.update_window(close_time, api_call)
                self.__credential_queue.next_credential(api_call)
                return True, False
            # Account does not exist
            if data["data"]["errors"][0]["code"] == 34:
                LOGGER.debug("Account does not exist")
        return False, True

    def get_user_lookup(self, **kwargs):
        """
        Collects information from user lookup call

        Parameters
        ----------
        screen_name: str
            Account screen name to collect data
        user_id: str
            Account id to collect data

        Returns
        -------
        dict
            All avaiable information regarding an account on Twitter
        """
        info = kwargs.get("screen_name", False)
        _attr = "screen_name"
        if not info:
            info = kwargs.get("user_id")
            _attr = "user_id"
        url = "%susers/lookup.json?%s=%s" % (self.__base_url, _attr, info)
        LOGGER.info("Requesting: %s" % url)
        api_call = "user_lookup"
        make_request = True
        print url
        while make_request:
            credential = self.__credential_queue.get(api_call)
            data = credential.request(url)
            make_request, found_error = self.__check_errors(data,
                                                            api_call)
        if not found_error:
            return data["data"][0]
        return None

    def get_followers(self, **kwargs):
        """
        Searches for all followers of a valid Twitter account

        Parameters
        ----------
        screen_name: str
            Account screen name to collect data
        user_id: str
            Account id to collect data

        Returns
        -------
        list
            List of ids of followers of an account
        """
        info = kwargs.get("screen_name", False)
        _attr = "screen_name"
        if not info:
            info = kwargs.get("user_id")
            _attr = "user_id"
        cursor = kwargs.get("cursor", None)
        api_call = "followers"
        followers_list = []
        errors_found = False
        # Whilre cursor is not pointing to the first page
        while not errors_found and cursor != "0":
            # Points to first page on first iteration
            url = "%sfollowers/ids.json?%s=%s" % (self.__base_url,
                                                  _attr,
                                                  info)
            if cursor:
                url = "%scursor=%s" % (url, cursor)
            credential = self.__credential_queue.get(api_call)
            data = credential.request(url)
            make_request, errors_found = self.__check_errors(data,
                                                             api_call)
            # If request returned valid data
            if not errors_found:
                cursor = data["data"]["next_cursor_str"]
                followers_list.extend(data["data"]["ids"])
        return followers_list


    def get_user_tweets(self, **kwargs):
        """
        Returns last `n` tweets from user specified by the `screen_name`

        Parameters
        ----------
        screen_name: str
            Account screen name to collect data
        user_id: str
            Account id to collect data
        n: int
            number of tweets to retrieve

        Returns
        -------
        list
            List of latest n tweets of an account
        """
        n = kwargs.get("n", 10)
        info = kwargs.get("screen_name", False)
        _attr = "screen_name"
        if not info:
            info = kwargs.get("user_id")
            _attr = "user_id"
        cursor = kwargs.get("cursor", None)
        api_call = "statuses"
        url_list = []
        errors_found = False
        # Whilre cursor is not pointing to the first page
        if True:
            #while not errors_found and cursor != "0" and len(statuses_list) <= n:
            # Points to first page on first iteration
            url = "%s%s/user_timeline.json?%s=%s&count=%d" % (self.__base_url,
                    api_call,
                    _attr,
                    info,
                    n)
            if cursor:
                url = "%scursor=%s" % (url, cursor)
            credential = self.__credential_queue.get(api_call)
            data = credential.request(url)
            make_request, errors_found = self.__check_errors(data,
                                                             api_call)
            # If request returned valid data
            for tweet in data["data"]:
                try:
                    url_list.append(tweet["entities"]["urls"][0]["expanded_url"])
                except IndexError:
                    pass
            #if False:
            #if not errors_found:
            #    cursor = data["data"].pop()["next_cursor_str"]
            #    statuses_list.extend(data["data"]["user"]["url"])
        return url_list

    def extract_url(self, url):
        response = requests.get(url)
        title = BeautifulSoup(response.content).title.text
        title_url = "http://%s" % title.split("://")[1].strip()
        return title_url


if __name__ == "__main__":
    CONFIG = {"config_credentials_path": "../../config/credentials.json",
              "verification_url":  "https://api.twitter.com/1.1/users/" +
              "lookup.json?screen_name=twitterapi,twitter"}
    from credential_queue import CredentialQueue
    CREDENTIAL_QUEUE = CredentialQueue(config=CONFIG, request_limit=10)
    CRAWLER = TwitterCrawler(credential_queue=CREDENTIAL_QUEUE)
    print CRAWLER.get_user_tweets(screen_name="g1")
