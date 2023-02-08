from django.shortcuts import render, get_object_or_404
from django.http import HttpResponse,Http404
from .models import Noticia


def index(request):
    noticias = Noticia.objects.all()
    context = {'noticias':noticias}
    return render(request, 'noticiario/noticias.html', context)

def detalle_noticia(request, titulo):
    #noticia = Noticia.objects.get(titulo = titulo)
    context = {'noticia':get_object_or_404(Noticia, titulo=titulo)}
    return render(request, 'noticiario/noticia.html', context)