<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Conoce los últimos movimientos, tus saldos, análisis del Bitcoin y más. Inicia Sesión o Crea una cuenta gratis y empieza a comprar y vender Bitcoins desde Perú.">
    <title>Resumen de mi Cuenta Bitcoin | Zona de miembros | Agente Bitcoin</title>
    <!-- css -->
    <link rel="stylesheet" href="../css/global-style.css">
    <link rel="stylesheet" href="../css/zona-privada/interfaz-principal.css">
    <link rel="stylesheet" href="../css/zona-privada/interfaz-responsive.css">
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
            <section>
                <div class="aviso">
                    <p>Realiza la verificación de datos para que puedas comprar y vender criptomonedas</p>
                    <a href="#" title="valida-datos">Por favor Valida tus datos</a>
                </div>
                <div class="resumen">
                    <div class="titulo-resumen">
                        <h1>Resumen</h1>
                    </div>
                    <div class="text-aviso">
                        <p>Estado de la cuenta: <a href="#"> Activa(Puedes comprar, vender, cargar sueldo)</a></p>
                    </div>
                </div>

                <div class="saldos" style="background-image: url(../images/zona-privada/bg-saldos.png);">
                    <h2>Mis Saldos en Agente Bitcoin</h2>
                    <div class="box-saldos">
                        <div class="box-saldo">
                            <div class="saldo">
                                <div class="title">
                                    <img src="../images/zona-privada/round-saldo.svg" alt="circle">
                                    <h4>Saldo Bitcoin</h4>
                                </div>
                                <div class="content">
                                    <p> <span>BTC</span> 0.000000</p>
                                </div>
                                <div class="bottom">
                                    <a href="#">Pasar BTC a mi billetera</a>
                                </div>
                            </div>
                            <button><a href="#">Comprar BTC</a></button>
                        </div>

                        <div class="box-saldo">
                            <div class="saldo">
                                <div class="title">
                                    <img src="../images/zona-privada/round-saldo.svg" alt="circle">
                                    <h4>Saldo Bitcoin</h4>
                                </div>
                                <div class="content">
                                    <p><span>BTC</span> 0.000000</p>
                                </div>
                                <div class="bottom">
                                    <a href="#">Pasar BTC a mi billetera</a>
                                </div>
                            </div>
                            <button><a href="#">Vender BTC</a></button>
                        </div>

                        <div class="box-saldo">
                            <div class="saldo">
                                <div class="title">
                                    <img src="../images/zona-privada/round-saldo.svg" alt="circle">
                                    <h4>Saldo Bitcoin</h4>
                                </div>
                                <div class="content">
                                    <p><span>BTC</span> 0.000000</p>
                                </div>
                                <div class="bottom">
                                    <a href="#">Pasar BTC a mi billetera</a>
                                </div>
                            </div>
                            <button><a href="#">Cargar saldo</a></button>
                        </div>
                    </div>
                </div>
                <div class="operaciones-pendientes">
                    <h2>Operaciones Pendientes</h2>
                    <div class="operaciones">
                        <ul class="titulo-lista">
                            <li>Fecha</li>
                            <li>Descripción</li>
                            <li class="tiempo">Tiempo para validar</li>
                            <li class="monto">Monto</li>
                            <li>Acciones</li>
                        </ul>
                        <!-- Contenido -->
                        <div class="contenido-op">
                            <div class="operacion">
                                <ul>
                                    <li>09/06/2021</li>
                                    <li>Venta BTC</li>
                                    <li class="tiempo">14:58</li>
                                    <li class="monto">S./ 1,000.00</li>
                                    <li>
                                        <p class="drop-icon"><img src="../images/zona-privada/drop-list-blue.svg" alt="drop-list-icon"></p>
                                        <a href="#" title="cargar-constancia" class="texto-accion">Cargar Constancia</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="contenido-drop">
                                <div class="drop-sup">
                                    <div>
                                        <p>Nro de Operación:</p>
                                        <span>00068</span>
                                    </div>
                                    <div>
                                        <p>Tiempo para validar:</p>
                                        <span>12:30</span>
                                    </div>
                                </div>
                                <div class="drop-mid">
                                    <p>Monto:</p>
                                    <span class="monto-drop">S/ 1,000.00 <span />
                                </div>

                                <div class="drop-bottom">
                                    <a href="#" title="cargar-constancia" class="texto-accion-drop">Cargar Constancia</a>
                                </div>
                            </div>
                        </div>
                        <div class="contenido-op">
                            <div class="operacion">
                                <ul>
                                    <li>09/06/2021</li>
                                    <li>Validar datos para venta</li>
                                    <li class="tiempo">14:58</li>
                                    <li class="monto">S./ 1,000.00</li>
                                    <li>
                                        <p class="drop-icon"><img src="../images/zona-privada/drop-list-blue.svg" alt="drop-list-icon"></p>
                                        <a href="#" title="validar-datos" class="texto-accion">Validar Datos</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="contenido-drop">
                                <div class="drop-sup">
                                    <div>
                                        <p>Nro de Operación:</p>
                                        <span>00068</span>
                                    </div>
                                    <div>
                                        <p>Tiempo para validar:</p>
                                        <span>12:30</span>
                                    </div>
                                </div>
                                <div class="drop-mid">
                                    <p>Monto:</p>
                                    <span class="monto-drop">S/ 1,000.00 <span />
                                </div>

                                <div class="drop-bottom">
                                    <a href="#" title="cargar-constancia" class="texto-accion-drop">Cargar Constancia</a>
                                </div>
                            </div>
                        </div>

                        <div class="contenido-op">
                            <div class="operacion">
                                <ul>
                                    <li>09/06/2021</li>
                                    <li>Compra BTC</li>
                                    <li class="tiempo">14:58</li>
                                    <li class="monto">S./ 1,000.00</li>
                                    <li>
                                        <p class="drop-icon"><img src="../images/zona-privada/drop-list-blue.svg" alt="drop-list-icon"></p>
                                        <a href="#" title="cargar-constancia" class="texto-accion">Cargar Constancia</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="contenido-drop">
                                <div class="drop-sup">
                                    <div>
                                        <p>Nro de Operación:</p>
                                        <span>00068</span>
                                    </div>
                                    <div>
                                        <p>Tiempo para validar:</p>
                                        <span>12:30</span>
                                    </div>
                                </div>
                                <div class="drop-mid">
                                    <p>Monto:</p>
                                    <span class="monto-drop">S/ 1,000.00 <span />
                                </div>

                                <div class="drop-bottom">
                                    <a href="#" title="cargar-constancia" class="texto-accion-drop">Cargar Constancia</a>
                                </div>
                            </div>
                        </div>


                        <div class="contenido-op">
                            <div class="operacion">
                                <ul>
                                    <li>09/06/2021</li>
                                    <li>Cargar Saldo</li>
                                    <li class="tiempo">14:58</li>
                                    <li class="monto">S./ 1,000.00</li>
                                    <li>
                                        <p class="drop-icon"><img src="../images/zona-privada/drop-list-blue.svg" alt="drop-list-icon"></p>
                                        <a href="#" title="cargar-constancia" class="texto-accion">Cargar Constancia</a>
                                    </li>
                                </ul>
                                <div class="contenido-drop">
                                    <div class="drop-sup">
                                        <div>
                                            <p>Nro de Operación:</p>
                                            <span>00068</span>
                                        </div>
                                        <div>
                                            <p>Tiempo para validar:</p>
                                            <span>12:30</span>
                                        </div>
                                    </div>
                                    <div class="drop-mid">
                                        <p>Monto:</p>
                                        <span class="monto-drop">S/ 1,000.00 <span />
                                    </div>

                                    <div class="drop-bottom">
                                        <a href="#" title="cargar-constancia" class="texto-accion-drop">Cargar Constancia</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="evolucion-btc">
                    <h2>Evolución del Bitcoin</h2>
                    <div class="evolucion">
                        <div class="detalle-btc">
                            <div class="divisa">
                            <div class="evo-divisa-select"> 
                                <form action="#">              
                                        <select name="divisa-evolution" id="divisa-evolution" style="background-image: url(../images/zona-privada/drop-list-blue.svg);">
                                            <option value="usd">USD</option>
                                            <option value="pen">PEN</option>
                                            <option value="mxn">MXN</option>
                                        </select>
                                </form>
                                </div>
                            </div>
                            <!-- Info-->
                            <div class="info-real-time">
                                <div class="img-btc"> <img src="../images/zona-privada/bitcoin.png" alt="bitcoin"></div>

                                <div class="info-content">
                                    <div class="coin">
                                        <p>1BTC</p>
                                    </div>
                                    <div class="detail-info">
                                        <p>$ 35.845.000</p>
                                        <div><img src="../images/zona-privada/up-green.svg" alt="up">
                                            <p>+165,2 (+0,46%)</p>
                                        </div>
                                    </div>
                                    <div class="bottom-info">
                                        <p>16:50:45 - Info en tiempo real (Aviso legal)</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Dias -->
                            <div class="time-mode">
                                <a href="#" title="1-dia" class="selected">1D</a>
                                <a href="#" title="1-semana">1S</a>
                                <a href="#" title="1-mes">1M</a>
                            </div>
                        </div>
                        <div class="stats">
                            <img src="../images/stats-btc.png" alt="estadisticas-btc">
                        </div>
                    </div>
                </div>
                <div class="noticias">
                    <h2>Noticias</h2>
                    <div class="box-noticias">
                        <!-- Noticias -->
                        <div class="noticia">
                            <div><img src="../images/noticia-img1.png" alt="noticia-bitcoin"></div>
                            <div class="desc-noticia">
                                <p>De China a Argentina: posible éxodo de mineros del bitcoin por la electricidad barata.</p>
                                <a href="#" title="Leer más">Leer más</a>
                            </div>
                        </div>
                        <div class="noticia">
                            <div><img src="../images/noticia-img3.png" alt="noticia-bitcoin"></div>
                            <div class="desc-noticia">
                                <p>De China a Argentina: posible éxodo de mineros del bitcoin por la electricidad barata.</p>
                                <a href="#" title="Leer más">Leer más</a>
                            </div>
                        </div>
                        <div class="noticia">
                            <div><img src="../images/noticia-img2.png" alt="noticia-bitcoin"></div>
                            <div class="desc-noticia">
                                <p>De China a Argentina: posible éxodo de mineros del bitcoin por la electricidad barata.</p>
                                <a href="#" title="Leer más">Leer más</a>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
        <!-- script -->
        <script src="../js/interface.js"></script>
</body>

</html>