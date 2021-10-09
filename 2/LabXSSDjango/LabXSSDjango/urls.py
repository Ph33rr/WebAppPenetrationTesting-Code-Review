"""LabXSSDjango URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/3.2/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
## This should exist
from django.conf.urls import url
from django.contrib import admin
## END This should exist

## Important : Import the views from the demo folder
## to get the index action
from XSSlab import views

urlpatterns = [
    url(r'^admin/', admin.site.urls),
    ## Create the action for : http://127.0.0.1/
    ## Use the index action from the views on /XSSlab/views.py
    url(r'', views.index),
 ]