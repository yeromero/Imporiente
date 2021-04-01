<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Imporiente cuenta con el mejor servicio de villaviencio y toda la calidad que necesitas">
    <meta name="keywords" content="imporiente,television,internet">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/jquery.bxslider.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0c1f617940.js" crossorigin="anonymous"></script>
    <title>Imporiente - Empresa de Telecomunicaciones</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <a href="../index.html">
                <img src="../img/Logo.svg" alt="Imporiente" loading="lazy" class="imagen">
            </a>
            <nav>
                <a href="acercade.html">Acerca de</a>
                <a href="television.html">Television</a>
                <a href="combos.html">Combos</a>
                <a href="proteccion.html">Proteccion al Usuario</a>
                <a href="#">Paga tu Factura</a>
                <a href="#">Contactanos</a>
                <a href="pqr.php">PQR</a>
            </nav>
            <a href="" class="menu"><i class="fas fa-bars"></i></a>
        </div>
    </header>
    <main>
        <section>
            <div class="contenedor-formulario">
                <h2>Contáctenos Estaremos Gustoso de Atenderle</h2>
                <div class="formulario">
                    <h4>Contactenos</h4>
                    <form action="Contactenos.php" method="POST">
                        <div class="item-formulario">    
                            <i class="fas fa-user"></i></label><input type="text" name="nombre"   class="form-control" placeholder="Nombre y Apellido">
                        </div>
                        <div class="item-formulario">
                        <i class="fas fa-phone-alt"></i></i></label><input type="text" name="telefono"   class="form-control" placeholder="Numero de Telefono">
                        </div>
                        <div class="item-formulario">
                            <i class="fas fa-envelope"></i><input type="email" name="email"  class="form-control" placeholder="Email">
                        </div>
                        <div class="item-formulario">
                            <i class="fas fa-concierge-bell"></i>
                            <select name="tiposervicio" class="form-control">
                                <option value="Television">Televisión</option>
                                <option value="TV +  Internet">Television + Internet</option>
                                <option value="Punto Adicional">Punto Adicional</option>
                                <option value="Traslado">Traslado</option>
                                <option value="Otros Servicios">Otros Servicios</option>
                            </select>
                        </div>
                        <div class="item-formulario">
                            <i class="far fa-edit"></i>
                            <textarea name="mensaje" placeholder="Mensaje a Enviar" class="form-control"></textarea>
                        </div>
                        <div class="item-formulario">
                            <input type="submit" value="Enviar" class="btn-formulario">
                        </div>
                        <?php
                            if($_SERVER["REQUEST_METHOD"] == "POST"){
                                
                                $nombre = $_POST["nombre"];
                                $telefono = $_POST["telefono"];
                                $email = $_POST["email"];
                                $servicio = $_POST["tiposervicio"];
                                $mensaje = $_POST["mensaje"];
                                
                                if(isset($nombre)){
                                    if(isset($telefono)){
                                        if(isset($email)){
                                            if(isset($servicio)){
                                                if(isset($mensaje))
                                                    $para = "imporientetelevision@gmail.com"; //colocar aqui el correo a dodne quieres que llegue
													$asunto = "Solicitud de Informacion";
													$cuerpo = $nombre."\n".$telefono."\n".$email."\n".$servicio."\n".$mensaje;
													$adicional = "From: noreply@imporiente.co";

													mail($para,$asunto,$cuerpo,$adicional);
												?>
													<p>Envio exitoso</p>
												<?php
                                            }
                                        }
                                    }
                                }
                            }
                
                        ?>
                    </form>
                    </div>
            </div>
        </section>
        <section>
            <div class="mapa-footer">
                <p>Tambien nos puede llamar</p>
                    <ul>
                        <li><a href="">Tel. +(57) 3205966053</li>
                        <li>Tel.  +(57) 3213317122</li>
                    </ul>
                <p>O escríbenos  al</p>
                    <ul>
                        <li><a href="https://api.whatsapp.com/send?phone=3008364119&text=Buenos%20Dias,%20Solicito%20de%20su%20ayuda">Tel. +(57) 3008364119</a></li>
                    </ul>
                <p>O Visítanos en nuestras oficinas</p>
                <p>Cra. 54 Sur N. 43 - 1, Barrio Porfia</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248.73096369899181!2d-73.66957674369537!3d4.082304867612451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3e3016187221eb%3A0xc6cde9505d84f4be!2sCl.%2054%20Sur%2C%20Villavicencio%2C%20Meta!5e0!3m2!1ses-419!2sco!4v1616867073846!5m2!1ses-419!2sco" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section>
        <!-- Imagen de Covid19 -->
        <section class="crc">
            <a href="https://www.crcom.gov.co/es/pagina/regimen-proteccion-usuario" target="_blank"><img src="../img/bamnnercrcabril2020.jpg" loading="lazy" alt=""></a>
        </section>
    </main>
    <footer>    
        <div class="columna columna-50">
            <ul class="menu-footer">
                <li><a href="acercade.html">Acerca de</a></li>
                <li><a href="television.html">Television</a></li>
                <li><a href="combos.html">Combos</a></li>
                <li><a href="proteccion.html">Proteccion al Usuario</a></li>
                <li><a href="#">Paga tu Factura</a></li>
                <li><a href="#">Contactanos</a></li>
            </ul>
        </div>
        <div class="columna columna-50 derecha">
            <ul class="menu-footer">
                <li><a href="">Indicadores</a></li>
                <li><a href="pqr.php">PQR</a></li>
            </ul>
        </div>
        <div class="columna columna-100">
            <a href=""><h3>Nuestras Redes</h3></a>
            <a href="" class="redes"><i class="fab fa-facebook-square"></i></a>
            <a href="" class="redes"><i class="fab fa-twitter-square"></i></a>
            <a href="" class="redes"><i class="fab fa-instagram-square"></i></a>
            <a href="" class="redes"><i class="fab fa-youtube-square"></i></a>
        </div>  
        <div class="final-footer">
            &copy Derechos Reservados 2021
        </div>
    </footer>
</body>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/jquery.bxslider.js"></script>
<script src="../js/app.js"></script>
</html>