import sys

sys.path.insert(1, 'static')
sys.path.insert(1, 'controller')
sys.path.insert(1, 'utils')

from flask import Flask, session, render_template, redirect, request, flash
import requests
import json
from static.html import *

from controller.zonaprivada import zonaprivada_page
from controller.avisolegal import avisolegal_page
from utils import *
from config import *
application = Flask(__name__)
application.secret_key = '12345687'

application.register_blueprint(avisolegal_page)
application.register_blueprint(zonaprivada_page)

@application.route('/')
def index():
    session['trust_level'] = 0
    #s = '<!DOCTYPE html><html lang="es">'
    #s = s + cabecera + '</head><body>Prueba Rafa 1</body></HTML>'
    useragent = request.headers.get('User-Agent')
    
    return render_template('index1.html', useragent=useragent, urlBase=urlBase)

@application.route('/noticias')
def noticias():
    useragent = request.headers.get('User-Agent')
    return render_template("noticias.html", useragent=useragent)
    
@application.route('/soporte')
def soporte():
    return render_template("soporte.html")
    
@application.route('/registro')
def registro():
    return render_template("registro.html")

@application.route('/acercade')
def acercade():
    return render_template("acerca.html")
    
    
@application.route('/registrocompleto', methods = ['POST'])
def registro_completo():
    correo = request.form['correo-registro']
    passregistro = request.form['pass-registro']
    repeatpass = request.form['repeat-pass']
    #term1 = request.form['aceptar-condiciones']
    #term2 = request.form['aceptar-lorem']
   
    
    if passregistro == repeatpass:
        res = lambdaRegistro(correo, passregistro)
        if res['status'] == 'COMPLETED':
          return render_template("registrocompleto.html")
        else:
          flash(res['message'])
          return redirect('/registro')
    else:
        flash('Error en el registro, contraseñas no validas')
        return redirect('/registro')
        


   
@application.route('/login', methods = ['GET','POST'])
def login():
    if request.method == 'POST':
      correo = request.form['correo-login']
      passlogin = request.form['contraseña']
      
      res = lambdaLogin(correo, passlogin)
      
      if res['status'] == 'COMPLETED':
        #Que redirige a resumen
        return redirect('/zona-privada')
        
      else:
          flash('El usuario y/o la contraseña son incorrectos')
          return redirect('/login')
    else:
      return render_template("iniciarsesion.html")

   
# run the app.
if __name__ == "__main__":
    application.debug = True
    application.run()