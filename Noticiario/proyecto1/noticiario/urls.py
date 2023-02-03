from django.urls import path

from . import views

urlpatterns = [
    path('', views.index, name='index'),
    path('detalle/<str:titulo>/', views.detalle_noticia, name="noticiario_detalle_noticia"),
]