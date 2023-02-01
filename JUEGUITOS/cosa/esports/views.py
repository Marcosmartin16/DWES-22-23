from django.shortcuts import render
from django.http import HttpResponse
from .models import Equipo, Genero, Juego

# Create your views here.

def index(request):
    return HttpResponse("HOLLIWIS")

def detalle_equipo(request, nombre):
    e = Equipo.objects.get(nombre=nombre)
    juegos = ""
    for j in e.juego_set.all():
        juegos += j.nombre
    return HttpResponse(f"El nombre del equipo es {e.nombre}: {e.descripcion} <br> {juegos}")

def detalle_juego(request, nombre):
    return HttpResponse(f"El nombre del equipo es {nombre}")

def detalle_genero(request, nombre):
    return HttpResponse(f"El nombre del equipo es {nombre}")