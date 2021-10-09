from django.shortcuts import render
from django.http import HttpResponse
from flask import request

def index(request):
    return render(request, 'index.html')