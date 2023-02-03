from django.db import models

class Noticia(models.Model):
    titulo = models.CharField(max_length=80)
    img1 = models.ImageField(upload_to='noticiaIMG', null=True)
    img2 = models.ImageField(upload_to='noticiaIMG', blank=True, null=True)
    img3 = models.ImageField(upload_to='noticiaIMG', blank=True, null=True)
    img4 = models.ImageField(upload_to='noticiaIMG', blank=True, null=True)
    img5 = models.ImageField(upload_to='noticiaIMG', blank=True, null=True)
    descripcion = models.TextField()

    def __str__(self):
        return f"{self.titulo} ({self.descripcion}) {self.img1}"