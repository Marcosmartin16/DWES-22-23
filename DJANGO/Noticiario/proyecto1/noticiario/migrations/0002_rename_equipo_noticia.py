# Generated by Django 4.1.5 on 2023-02-03 15:28

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('noticiario', '0001_initial'),
    ]

    operations = [
        migrations.RenameModel(
            old_name='Equipo',
            new_name='Noticia',
        ),
    ]