from django.contrib import admin
from .models import LineaDeMetro, Estaciones, Incidencia


class EstacionesInline(admin.TabularInline):
    model=Estaciones

class LineaDeMetroAdmin(admin.ModelAdmin):
    fieldsets = [
        ('Nombre',        {'fields': ['nombre']}),
        ('Color', {'fields': ['color']}),
        ('Distancia(km)', {'fields': ['distancia']}),
    ]
    inlines = [EstacionesInline]
    list_display = ('nombre', 'color', 'distancia')

class IncidenciaAdmin(admin.ModelAdmin):
     fieldsets = [
         ('Texto ',        {'fields': ['texto']}),
         ('Fecha', {'fields': ['fecha']}),
         ('Estacion', {'fields': ['estacion']}),
     ]
     list_display = ('texto', 'fecha')
     list_filter = ['fecha']

admin.site.register(LineaDeMetro, LineaDeMetroAdmin)
admin.site.register(Incidencia)

