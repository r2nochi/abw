<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Conoce cuanto es el valor del Bitcoin hoy y como viene evolucionando a tráves del tiempo. Crea una cuenta gratis y empieza a comprar y vender Bitcoins en Perú.">
    <title>Precio del Bitcoin | Zona de Miembros | Agente Bitcoin</title>
    <!-- css -->
    <link rel="stylesheet" href="../css/global-style.css">
    <link rel="stylesheet" href="../css/zona-privada/interfaz-principal.css">
    <link rel="stylesheet" href="../css/zona-privada/interfaz-responsive.css">
    <!-- css vender -->
    <link rel="stylesheet" href="../css/zona-privada/analisis-cripto.css">
    <link rel="stylesheet" href="../css/zona-privada/analisis-cripto-responsive.css">
    <!-- FAVICON -->
    <link rel="shortcut icon" href="../images/favicon-agentebitcoin.png"/>
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
            <section class="analisis">
                <div class="titulo-analisis">
                    <h1>Análisis Cripto</h1>
                </div>
                <div class="datos-analisis">
                    <div class="datos">
                        <div class="grafico-btc">
                            <div><img src="../images/zona-privada/analisis-tecnico-btc.png" alt="analisis-tecnico-btc"></div>
                            <div><img src="../images/zona-privada/btc-grafico.png" alt="btc-grafico"></div>
                        </div>
                        <div class="compra-venta-btc">
                            <div class="select-compra-venta">
                                <ul>
                                    <li><a class="select-a" href="#" title="comprar">Comprar</a></li>
                                    <li><a href="#" title="vender">Vender</a></li>
                                </ul>
                            </div>
                            <div class="moneda">
                                <div class="divisa">
                                    <div><img src="../images/zona-privada/eeuu-flag.png" alt="eeuu-flag"></div>
                                    <div>
                                        <form action="#">
                                            <div class="divisa-select"> 
                                                <select name="divisa" id="divisa" style="background-image: url(../images/zona-privada/drop-list-blue.svg);">
                                                    <option value="usd">USD</option>
                                                    <option value="pen">PEN</option>
                                                    <option value="mxn">MXN</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>

                                    <p></p>
                                </div>
                                <div class="btc">
                                    <img src="../images/zona-privada/bitcoin.png" alt="bitcoin">
                                    <p>BTC</p>
                                </div>
                            </div>
                            <div class="saldo-billetera">
                                <div class="saldo-divisa">
                                    <p>Saldo (USD):</p>
                                    <p>$ 50.00</p>
                                </div>
                                <div class="saldo-btc">
                                    <p>Saldo (BTC):</p>
                                    <p>0.00172</p>
                                </div>
                            </div>
                            <img class="barra" src="../images/zona-privada/barra-selectora.png" alt="barra">
                            <div class="monto">
                                <p class="monto-divisa">$ 50.00</p>
                                <p class="monto-btc">0.00172</p>
                            </div>
                            <div class="cupon">
                                <form action="#">
                                    <div>
                                        <input type="text" name="cupon" id="cupon" placeholder="¿Tienes un cupón? Ingresalo aquí">
                                        <img src="../images/zona-privada/dscto.svg" alt="cupon-descuento">
                                    </div>
                                </form>
                            </div>
                            <div class="check-opciones">
                                <form action="#">
                                    <div><input type="checkbox" name="" id="">Usar saldo disponible para compra (50 USD)</div>
                                    <div class="cargar-saldo">
                                        <a href="cargar-saldo.php">Cargar Saldo</a>
                                    </div>
                                </form>
                            </div>
                            <div class="comprar">
                                <a href="#" title="ir-comprar">Ir a comprar</a>
                            </div>
                        </div>
                    </div>
                    <div class="datos">
                        <img class="stadisticas-btc" src="../images/stats-btc.png" alt="estadisticas-btc">
                    </div>
                </div>

            </section>
        </div>
    </div>

    <!-- script -->
    <script src="../js/interface.js"></script>
</body>

</html>