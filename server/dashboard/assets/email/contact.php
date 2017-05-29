<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>INOCEANO - Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Html5TemplatesDreamweaver.com">

    <link href="scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Icons -->
    <link href="scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
        <link href="scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome.min.css">
    <!--[if IE 7]>
        <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->

    <link href="http://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

    <link href="styles/custom.css" rel="stylesheet" type="text/css" />	
		
	<!-- Contact Form -->	
	<script src="email/validation.js" type="text/javascript"></script>
</head>
<body id="pageBody">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="divBoxed" class="container">

    <div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>

    <div class="divPanel notop nobottom">
            <div class="row-fluid">
                <div class="span12">					

<!--Edit Site Name and Slogan here-->
					<div id="divLogo"><img src="images/inoceano_logo.png" width="584px" height="120px"><br>
					</div>

	            </div>
            </div>   
            <div class="row-fluid">
                <div class="span12">				
                    <div class="centered_menu">                      
 <!--	Edit Navigation Menu here	-->
					<div class="navbar">
                        <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                            NAVIGATION <span class="icon-chevron-down icon-white"></span>
                        </button>
                        <div class="nav-collapse collapse">
                            <ul class="nav nav-pills ddmenu">
                                <li><a href="index.html">Home</a></li>
				<li class="dropdown"><a href="about.html" class="dropdown-toggle">About<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown">
                                            <a href="partners.html" class="dropdown-toggle">Our partners</a>
                                        </li>                                        
                                    </ul>
                                </li>								
                                <li><a href="consultancy.html">Consultancy</a></li>
                                <li><a target="_blank" href="http://sposs.org">Open-source</a></li>
                                <li><a href="publications.html">References</a></li>
				<li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
<!-- end of navigation menu -->	
					
                    </div>
	            </div>
            </div>

            <div class="row-fluid">
                <div class="span12">
                    <div id="contentInnerSeparator"></div>
                </div>
            </div>
    </div>

    <div class="contentArea">

        <div class="divPanel notop page-content">

            <div class="breadcrumbs">
                <a href="index.html">Home</a> &nbsp;/&nbsp; <span>Contact Us</span>
            </div>
            
			<!--Edit Main Content Area here-->
            <div class="row-fluid">
                <div class="span8" id="divMain">

                    <h1>Contact Us</h1>
                   	<h3 style="color:#FF6633;"><?php echo $_GET[msg];?></h3>
					<hr>
			<!--Start Contact form -->		                                                
<form name="enq" method="post" action="email/" onsubmit="return validation();">
  <fieldset>
    
	<input type="text" name="name" id="name" value=""  class="input-block-level" placeholder="Name" />
    <input type="text" name="email" id="email" value="" class="input-block-level" placeholder="Email" />
    <textarea rows="11" name="message" id="message" class="input-block-level" placeholder="Comments"></textarea>
    <div class="actions">
	<input type="submit" value="Send Your Message" name="submit" id="submitButton" class="btn btn-info pull-right" title="Click here to submit your message!" />
	</div>
	
	</fieldset>
</form>  				 
			<!--End Contact form -->											 
                </div>
				
<!--Edit Sidebar Content here-->	
                <div class="span4 sidebar">

                    <div class="sidebox">
                    <h3 class="sidebox-title">Contact Information</h3>
                    <p>
                        <address><strong>INOCEANO</strong><br />
                        Rua Santa Luzia 776/201, Centro <br />
                        Rio de Janeiro, RJ<br />
                        <!--City, State, Zip<br />-->
                        <abbr title="Phone">P:</abbr>+55(21)99232-2811</address> 
                        <address>  <strong>Email</strong><br />
                        <a href="mailto:#">contato@inoceano.com</a></address>
                    </p>     
                     
