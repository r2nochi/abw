<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Últimas noticias y novedades acerca del Bitcoin y otras criptomonedas. Entérate aquí en Agente Bitcoin. Compra y vende Bitcoins desde Perú.">
    <title>Novedades del Bitcoin | Zona de Miembros | Agente Bitcoin</title>
    <!-- css -->
    <link rel="stylesheet" href="../css/global-style.css">
    <link rel="stylesheet" href="../css/zona-privada/interfaz-principal.css">
    <link rel="stylesheet" href="../css/zona-privada/interfaz-responsive.css">
    <!-- css vender -->
    <link rel="stylesheet" href="../css/zona-privada/noticias.css">
    <link rel="stylesheet" href="../css/zona-privada/noticias-responsive.css">
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

            <section class="noticias-btc">
                <div class="titulo-noticias">
                    <h1>Noticias</h1>
                </div>

                <rssapp-wall id="SlVLuVED89pboySv"></rssapp-wall><script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
                <!--noticias
                <div class="container-noticias">
                    <div class="noticia">
                        <img src="../images/zona-privada/noticia-1.png" alt="noticia">
                        <div class="container-noticia">
                            <div class="info-superior">
                                <div class="titulo">
                                    <h5>Lorem ipsum</h5>
                                    <p>Publicado el 30/05/2021</p>
                                </div>
                                <div class="opciones">
                                    <button><a href="#" title="leer-mas">Leer más</a></button>
                                    <a href="#" title="compartir"><img src="../images/share.svg" alt="compartir"></a>
                                </div>
                            </div>
                            <div class="texto-noticia">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="noticia">
                        <img src="../images/zona-privada/noticia-2.png" alt="noticia">
                        <div class="container-noticia">
                            <div class="info-superior">
                                <div class="titulo">
                                    <h5>Lorem ipsum</h5>
                                    <p>Publicado el 30/05/2021</p>
                                </div>
                                <div class="opciones">
                                    <button><a href="#" title="leer-mas">Leer más</a></button>
                                    <a href="#" title="compartir"><img src="../images/share.svg" alt="compartir"></a>
                                </div>
                            </div>
                            <div class="texto-noticia">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="noticia">
                        <img src="../images/zona-privada/noticia-3.png" alt="noticia">
                        <div class="container-noticia">
                            <div class="info-superior">
                                <div class="titulo">
                                    <h5>Lorem ipsum</h5>
                                    <p>Publicado el 30/05/2021</p>
                                </div>
                                <div class="opciones">
                                    <button><a href="#" title="leer-mas">Leer más</a></button>
                                    <a href="#" title="compartir"><img src="../images/share.svg" alt="compartir"></a>
                                </div>
                            </div>
                            <div class="texto-noticia">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="noticia">
                        <img src="../images/zona-privada/noticia-4.png" alt="noticia">
                        <div class="container-noticia">
                            <div class="info-superior">
                                <div class="titulo">
                                    <h5>Lorem ipsum</h5>
                                    <p>Publicado el 30/05/2021</p>
                                </div>
                                <div class="opciones">
                                    <button><a href="#" title="leer-mas">Leer más</a></button>
                                    <a href="#" title="compartir"><img src="../images/share.svg" alt="compartir"></a>
                                </div>
                            </div>
                            <div class="texto-noticia">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                            </div>
                        </div>
                    </div>
                </div>
                -->
                <div class="tabs">
                    <ul>
                        <li><a href="#" title="previo"> <img src="../images/zona-privada/back-arrow.svg" alt="previo"></a></li> 
                        <li><a href="#" title="1">1</a></li> 
                        <li><a href="#" title="2">2</a></li> 
                        <li><a href="#" title="3">3</a></li> 
                        <li><a href="#" title="4">4</a></li> 
                        <li><a href="#" title="5">5</a></li> 
                        <li><a href="#" title="siguiente"><img src="../images/zona-privada/next-arrow.svg" alt="siguiente"></a></li> 
                    </ul>
                </div>
            
            </section>
        </div>
    </div>

    <!-- script -->
    <script src="../js/interface.js"></script>
</body>

</html>