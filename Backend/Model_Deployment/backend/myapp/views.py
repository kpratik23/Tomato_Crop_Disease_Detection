import os
from django.shortcuts import render
from rest_framework.views import APIView
from django.http import HttpResponse
from django.core.files.storage import default_storage
from django.core.files.base import ContentFile
from django.conf import settings
from .apps import ModelPrediction
from rest_framework.response import Response
from rest_framework import status
from .models import ImageList, Solution

predictor = ModelPrediction()


class Index(APIView):

    def get(self, request):
        return render(request, "index.html")


class Details(APIView):

    def get(self, request):
        return Response(data={"message": "GET Request not supported !"}, status=status.HTTP_200_OK)

    def post(self, request):
        disease = request.POST.dict()["Disease"]

        solution = Solution.objects.get(disease_name=disease)

        disease_name = solution.disease_name
        type_of_disease = solution.type_of_disease
        chemical_control = solution.chemical_control
        organic_control = solution.organic_control
        also_found_in = solution.also_found_in
        avoid_this = solution.avoid_this

        details = {"disease_name": disease_name,
                   "type_of_disease": type_of_disease,
                   "chemical_control": chemical_control,
                   "organic_control": organic_control,
                   "also_found_in": also_found_in,
                   "avoid_this": avoid_this
                   }

        return Response(data=details, status=status.HTTP_200_OK)


class Predict(APIView):

    def get(self, request):
        return HttpResponse("GET request not supported !")

    def post(self, request):
        print(request.POST, request.FILES)

        imagelist = ImageList.objects.all()
        recent_image = list(imagelist)[-1]
        img_url = recent_image.image_url

        predictions = predictor.predict(img_url)

        return Response(predictions, status=status.HTTP_200_OK)


class Upload(APIView):

    def get(self, request):
        return HttpResponse("GET request not supprted !")

    def check_duplicates(self, filename):

        media_root = settings.MEDIA_ROOT

        count = 0
        for file in os.listdir(media_root):
            if file.startswith(filename):
                count += 1
        return count

    def post(self, request):
        print(request.FILES, "###################################################")
        print(request.method)
        myfile = request.FILES['myfile']
        filename = request.FILES["myfile"].name
        duplicates = self.check_duplicates(filename.split(".")[0])

        if duplicates:
            ext = filename.split(".")[-1]
            filename = filename.split(".")[0]
            filename += "_{}.{}".format(duplicates + 1, ext)

        data = ContentFile(myfile.read())
        default_storage.save(settings.MEDIA_ROOT + filename, data)

        im_path = settings.MEDIA_ROOT + filename

        new_image = ImageList(image_url=im_path)
        new_image.save()

        return Response(data={"image_url": im_path}, status=status.HTTP_200_OK)
