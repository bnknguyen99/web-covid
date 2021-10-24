
from django.contrib.contenttypes.models import ContentType
 

DEL_MODELS = ["Country", "City"]
 
ct = ContentType.objects.all().order_by("app_label", "model")
 
for c in ct:
    if  (c.model in DEL_MODELS):
        c.delete()