from django.urls import path

from . import views

urlpatterns = [
    path('', views.index, name='esports_raiz'),
    path('<str:nombre>/', views.detalle_equipo, name="esports_detalle_equipo"),
    path('juego/<str:nombre>/', views.detalle_juego, name="esports_detalle_juego"),
    path('genero/<str:nombre>/', views.detalle_genero, name="esports_detalle_genero"),
]