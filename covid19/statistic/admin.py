from django.contrib import admin
from .models import City
from .models import Country
# Register your models here.



class CityAdmin(admin.ModelAdmin):
    list_display =['name','country','population']
    search_fields = ['name']

admin.site.register(City, CityAdmin)

class CountryAdmin(admin.ModelAdmin):
    list_display =['name']
    search_fields = ['name']

admin.site.register(Country, CountryAdmin)