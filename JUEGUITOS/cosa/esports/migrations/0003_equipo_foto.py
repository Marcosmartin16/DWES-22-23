# Generated by Django 4.1.5 on 2023-02-02 18:41

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('esports', '0002_alter_juego_equipos'),
    ]

    operations = [
        migrations.AddField(
            model_name='equipo',
            name='foto',
            field=models.ImageField(null=True, upload_to='equipos'),
        ),
    ]
