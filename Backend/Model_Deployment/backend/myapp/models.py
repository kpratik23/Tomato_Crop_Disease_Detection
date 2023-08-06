from django.db import models
from django.utils import timezone

# Create your models here.


class ImageList(models.Model):

    image_url=models.CharField(max_length=100)
    date_uploaded=models.DateTimeField(auto_now_add=True)

# type of disease	Chemical Control	Organic Control	Also found in	avoid this	Info 5

class Solution(models.Model):

    disease_name=models.CharField(max_length=100)
    type_of_disease=models.CharField(max_length=100)
    chemical_control=models.CharField(max_length=1000)
    organic_control=models.CharField(max_length=5000)
    also_found_in=models.CharField(max_length=1000)
    avoid_this=models.CharField(max_length=1000)


