<?php
    $correoLogin = $_POST['correo-login'];
    $contraseñaLogin = $_POST['contraseña'];
    if (isset($_POST['aceptar-login'])) {
        if (empty($correoLogin)) {
            ?>
            <script>
                let alertaCorreo = document.getElementById('alert-correo');
                function asignar(){
                    alertaCorreo.style.display = "block";
                    alertaCorreo.innerHTML = "Ingresa un correo electrónico";
                }
                asignar();
            </script> 
            <?php
        }
        if (empty($contraseñaLogin)) {
            ?>
            <script>
                let alertaPassword = document.getElementById('alert-contraseña');
                function asignarPass(){
                    alertaPassword.style.display = "block";
                    alertaPassword.innerHTML = "Ingresa una contraseña";
                }
                asignarPass();
            </script> 
            <?php
        }
    }
?>