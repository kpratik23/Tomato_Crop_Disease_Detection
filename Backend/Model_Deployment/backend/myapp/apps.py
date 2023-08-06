from django.apps import AppConfig
import numpy as np
import keras
from keras.models import load_model
import PIL
import os
from PIL import Image, ImageEnhance
from rembg import remove
from django.conf import settings

class MyappConfig(AppConfig):
    name = 'myapp'


class ModelPrediction:

    def __init__(self):
        if (not os.path.exists(settings.MEDIA_ROOT)):
            os.mkdir(settings.MEDIA_ROOT)

        self.apply_segmentation=False
        self.segmented_path=settings.MEDIA_ROOT+"SEGMENTED\\"
        self.model_path = ""

        self.CLASSES = [
            'Tomato___Bacterial_spot',
            'Tomato___Early_blight',
            'Tomato___healthy',
            'Tomato___Late_blight',
            'Tomato___Leaf_Mold',
            'Tomato___Septoria_leaf_spot',
            'Tomato___Spider_mites_Two_spotted_spider_mite',
            'Tomato___Target_Spot',
            'Tomato___Tomato_mosaic_virus',
            'Tomato___Tomato_Yellow_Leaf_Curl_Virus'
        ]

        self.model = load_model(self.model_path)

    def removebg(self,im_path,output_path):

        image=Image.open(im_path)

        if self.apply_segmentation:
            image=remove(image).convert("RGB")
            image.save(output_path)

        return image.convert("RGB")

    def preprocess(self, image_path):

        # image = Image.open(image_path).convert("RGB")
        fname=image_path.split("\\")[-1]
        image=self.removebg(image_path,self.segmented_path+fname)

        # print(image.mode)
        image = image.resize((224, 224))
        image = ImageEnhance.Sharpness(image).enhance(2)
        # image= image.filter(ImageFilter.GaussianBlur(radius = 2))
        image = np.array(image).reshape(-1, 224, 224, 3)
        image = image / image.max()
        return image

    def predict(self,im_path):
        image = self.preprocess(im_path)
        prediction = self.model.predict(image)
        # accuracy = round(np.max(prediction) * 100, 3)
        # prediction = self.CLASSES[np.argmax(prediction)]

        predictions={}

        for pred,classes in zip(prediction[0],self.CLASSES):
            predictions[classes.split("___")[-1]]=round(pred*100,2)

        # predictions = {"Prediction": "{}".format(prediction),"Accuracy": "{}".format(accuracy)}

        return predictions
