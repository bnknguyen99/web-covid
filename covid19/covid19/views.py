from django.shortcuts import render
from django.http import HttpResponse

def get_index(request):
    return render(request, 'index.html')


def get_about(request):
    return render(request, 'about.html')

def get_services(request):
    return render(request, 'services.html')

def get_contact(request):
    return render(request, 'contact.html')

def get_inherit(request):
    return render(request, 'inherit.html')
    
