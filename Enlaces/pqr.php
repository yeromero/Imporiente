<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
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
                <a href="Contactenos.php">Contactanos</a>
                <a href="#">PQR</a>
            </nav>
            <a href="" class="menu"><i class="fas fa-bars"></i></a>
        </div>
    </header>
    <main>
        <section>
            <div class="contenedor-formulario">
                <h2>Si tienes problemas cuéntanos te ayudaremos</h2>
                <div class="formulario">
                    <h4>Solicitudes</h4>
                    <form action="pqr.php" method="POST">
                        <div class="item-formulario">    
                            <i class="fas fa-id-card-alt"></i><select name="tipodocumento" class="form-control">
                                <option value="0" selected>Elige una Opción</option>
                                <option value="Cedula de Ciudadania">Cedula de Ciudadanía</option>
                                <option value="Cedula de Extranjeria">Cedula de Extranjería</option>
                                <option value="NIT">NIT</option>
                                <option value="Pasaporte">Pasaporte</option>
                            </select>
                        </div>
                        <div class="item-formulario">
                            <i class="fas fa-id-badge"></i><input type="text" name="ndocumento" class="form-control" placeholder="Nro de Documento del Titular" required>
                        </div>
                        <div class="item-formulario">
                            <i class="fas fa-user"></i><input type="text" name="nombre" placeholder="Nombre y Apellido" class="form-control" required>
                        </div>
                        <div class="item-formulario">
                            <i class="fas fa-mobile-alt"></i><input type="text" name="telefono"   class="form-control" placeholder="Numero de Contacto" required>
                        </div>
                        <div class="item-formulario">
                            <i class="fas fa-directions"></i><input type="text" name="direccion" placeholder="Direccion del Domicilio" class="form-control" required>
                        </div>
                        <div class="item-formulario">
                            <i class="fas fa-road"></i><input type="text" name="barrio" placeholder="Barrio de Domicilio" class="form-control" required>
                        </div>
                        <div class="item-formulario">
                            <i class="fas fa-concierge-bell"></i><select name="servicio" class="form-control">
                                <option value="Television">Televisón</option>
                                <option value="Television">Televisón y Internet</option>
                            </select>
                        </div>
                        <div class="item-formulario">
                            <i class="fas fa-headset"></i><select name="requerimiento" class="form-control">
                                <option value="soporte">Soporte</option>
                                <option value="peticion">Petición</option>
                                <option value="queja">Queja</option>
                                <option value="reclamo">Reclamación</option>
                                <option value="solicitud">Solicitud</option>
                                <option value="felicitacion">Felicitacion</option>
                                <option value="sugerencia">Sugerencia</option>
                                <option value="denuncia">Denuncia</option>
                                <option value="cancelacion">Cancelacion</option>
                            </select>
                        </div>
                        <div class="item-formulario">
                            <i class="fas fa-envelope"></i><input type="email" name="email"  class="form-control" placeholder="Email" required>
                        </div>
                        <div class="item-formulario">
                            <i class="far fa-edit"></i>
                            <textarea name="mensaje" placeholder="Describa Brevemente su Requerimiento" class="form-control" required></textarea>
                        </div>
                        <div class="item-formulario">
                            <input type="submit" value="Enviar" class="btn-formulario">
                        </div>
                        <?php
                            if($_SERVER["REQUEST_METHOD"] == "POST"){
                                
                                $tipodocumento = $_POST["tipodocumento"];
                                $documento = $_POST["ndocumento"];
                                $nombre = $_POST["nombre"];
                                $telefono = $_POST["telefono"];
                                $direccion = $_POST["direccion"];
                                $barrio = $_POST["barrio"];
                                $servicio = $_POST["servicio"];
                                $requerimiento = $_POST["requerimiento"];
                                $email = $_POST["email"];
                                $mensaje = $_POST["mensaje"];
                                
                                if(isset($tipodocumento)){
                                    if(isset($documento)){
                                        if(isset($nombre)){
                                            if(isset($telefono)){
                                                if(isset($direccion)){
                                                    if(isset($barrio)){
                                                        if(isset($servicio)){
                                                            if(isset($requerimiento)){
                                                                if(isset($email)){
                                                                    if(isset($mensaje)){

                                                                        $para = "imporientetelevision@gmail.com"; //colocar aqui el correo a dodne quieres que llegue
													                    $asunto = "PQR";
													                    $cuerpo = $tipodocumento."\n".$documento."\n".$nombre."\n".$telefono."\n".$direccion."\n".$barrio."\n".$servicio."\n".$requerimiento."\n".$email."\n".$mensaje;
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
                                                }
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
                    <li>Tel. +(57) 3205966053</li>
                    <li>Tel. +(57) 3213317122</li>
                </ul>
                <p>O escríbenos  al</p>
                    <ul>
                        <li><a href="https://api.whatsapp.com/send?phone=3008364119&text=Buenos%20Dias,%20Solicito%20de%20su%20ayuda">Tel. +(57) 3008364119</a></li>
                    </ul>
                <p>O Visítanos en nuestras oficinas</p>
                <p>Cra. 54 Sur N. 43 - 1, Barrio Porfia</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248.73096369899181!2d-73.66957674369537!3d4.082304867612451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3e3016187221eb%3A0xc6cde9505d84f4be!2sCl.%2054%20Sur%2C%20Villavicencio%2C%20Meta!5e0!3m2!1ses-419!2sco!4v1616867073846!5m2!1ses-419!2sco" width="1280" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section>
        <!-- Imagen de Covid19 -->
        <section class="crc">
            <a href="https://www.crcom.gov.co/es/pagina/regimen-proteccion-usuario" target="_blank"><img src="../img/bamnnercrcabril2020.jpg" loading="lazy" loading="lazy" alt="" ></a>
        </section>
    </main>
    <footer>    
        <div class="columna columna-50">
            <ul class="menu-footer">
                <li><a href=""><a href="acercade.html">Acerca de</a></li>
                <li><a href=""><a href="television.html">Television</a></li>
                <li><a href=""><a href="combos.html">Combos</a></li>
                <li><a href=""><a href="proteccion.html">Proteccion al Usuario</a></li>
                <li><a href=""><a href="#">Paga tu Factura</a></li>
                <li><a href=""><a href="Contactenos.php">Contactanos</a></li>
            </ul>
        </div>
        <div class="columna columna-50 derecha">
            <ul class="menu-footer">
                <li><a href="">Indicadores</a></li>
                <li><a href="">Resolucion 19012 2020</a></li>
                <li><a href="#">PQR</a></li>
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