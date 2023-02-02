from django.shortcuts import render
from django.http import HttpResponse
from .models import Equipo, Genero, Juego

# Create your views here.

def index(request):
    return HttpResponse("HOLLIWIS")

def detalle_equipo(request, nombre):
    equipo = Equipo.objects.get(nombre=nombre)
    context = {'equipo':equipo}
    #la variable equipo usada en el diccionario context la variable equipo de arriba y el nombre es el que pondremos en el render con el html
    return render(request, 'esports/equipo.html', context)

def detalle_juego(request, nombre):
    return HttpResponse(f"El nombre del juego es {nombre}")

def detalle_genero(request, nombre):
    return HttpResponse(f"El nombre del genero de videojuego es {nombre}")