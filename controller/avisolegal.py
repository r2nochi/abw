
from flask import Blueprint, render_template, abort


avisolegal_page = Blueprint('avisolegal_page', __name__)

@avisolegal_page.route('/aviso-legal')
def avisolegal():
    return render_template("aviso-legal/index.html")

@avisolegal_page.route('/aviso-legal/politicas-de-privacidad')    
def politicaspriv():
    return render_template("aviso-legal/politica-de-privacidad.html")
    
