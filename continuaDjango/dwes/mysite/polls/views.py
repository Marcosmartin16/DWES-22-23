from django.shortcuts import render, get_object_or_404
from django.http import HttpResponse, HttpResponseRedirect
from .models import Question, Choice
from django.urls import reverse
from django.views import generic

"""
def index(request):
    preguntas = Question.objects.order_by('-pub_date')[:5]
    return render(request, 'polls/index.html', {
        'latest_question_list': preguntas,
        'titulo': "MOMENTO PREGUNTAS"
    })
"""

class IndexView(generic.ListView):
    template_name = 'polls/index.html'
    context_object_name = 'latest_question_list'
    paginate_by = 1

    def get_queryset(self):
        """Return the last five published questions."""
        return Question.objects.order_by('-pub_date')[:5]

"""
def detalle(request, id):
    pregunta = get_object_or_404(Question, pk=id)
    return render(request, 'polls/detalle.html', {
        'pregunta':pregunta
    })
"""

class DetailView(generic.DetailView):
    model = Question
    context_object_name ='pregunta'
    template_name = 'polls/detalle.html'

"""
def resultado(request, id):
    pregunta = get_object_or_404(Question, pk=id)
    return render(request, 'polls/resultados.html', {
            'pregunta':pregunta
    })
"""

class ResultsView(generic.DetailView):
    model = Question
    context_object_name ='pregunta'
    template_name = 'polls/resultados.html'

def vote(request, pk):
    pregunta = get_object_or_404(Question, pk=pk)
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
        return HttpResponseRedirect(reverse('polls:resultado', args=(pregunta.pk,)))

from rest_framework import viewsets
from .serializer import QuestionSerializer

class QuestionViewSet(viewsets.ModelViewSet):
    queryset = Question.objects.all().order_by('-pub_date')
    serializer_class = QuestionSerializer
