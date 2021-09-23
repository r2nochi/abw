/*----- MENU PERFIL----- */

let btnMenuInterface = document.getElementById('btn-menu-interfaz');
let MenuPerfil = document.getElementById('menu-perfil');

btnMenuInterface.addEventListener('click', function() {
    MenuPerfil.classList.toggle('active');
    this.classList.toggle('active');
})


/*-----SIDEMENU----- */

let btnSideMenu = document.getElementById('btn-sidemenu');
let SideMenu = document.getElementById('side-bar');

btnSideMenu.addEventListener('click', function() {
    SideMenu.classList.add('active');
    btnSideMenu.style.display = 'none';
})

/* CLOSE-SIDEMENU */
let closeSidebar = document.getElementById('close-sidebar');

closeSidebar.addEventListener('click', function() {
    SideMenu.classList.remove('active');
    btnSideMenu.style.display = 'block';
})

/*-----Acorderon Operaciones----- */

let btnaccordeon = document.getElementsByClassName('drop-icon');
let detalleOperacion = document.getElementsByClassName('contenido-op');


for (let i = 0; i < detalleOperacion.length; i++) {
    detalleOperacion[i].addEventListener('click', function() {
        this.classList.toggle('active');

    });
}