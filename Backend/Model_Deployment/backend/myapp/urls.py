import django
from django.urls import path
from .views import Predict,Index,Upload,Details

urlpatterns=[
    path("home/",Index.as_view()),
    path("upload/",Upload.as_view()),
    path("predict/",Predict.as_view()),
    path("details/",Details.as_view())
]

