from django.shortcuts import render
from django.db.models import Sum
from django.http import JsonResponse
from .models import City

# Create your views here.
def statistic(request):
    return render(request, 'statistic/statistic.html')
