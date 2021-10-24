from django.db import models

# Create your models here.
class Post(models.Model):
    title = models.CharField(max_length=100)
    category = models.CharField(max_length=100)
    date = models.DateTimeField(auto_now_add=True)
    img = models.TextField()
    body = models.TextField()