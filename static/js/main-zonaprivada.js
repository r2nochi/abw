window.addEventListener('load', function() {

    document.getElementById('fecha-1').type = 'text';
    document.getElementById('fecha-1').style.cursor = 'pointer';


    document.getElementById('fecha-1').addEventListener('blur', function() {

        document.getElementById('fecha-1').type = 'text';

    });

    document.getElementById('fecha-1').addEventListener('focus', function() {

        document.getElementById('fecha-1').type = 'date';

    });
    /* El otro input calendario */
    document.getElementById('fecha-2').type = 'text';
    document.getElementById('fecha-2').style.cursor = 'pointer';

    document.getElementById('fecha-2').addEventListener('blur', function() {

        document.getElementById('fecha-2').type = 'text';

    });

    document.getElementById('fecha-2').addEventListener('focus', function() {

        document.getElementById('fecha-2').type = 'date';

    });

});


/* ACCORDEON HISTORIAL */

let btnaccordeonHistorial = document.getElementsByClassName('drop-list-op');
let detalleHistorial = document.getElementsByClassName('lista-individual');


for (let i = 0; i < detalleHistorial.length; i++) {
    detalleHistorial[i].addEventListener('click', function() {
        this.classList.toggle('active');
        btnaccordeonHistorial.classList.toggle('active');
    });
}