from django.shortcuts import render,get_object_or_404
from django.http import HttpResponse,HttpResponseRedirect
from django.urls import reverse
from .models import LineaDeMetro, Estaciones

def listado(request):
    lineas = LineaDeMetro.objects.all()
    context = {'lineas':lineas}
    return render(request, 'incidencias/listado.html', context)

def incidenciaNueva(request, estacion):
    linea = Estaciones.objects.get(linea=estacion)
    context = {'linea':linea, 'estacion':estacion}
    return render(request, 'incidencias/incidenciaNueva.html', context)

def notificar(request, estacion):
    estaciones = get_object_or_404(Estaciones, nombre=estacion)
    try:
        texto = estacion.options.get(estacion=request.POST['texto'])
    except (KeyError, Estaciones.DoesNotExist):
        return render(request, 'incidencia/listado.html', {
            'estacion': estaciones,
            'error_message': "You didn't select a choice.",
        })
    else:
        texto.texto = texto
        texto.fecha = "23-02-2023"
        texto.save()
        return HttpResponseRedirect(reverse('incidencias:listado', args=(estacion.estaciones,)))
