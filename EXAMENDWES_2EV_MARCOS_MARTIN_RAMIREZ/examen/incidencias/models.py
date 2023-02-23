from django.db import models

class LineaDeMetro(models.Model):
    nombre = models.CharField(max_length=200)
    color = models.CharField(max_length=200)
    distancia = models.IntegerField(default=0)

    def __str__(self):
        return f"{self.nombre}"

class Estaciones(models.Model):
    nombre = models.CharField(max_length=200)
    linea = models.ForeignKey(LineaDeMetro, on_delete=models.CASCADE, related_name='estacionLinea')

    def __str__(self):
        return f"{self.nombre}"
    
class Incidencia(models.Model):
    texto = models.CharField(max_length=200)
    fecha = models.DateTimeField('fecha incidencia')
    estacion = models.ForeignKey(Estaciones, on_delete=models.CASCADE, related_name='estacion')

    def __str__(self):
        return f"{self.estacion} ({self.estacion.linea}) {self.texto}"
