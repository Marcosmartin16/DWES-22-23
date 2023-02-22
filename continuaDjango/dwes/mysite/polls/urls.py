from django.urls import path, re_path, include
from . import views


app_name = 'polls'
urlpatterns = [
    path('', views.IndexView.as_view(), name='index'),
    path('<int:pk>/', views.DetailView.as_view(), name='detalle'),
    path('<int:pk>/vote/', views.vote, name='vote'),
    path('<int:pk>/resultado/', views.ResultsView.as_view(), name='resultado'),
]