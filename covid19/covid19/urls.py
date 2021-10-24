"""covid19 URL Configuration

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
from django.urls.conf import include
from django.views.generic.base import TemplateView
from django.contrib import admin
from django.urls import path
from covid19 import views

urlpatterns = [
    path('admin/', admin.site.urls),
    path('', include('home.urls')),
    path('news/', include('news.urls')), 
    path('statistic/', include('statistic.urls')),
    path('services/', views.get_services),
    path('contact/', views.get_contact),
]
