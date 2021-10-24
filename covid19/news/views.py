from django.shortcuts import render
from .models import Post
# Create your views here.
def list(request):
    data = {'Post': Post.objects.all()}
    return render(request, 'news/news.html', data)

def post(request, id):
    post = Post.objects.get(id=id)
    return render(request, 'news/post.html', {'post': post})


