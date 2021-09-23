
from flask import Blueprint, render_template, abort


acercade_page = Blueprint('acercade_page', __name__)

@acercade_page.route('/acercade')
def acercade():
    return render_template("acerca.html")