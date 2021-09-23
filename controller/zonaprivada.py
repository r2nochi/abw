

from flask import Blueprint, render_template, abort


zonaprivada_page = Blueprint('zonaprivada_page', __name__)



@zonaprivada_page.route('/zona-privada')
def zona_privada():
    return render_template('/zona-privada/resumen.html')
    
@zonaprivada_page.route('/zona-privada/cargarsaldo')
def cargar_saldo():
    return render_template('/zona-privada/cargar-saldo.html')

@zonaprivada_page.route('/zona-privada/comprar')
def comprar():
    return render_template('/zona-privada/comprar.html')
