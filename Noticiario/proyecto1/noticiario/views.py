from django.shortcuts import render
from django.http import HttpResponse
from .models import Noticia

def index(request):
    noticias = Noticia.objects.all()
    context = {'noticias':noticias}
    return render(request, 'noticiario/noticias.html', context)

def detalle_noticia(request, titulo):
    noticia = Noticia.objects.get(titulo = titulo)
    context = {'noticia':noticia}
    return render(request, 'noticiario/noticia.html', context)