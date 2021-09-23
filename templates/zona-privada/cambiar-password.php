<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cambiar la contraseña de tu cuenta de Agente Bitcoin. Inicia Sesión o Crea una cuenta gratis y empieza a comprar y vender Bitcoins desde Perú.">
    <title>Cambiar Contraseña | Zona de Miembros | Agente Bitcoin</title>
    <!-- css -->
    <link rel="stylesheet" href="../css/global-style.css" />
    <link rel="stylesheet" href="../css/zona-privada/contraseña.css">
    <link rel="stylesheet" href="../css/zona-privada/interfaz-principal.css">
    <link rel="stylesheet" href="../css/zona-privada/interfaz-responsive.css">
</head>
<body>
    <header>
                <div class="logo">
                    <img src="../images/logo-agentebitcoin.svg" alt="logo-agente-bitcoin">
                </div>
                <div class="perfil">
                    <div class="opciones">
                        <a href="#" title="despliegue-menu" id="btn-menu-interfaz"><img src="../images/desplegar.svg" alt="slideDown"></a>
                        <a href="#" title="nombre-usuario" class="nombre-usario">angelgarrido@gmail.com</a>
                    </div>
                    <div class="menu-perfil" id="menu-perfil">
                    <ul>
                            <li>
                                <img src="../images/zona-privada/perfil.png" alt="perfil">
                                <a href="perfil.php" title="perfil">Mi perfil</a>
                            </li>
                            <li>
                                <img src="../images/zona-privada/configuracion.png" alt="configuracion">
                                <a href="cambiar-password.php" title="cambiar contraseña">Cambiar contraseña</a>
                            </li>
                            <li>
                                <img src="../images/zona-privada/cerrar-s.png" alt="cerrar-sesion">
                                <a href="#" title="cerrar-sesion">Cerrar Sesión</a>
                            </li>
                    </ul>
                    </div>
                </div>
            </header>

    <section class="actualiza-contraseña">
        <div class="contraseña">
                <div class="recomendaciones">
                <h1>Actualiza tu contraseña</h1>
                    <p>Te recordamos que, por tu seguridad, no debes compartir tu contraseña con otras personas. </p>
                        <br>
                    <p>Para que tu contraseña sea segura te recomendamos:</p>
                        <ul>
                            <li>La longitud mínima debe ser de 8 dígitos</li>
                            <li>La contraseña debe tener letras y números</li>
                            <li>No elijas número consecutivos como 12345678 o 87654321</li>
                        </ul>
                </div>
                <div class="formulario-cambio">
                    <form action="#">
                        <div> 
                            <label for="">Contraseña actual</label>
                            <input type="password">
                        </div>

                        <div> 
                            <label for="">Nueva Contraseña</label>
                            <input type="password">
                        </div>

                        <div> 
                            <label for="">Repetir nueva contraseña</label>
                            <input type="password">
                        </div>

                        <input type="button" id="confirmar" value="Confirmar">
                    </form>
                </div>
        </div>
</section>

<!-- js -->
<script src="../js/interface.js"></script>
</body>
</html>