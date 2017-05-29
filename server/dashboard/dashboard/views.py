# -*- coding: utf-8 -*-
from __future__ import unicode_literals

#log/views.py
from django.shortcuts import render
from django.contrib.auth.decorators import login_required

# Create your views here.
# this login required decorator is to not allow to any  
# view without authenticating
def home(request):
    return render(request,"home.html")

def contact(request):
    return render(request, "contact.html")

@login_required(login_url="/login/")
def dashboard(request):
    return render(request, "dashboard.html")
