<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Edita tu perfil en Agente Bitcoin y comienza a comprar y vender Bitcoin, realiza tus operaciones con mucha seguridad y confianza desde Perú.">
    <title>Mi perfil | Zona de Miembros | Agente Bitcoin</title>
    <!-- css -->
    <link rel="stylesheet" href="../css/global-style.css">
    <link rel="stylesheet" href="../css/zona-privada/interfaz-principal.css">
    <link rel="stylesheet" href="../css/zona-privada/interfaz-responsive.css">
    <!-- css perfil -->
    <link rel="stylesheet" href="../css/zona-privada/perfil.css">
    <link rel="stylesheet" href="../css/zona-privada/perfil-responsive.css">
    <!-- FAVICON -->
    <link rel="shortcut icon" href="../images/favicon-agentebitcoin.png" />
    <!-- Script-FontAwesome -->
    <script src="https://kit.fontawesome.com/660257203e.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <nav class="side-bar" id="side-bar" style="background-image: url(../images/zona-privada/sidebar-bg.png)">
            <ul>
                <li>
                    <a href="resumen.php" title="resumen"><img src="../images/zona-privada/resumen.png" alt="resumen">Resumen</a>
                </li>
                <li>
                    <a href="comprar.php" title="comprar"><img src="../images/zona-privada/comprar.png" alt="comprar">Comprar</a>
                </li>
                <li>
                    <a href="vender.php" title="vender"><img src="../images/zona-privada/vender.png" alt="vender">Vender</a>
                </li>
                <li>
                    <a href="analisis-cripto.php" title="analisis-cripto"><img src="../images/zona-privada/analisis-cripto.png" alt="analisis-cripto">Análisis Cripto</a>
                </li>
                <li>
                    <a href="billetera-cripto.php" title="billetera"><img src="../images/zona-privada/billetera.png" alt="billetera">Mis billeteras Cripto</a>
                </li>
                <li>
                    <a href="cuentas.php" title="mis-cuentas"><img src="../images/zona-privada/cuentas.png" alt="cuentas">Mis cuentas de banco</a>
                </li>
                <li>
                    <a href="historial.php" title="historial"><img src="../images/zona-privada/historial.png" alt="historial">Historial</a>
                </li>
                <li>
                    <a href="noticias.php" title="noticias"><img src="../images/zona-privada/Noticias.png " alt="noticias">Noticias</a>
                </li>
                <li>
                    <a href="../index1.php" title="cerrar-sesion"><img src="../images/zona-privada/cerrar-sesion.png" alt="cerrar">Cerrar Sesión</a>
                </li>
            </ul>
            <i class="fas fa-times-circle" id="close-sidebar"></i>
        </nav>
        <span class="btn-sidemenu" id="btn-sidemenu"><i class="fas fa-bars"></i></span>
        <div class="body">
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
            <section class="perfil-section">
                <div class="titulo-perfil">
                    <h1>Mi perfil</h1>
                </div>
                <div class="verify-simple">
                    <h2>Verificación Simple</h2>
                    <div class="box-verify">
                        <div class="celular">
                            <form action="#">
                                <div>
                                    <label for="cel-verify">Número de Celular</label>
                                    <input type="cel" id="cel-verify" name="celular-verify">
                                </div>

                                <div>
                                    <label for="verify-sms">Validación por SMS</label>
                                    <input type="cel" id="verify-sms" name="verify-sms">
                                </div>
                            </form>
                            <!-- Botón -->
                            <a href="#" title="validar">Validar</a>
                        </div>
                        <div class="email">
                            <form action="#">
                                <label for="mail-verify">Correo Electrónico</label>
                                <input type="cel" id="mail-verify" name="mail-verify">
                            </form>
                            <!-- Botón -->
                            <a href="#" title="editar">Editar</a>
                        </div>
                    </div>
                </div>

                <div class="verify-advance">
                    <h2>Verificación Avanzada</h2>
                    <div class="datos-principales">
                        <form action="#">
                            <div>
                                <label for="nombre">Nombre</label>
                                <input type="text" id="nombre" name="nombre">
                            </div>

                            <div>
                                <label for="apellido-p">Apellido Paterno</label>
                                <input type="text" id="apellido-p" name="apellido-p">
                            </div>

                            <div>
                                <label for="apellido-m">Apellido Materno</label>
                                <input type="text" id="apellido-m" name="apellido-m">
                            </div>
                        </form>
                    </div>

                    <div class="documentacion">
                        <form action="#">
                            <div>
                                <label for="documento-id">Tipo de Documento</label>
                                <select name="documento-id" id="documento-id" value="dni">
                                    <option value="dni">DNI</option>
                                    <option value="carnet-extranjeria">Carnet de Extranjería</option>
                                </select>
                            </div>

                            <div>
                                <label for="nro-documento">Número de documento</label>
                                <div class="nro-doc">
                                    <input type="cel" id="nro-documento" name="nro-documento">
                                    <input type="cel" id="documento-verify" name="documento-verify" minLength="1" maxlength="2">
                                </div>
                            </div>

                            <div>
                                <label for="ciudad-nacimiento">Ciudad de Nacimiento</label>
                                <input type="text" id="apellido-m" name="apellido-m">
                            </div>
                            <div>
                                <label for="f-nacimiento">Fecha de Nacimiento</label>
                                <input type="date" id="f-nacimiento" name="f-nacimiento">
                            </div>
                        </form>
                    </div>

                    <div class="direccion">
                        <form action="#">
                            <div class="prov-ciudad">
                                <div>
                                    <label for="provincia">Provincia de Residencia</label>
                                    <input type="text" id="provincia" name="provincia">
                                </div>
                                <div>
                                    <label for="ciudad">Ciudad de Residencia</label>
                                    <input type="text" id="ciudad" name="ciudad">
                                </div>
                            </div>
                            <div class="distr-direc">
                                <div>
                                    <label for="distrito">Distrito de Residencia</label>
                                    <input type="text" id="distrito" name="distrito">
                                </div>
                                <div>
                                    <label for="direccion">Direccion de Residencia</label>
                                    <input type="text" id="direccion" name="direccion">
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="validacion-documento">
                        <h3>Validar documento de Identidad</h3>
                        <div class="v-documento">
                            <div class="anverso">
                                <div>
                                    <img class="img-documento" src="../images/zona-privada/anverso.png" alt="anverso-id">
                                </div>
                                <a href="#" title="upload"> <img src="../images/zona-privada/upload.svg" alt="upload"> Subir Foto</a>
                            </div>

                            <div class="reverso">
                                <div>
                                    <img class="img-documento" src="../images/zona-privada/reverso.png" alt="reverso-id">
                                </div>
                                <a href="#" title="upload"> <img src="../images/zona-privada/upload.svg" alt="upload"> Subir Foto</a>
                            </div>

                            <div class="selfie">
                                <div>
                                    <img class="img-selfie" src="../images/zona-privada/selfie.png" alt="selfie">
                                </div>
                                <div class="opciones-upload">
                                    <a href="#" title="upload"> <img src="../images/zona-privada/upload.svg" alt="upload"> Subir Foto</a>
                                    <a href="#" title="webcam"> <img src="../images/zona-privada/webcam.svg" alt="webcam"> Webcam</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="persona-pep">
                        <h3>¿Eres Persona Expuesta Políticamente (P.E.P.)?</h3>

                        <div class="clausulas-pep">
                            <div class="clausula-pep">
                                <p>
                                    ¿Tienes vínculo contractual en sociedades, o de parentesco hasta de segundo grado, con alguna persona expuesta políticamente? <a href="#">Ver más</a>.
                                </p>
                                <div class="checkbox">
                                    <form action="#">
                                        <div>
                                            <input type="checkbox" name="si" id="si"> <label for="si">Sí</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" name="no" id="no"> <label for="no">No</label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="clausula-pep">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <form action="#">
                                    <input type="checkbox" name="acepto" id="acepto"> <label for="acepto">Acepto</label>
                                </form>
                            </div>

                            <!-- Boton validar -->

                            <a href="#" class="validar-datos">Validar Datos</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- script -->
    <script src="../js/interface.js"></script>
</body>

</html>