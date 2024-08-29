<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="../front-end/img/iconos/logo.jpg">
    <link rel="stylesheet" href="../front-end/css/contact.css">
    <link rel="stylesheet" href="../front-end/css/menu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <link rel="stylesheet" href="../front-end/css/scroll.css">
    <title>Contact us</title>
</head>
<body>
    <section class="preliminar">
        <div class="preliminar_int">
            <div class="preliminar-detalle" id="ancho1">
                <div class="ancho1-caja">
                    <a target="_blank" href="https://www.google.com/intl/es-419/gmail/about/"><img class="redes" src="../front-end/img/iconos/mail.png" alt=""></a>
                    <p class="span-none">Carwashduluth@gmail.com</p>
                </div>
                <div class="ancho1-caja">
                    <p>|</p>
                </div>
                <div class="ancho1-caja">
                    <img class="redes" src="../front-end/img/iconos/numero.png" alt="">
                    <span class="span-none">+01 706 850 93 52</span>
                </div>
            </div>
            <div class="preliminar-detalle">
                <div class="flex-flex">
                    <div>
                        <a target="_blank" href="https://www.instagram.com/athensautowash?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><img class="redes" src="../front-end/img/iconos/ig.png" alt=""></a>
                    </div>
                    <div>
                        <a target="_blank" href="https://www.facebook.com/athenswash"><img class="redes" src="../front-end/img/iconos/facebook.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="header">
        <div class="header_flex">
            <div class="logo_box">
                <div class="logo_int">
                    <img class="logo" src="../front-end/img/iconos/logo.jpg" alt="empresa de autolavado con diferentes servicios de desinfexion, limpieza y mantenimiento">
                    <p class="athens"></p>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
                <script src="../front-end/js/athens.js"></script>
            </div>
            <div class="container-navs">
                <div class="nav_box">
                    <nav class="nav">
                        <ul>
                            <li class="option ham-option"><a href="../index.html">HOME</a></li>
                            <li class="option ham-option"><a href="about.html">ABOUT</a></li>
                            <li class="option ham-option"><a href="serviop2.html">SERVICES</a></li>
                            <li class="option ham-option"><a href="membreships.html">MEMBERSHIPS</a></li>
                            <li class="option ham-option"><a href="blog.html">BLOG</a></li>
                            <li><a class="position ham-position" href="contact.php">CONTACT</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="nav-ham">
                    <nav class="nav_box nav-box-ham">
                        <div class="off-screen-menu">
                            <ul class="ham-list">
                                <li class="option ham-option"><a href="../index.html">HOME</a></li>
                                <li class="option ham-option"><a href="about.html">ABOUT</a></li>
                                <li class="option ham-option"><a href="serviop2.html">SERVICES</a></li>
                                <li class="option ham-option"><a href="membreships.html">MEMBERSHIPS</a></li>
                                <li class="option ham-option"><a href="blog.html">BLOG</a></li>
                                <li><a class="position ham-position" href="contact.php">CONTACT</a></li>
                            </ul>
                        </div>
                        <nav>
                            <div class="hamburguesa">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </nav>
                        <script src="../front-end/js/menu.js"></script>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="home">
        <div class="info-letras" data-aos="fade-down">
            <div class="letras-int">
                <h1 class="athens">CONTACT US</h1>
            </div>
        </div>
    </section>
    
    <section class="relativeposition">
        <section class="header-bottom">
            <div class="text-hb" data-aos="fade-right" data-aos-duration="800">
                <div>
                    <h2 class="textcontact">DO YOU HAVE SOMETHING TO TELL US?</h2>
                    <div class="separador"></div>
                    <p class="textcontact2">We are here to listen and improve together.</p>
                </div>
            </div>
            <div class="formulario" data-aos="fade-left" data-aos-duration="800">
                <div class="form">
                    <form method="POST" class="form_form">
                        <div class="titule">
                            <h3 class="tittles">WRITE US</h3>
                        </div>
                        <div class="info-message" data-validate = "El nombre es requerido">
                            <input class="caja_text" type="text" name="name" required>
                            <label class="label" for="name">NAME</label>
                            <span></span>
                        </div>
                        <div class="info-message" data-validate="El corrreo es necesario">
                            <input class="caja_text" type="text" name="email" required>
                            <label class="label" for="email">EMAIL</label>
                            <span></span>
                        </div>
                        <div class="info-message" data-validate="El asunto es necesario">  
                            <input class="caja_text" type="text" name="subject" required>
                            <label class="label" for="subject">SUBJECT</label>
                            <span></span>
                        </div>
                        <div class="info-message" data-validate="Escriba el mensaje por favor">
                            <textarea name="messaje" id="" cols="30" rows="10" class="caja_text" required></textarea>
                            <label class="label" for="messaje">MESSAGE</label>
                            <span></span>
                        </div>
                        <div class="buttom">
                            <!-- <button class="boton" type="submit" name="enviar">SENT MESSAGE</button> -->
                            <input type="submit" value="SEND" class="boton" name="enviar" >
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </section>
    
    <section class="fotter">
        <div class="fotter-flex"> 
            <div class="fot_int">
                <div class="mini_about" id="rightpos">  
                    <a href="index.html">
                        <img id="about_img" src="../front-end/img/galeria/Athens-Car-Wash-Logo-FINAL.png" alt="Logo of a car wash with various disinfection, cleaning, and maintenance services">
                    </a>
                </div>
            </div>
            <div class="fot_int">
                <div class="mini_services">
                    <div class="boxi-redes">
                        <h4>OTHER SERVICES</h4>
                    </div>
                    <div class="boxi">
                        <div class="info_contact_fot">
                            <img class="icon_fot" src="../front-end/img/iconos/snacks.png" alt="">
                            <p>Snacks & Beverage Available for Sale</p>
                        </div>
                        <div class="info_contact_fot">
                            <img class="icon_fot" src="../front-end/img/iconos/ambientadores.png" alt="">
                            <p>Air Fresheners Available for Sale</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fot_int">
                <div class="mini_contact">
                    <div class="boxi-redes">
                        <h4>¡VISIT US!</h4>
                    </div>
                    <div class="boxi">
                        <div class="info_contact_fot">
                            <img class="icon_fot" src="../front-end/img/iconos/whats.png" alt="">
                            <p>+01 706 850 93 52</p>
                        </div>
                        <div class="info_contact_fot">
                            <img class="icon_fot" src="../front-end/img/iconos/ubi.png" alt="">
                            <p>4350 Lexington road Athens, GA 30605.</p>
                        </div>
                        <div class="info_contact_fot">
                            <img class="icon_fot" src="../front-end/img/iconos/date-time.png" alt="">
                            <p>Monday - Saturday: 9:00a.m. to 7:00p.m., Sunday: 10:00a.m. to 6:00p.m.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fot_int">
                <div class="mini_redes">
                    <div class="boxi-redes">
                        <h4>¡FOLLOW US!</h4>
                    </div>
                    <div class="boxi">
                        <div class="info_contact_fot">
                            <img class="icon_fot" src="../front-end/img/iconos/facebook.png" alt="">
                            <a href="https://www.facebook.com/athenswash" target="_blank">Facebook</a>
                        </div>
                        <div class="info_contact_fot">
                            <img class="icon_fot" src="../front-end/img/iconos/ig.png" alt="">
                            <a href="https://www.instagram.com/athensautowash?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank">Instagram</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init()
    </script>
</body>
</html>
<?php
if (isset($_POST["enviar"])) {
    $name = $_POST["name"];
    $email = $_POST["email"]; 
    $subject = $_POST["subject"];
    $messaje = $_POST["messaje"];

    $destinatario = "athensautowash@gmail.com";

    $content = "Messaje from the Athens Car Wash website of: $name \n";
    $content .= "Email: $email \n";
    $subject = "about: $subject \n";
    $content .= "Mensaje: $messaje";

    $header = "From: $email"; 

    $mail = mail($destinatario, $subject, $content, $header);

    if ($mail) {
        echo "<script>alert('El correo se envio correctamente :)')</script>";
    } else {
        echo "<script>alert('El correo no se pudo enviar, intente nuevamente :(')</script>";
    }
}
?>