from django.shortcuts import render, get_object_or_404
from django.http import HttpResponse, HttpResponseRedirect
from .models import Question, Choice
from django.urls import reverse

def index(request):
    preguntas = Question.objects.order_by('-pub_date')[:5]
    return render(request, 'polls/index.html', {
        'latest_question_list': preguntas,
        'titulo': "MOMENTO PREGUNTAS"
    })

def detalle(request, id):
    pregunta = get_object_or_404(Question, pk=id)
    return render(request, 'polls/detalle.html', {
        'pregunta':pregunta
    })

def vote(request, id):
    pregunta = get_object_or_404(Question, pk=id)
    try:
        selected_choice = pregunta.options.get(pk=request.POST['choice'])
    except (KeyError, Choice.DoesNotExist):
        return render(request, 'polls/detalle.html', {
            'pregunta': pregunta,
            'error_message': "You didn't select a choice.",
        })
    else:
        selected_choice.votes += 1
        selected_choice.save()
        return HttpResponseRedirect(reverse('polls:resultado', args=(pregunta.id,)))

def resultado(request, id):
    pregunta = get_object_or_404(Question, pk=id)
    return render(request, 'polls/resultados.html', {
            'pregunta':pregunta
    })