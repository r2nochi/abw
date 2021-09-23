<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Comprar Bitcoin nunca ha sido tan fácil desde Perú, en Agente Bitcoin podrás realizar tus operaciones con mucha seguridad y confianza. Crea tu cuenta">
    <title>Comprar Bitcoin | Zona de Miembros | Agente Bitcoinn</title>
    <!-- css -->
    <link rel="stylesheet" href="../css/global-style.css">
    <link rel="stylesheet" href="../css/zona-privada/interfaz-principal.css">
    <link rel="stylesheet" href="../css/zona-privada/interfaz-responsive.css">
    <!-- css vender -->
    <link rel="stylesheet" href="../css/zona-privada/comprar.css">
    <link rel="stylesheet" href="../css/zona-privada/comprar-responsive.css">
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
            <section class="op-comprar">
                <div class="titulo-comprar">
                    <h1>Comprar</h1>
                </div>
                <div class="box-comprar">
                    <div class="precio-act">
                        <h2>Precio actual del Bitcoin</h2>
                        <div class="content-precio">
                            <h3 id="precio">s/. 138,760.36 (?)</h3>
                            <div class="cuadro-conversion">
                            <div class="moneda-conver">
                                    <div class="img-conversion"><img src="../images/zona-privada/peru.png" alt="sol-peruano"></div>
                                    <div class="moneda-select">
                                        <select name="moneda" id="moneda" value="PEN" style="background-image: url(../images/zona-privada/drop-list-blue.svg);">
                                            <option value="PEN">PEN</option>
                                            <option value="USD">USD</option>
                                            <option value="MXN">MXN</option>
                                        </select>
                                    </div>
                            </div>
                                <div class="bitcoin-conver">
                                    <div class="img-conversion"><img src="../images/zona-privada/bitcoin.png" alt="bitcoin"></div>
                                    <p>BTC</p>
                                </div>
                                
                            </div>
                            <img src="../images/zona-privada/barra-selectora.png" alt="barra">
                            <div class="usar-saldo">
                                <input type="checkbox" name="usar-saldo" id="usar-saldo">
                                <p>Usar saldo disponible para compra (100PEN)</p>
                            </div>
                            <div class="cargar-saldo">
                                <a href="cargar-saldo.php">Cargar Saldo</a>
                            </div>
                            <div class="conversion-dinero">
                                <div class="btc">
                                    <p>0.00072</p>
                                </div>
                                <div class="divisa">
                                    <p>S/. 100.00</p>
                                </div>
                            </div>

                            <div class="cupon">
                                <form action="#">
                                    <div>
                                        <input type="text" name="cupon" id="cupon" placeholder="¿Tienes un cupón? Ingresalo aquí">
                                        <img src="../images/zona-privada/dscto.svg" alt="cupon-descuento">
                                    </div>
                                </form>
                            </div>
                            <div class="start-operacion"><a href="#">Comprar BTC</a></div>
                            <!-- RESPONSIVE -->
                            <div class="detalles-responsive">
                                <div class="titulo-detalles">
                                    <img src="../images/zona-privada/interrogante.svg" alt="interrogante">
                                    <h2>Detalles de la operación</h2>
                                    <p id="tiempo">13:51</p>
                                </div>
                                <div class="content-detalles">
                                    <div class="detalle">
                                        <p>Tiempo de Actualización:</p>
                                        <p class="dato" id="actualizacion">15 segundos</p>
                                    </div>
                                    <div class="detalle">
                                        <p>Valor 1 Bitcoin:</p>
                                        <p class="dato" id="valor-btc">PEN 138,760.36</p>
                                    </div>
                                    <div class="detalle">
                                        <p>Bitcoin a comprar:</p>
                                        <p class="dato" id="btc-comprar">0.00072</p>
                                    </div>
                                    <div class="detalle">
                                        <p>Valor Base:</p>
                                        <p class="dato" id="valor-base">PEN 100.00</p>
                                    </div>
                                    <div class="detalle">
                                        <p>% Comisión:</p>
                                        <p class="dato" id="comision-porcentaje">7%</p>
                                    </div>
                                    <div class="detalle">
                                        <p>Comisión total:</p>
                                        <p class="dato" id="comision-total">PEN 7.00</p>
                                    </div>
                                    <div class="detalle">
                                        <p>Monto:</p>
                                        <p class="dato" id="monto">PEN 97.00</p>
                                    </div>
                                </div>

                                <!-- Garantia -->
                                <div class="garantia">
                                    <p><span>Agente Bitcoin</span> garantiza comisiones dinámicas: Mientras más compres, nuestro porcentaje de comisión disminuye cuando incrementas el volúmen de compra.</p>
                                    <p>Toma en cuenta que el precio varía cada minuto. Al iniciar la operación se calculará y bloqueará el precio de momento y tendrás 15 minutos para completar el pago.</p>
                                    <p>El dinero obtenido por la venta la verás reflejada en saldos en la página de resumen.</p>
                                </div>
                            </div>
                        </div>
                        <div class="start-operacion-2"><a href="#">Comprar BTC</a></div>
                    </div>

                    <div class="detalles">
                        <div class="titulo-detalles">
                            <img src="../images/zona-privada/interrogante.svg" alt="interrogante">
                            <h2>Detalles de la operación</h2>
                            <p id="tiempo">13:51</p>
                        </div>
                        <div class="content-detalles">
                            <div class="detalle">
                                <p> Tiempo de Actualización:</p>
                                <p class="dato" id="actualizacion">15 segundos</p>
                            </div>
                            <div class="detalle">
                                <p>Valor 1 Bitcoin:</p>
                                <p class="dato" id="valor-btc">PEN 138,760.36</p>
                            </div>
                            <div class="detalle">
                                <p>Bitcoin a comprar:</p>
                                <p class="dato" id="btc-comprar">0.00072</p>
                            </div>
                            <div class="detalle">
                                <p>Valor Base:</p>
                                <p class="dato" id="valor-base">PEN 97.00</p>
                            </div>
                            <div class="detalle">
                                <p>% Comisión:</p>
                                <p class="dato" id="comision-porcentaje">7%</p>
                            </div>
                            <div class="detalle">
                                <p>Comisión total:</p>
                                <p class="dato" id="comision-total">PEN 7.00</p>
                            </div>
                            <div class="detalle" id="monto-detalle">
                                <p>Monto:</p>
                                <p class="dato" id="monto">PEN 100.00</p>
                            </div>
                        </div>

                        <!-- Garantia -->
                        <div class="garantia">
                            <p><span>Agente Bitcoin</span> garantiza comisiones dinámicas: Mientras más compres, nuestro porcentaje de comisión disminuye cuando incrementas el volúmen de compra.</p>
                            <p>Toma en cuenta que el precio varía cada minuto. Al iniciar la operación se calculará y bloqueará el precio de momento y tendrás 15 minutos para completar el pago.</p>
                            <p>El dinero obtenido por la venta la verás reflejada en saldos en la página de resumen.</p>
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