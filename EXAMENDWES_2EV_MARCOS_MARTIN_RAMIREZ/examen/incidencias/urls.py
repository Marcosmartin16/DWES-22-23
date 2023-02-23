from django.urls import path
from . import views

app_name = 'incidencias'
urlpatterns = [
    path('listado/', views.listado, name='index'),
    path('<str:estacion>/', views.incidenciaNueva, name='estacion'),
    path('<str:estacion>/notificar/', views.notificar, name='notifica'),
]