<!-- Start Side Categories -->
       <!-- <h4 class="sidebox-title">Sidebar Categories</h4>
        <ul>
          <li><a href="#">Quisque diam lorem sectetuer adipiscing</a></li>
          <li><a href="#">Interdum vitae, adipiscing dapibus ac</a></li>
          <li><a href="#">Scelerisque ipsum auctor vitae, pede</a></li>
          <li><a href="#">Donec eget iaculis lacinia non erat</a></li>
          <li><a href="#">Lacinia dictum elementum velit fermentum</a></li>
          <li><a href="#">Donec in velit vel ipsum auctor pulvinar</a></li>
        </ul> -->
<!-- End Side Categories -->
                    					
                    </div>
                </div>
<!--/End Sidebar Content-->
            </div>

<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:center; font:14px Helvetica,Arial,sans-serif;  width:500px;}
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="//inoceano.us11.list-manage.com/subscribe/post?u=cf909fe2d8a1e980fcdf7a739&amp;id=4bcb1fadb9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<h2>Subscribe to our mailing list to receive our latest news, articles and event invitations</h2>
<div class="indicates-required"><span class="asterisk">*</span>required</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
	<label for="mce-FNAME">First Name </label>
	<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_cf909fe2d8a1e980fcdf7a739_4bcb1fadb9" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->

<!--Edit Footer here-->
            <div id="footerInnerSeparator"></div>
        </div>
    </div>

    <div id="footerOuterSeparator"></div>

    <div id="divFooter" class="footerArea shadow">

        <div class="divPanel">

            <div class="row-fluid">
                <div class="span3" id="footerArea1">
                
                    <h3>About Company</h3>

                    <p>INOCEANO is a independent engineering company who provides services/consultancy and perform applied research and development (R&amp;D) for the offshore industry, transforming basic knowledge into technological innovation. Located in Rio de Janeiro - RJ, Brazil.</p>
                    
                    <!--<p> 
                        <a href="#" title="Terms of Use">Terms of Use</a><br />
                        <a href="#" title="Privacy Policy">Privacy Policy</a><br />
                        <a href="#" title="FAQ">FAQ</a><br />
                        <a href="#" title="Sitemap">Sitemap</a>
                    </p>-->

                </div>
<div class="span3" id="footerArea4">

          <h3>Get in Touch</h3>  
                                                               
                    <ul id="contact-info">
                    <li>                                    
                        <i class="general foundicon-phone icon"></i>
                        <span class="field">Phone:</span>
                        <br />
                        (55) 21 99232-2811                                                                      
                    </li>
                    <li>
                        <i class="general foundicon-mail icon"></i>
                        <span class="field">Email:</span>
                        <br />
                        <a href="mailto:contato@inoceano.com" title="Email">contato@inoceano.com</a>
                    </li>
                    <li>
                        <i class="general foundicon-home icon" style="margin-bottom:50px"></i>
                        <span class="field">Address:</span>
                        <br />
                        Rua Santa Luzia, 776 - Centro
                        Rio de Janeiro, RJ<br />
                        Brazil
                    </li>
                    </ul>

                </div>
            </div>

            <br /><br />
            <div class="row-fluid">
            <div class="span12">
            <p class="copyright"> 
            Copyright © 2015 INOCEANO. All Rights Reserved.
            </p>
<!--Show linkedin followers-->
<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
<script type="IN/FollowCompany" data-id="10143641" data-counter="right"></script>

<div class="fb-like" data-href="https://facebook.com/inoceano" data-layout="standard" data-action="like" data-show-faces="false" data-share="false"></div>


            <!--<div class="social_bookmarks">                    
                <a href="#"><div class="icon_twitter"></div></a>
                <a href="#"><div class="icon_facebook"></div></a>
                <a href="#"><div class="icon_google"></div></a>
                <a href="#"><div class="icon_pinterest"></div></a>                   
            </div>-->
            </div>
            </div>

        </div>
    </div>
</div>
<br /><br /><br />

<script src="scripts/jquery.min.js" type="text/javascript"></script> 
<script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/default.js" type="text/javascript"></script>

</body>
</html>