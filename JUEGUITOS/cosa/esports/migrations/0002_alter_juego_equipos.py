# Generated by Django 4.1.5 on 2023-02-02 17:01

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('esports', '0001_initial'),
    ]

    operations = [
        migrations.AlterField(
            model_name='juego',
            name='equipos',
            field=models.ManyToManyField(related_name='juegos', to='esports.equipo'),
        ),
    ]
