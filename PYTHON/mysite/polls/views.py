# Create your views here.
from django.http import HttpResponse


def index(request):
    return HttpResponse("Hello, world. You're at the polls index.")

def holamundo(request):
    return HttpResponse("HOLLIWIS KLK")

def navegador(request):
    return HttpResponse(f"Tu navegador: {request.META['HTTP_USER_AGENT']}")