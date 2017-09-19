## Django error fixes


### ImportError: No module named django_filters

pip install django-filter


### Create Django superuser

python manage.py createsuperuser


### <class 'newsletter.admin.SignUpAdmin'>: (admin.E016) The value of 'form' must inherit from 'BaseModelForm
'.
Change the django form into a ModelForm


### OperationalError: no such table: newsletter_signup(table_name)

Migrate the app or make sure there is an __init__ file in the migrations folder
or just delete the DB


### TypeError: context must be a dict rather than RequestContext

a quick workaround is to edit django/template/backends/django.py Line 63 to be like this:

    def render(self, context=None, request=None):
        if isinstance(context, dict):  # <-- my temporary workaround
            context = make_context(context, request, autoescape=self.backend.engine.autoescape)
        try:
            return self.template.render(context)
        except TemplateDoesNotExist as exc:
            reraise(exc, self.backend)

https://code.djangoproject.com/ticket/27722


### TypeError: view must be a callable or a list/tuple in the case of include().

Django Upgrading error that is fixed by changing the urls from something like:
url(r'^about/$', 'trydjango18.views.about', name='about'),
to url(r'^about/$', about, name='about'), after importing:
from trydjango18.views import about

Found in https://stackoverflow.com/questions/38744285/django-urls-error-view-must-be-a-callable-or-a-list-tuple-in-the-case-of-includ


### ImportError: No module named 'crispy_forms'

pip3 install --upgrade django-crispy-forms


### RuntimeError: Model class allauth.account.models.EmailAddress doesn't declare an explicit app_label and isn't in an application in INSTALLED_APPS.

https://stackoverflow.com/questions/34369597/django-1-9-and-allauth-0-24-1

Use square brackets when calling from a list
