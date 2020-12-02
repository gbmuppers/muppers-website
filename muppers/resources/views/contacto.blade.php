<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contacto | Muppers.com</title>
    <meta property="og:type" content="website">
    <meta property="og:title" content="Muppers">
    <meta name="description" content="Muppers. Software Development Company | Empresa de desarrollo de software. Contáctanos.">
    <meta property="og:image" content="assets/img/muppers/muppers-logo.jpg">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
</head>

<body>
    <main class="page contact-page">
        <section class="portfolio-block contact" style="background: #080808;color: rgb(255,255,255);">
            <div class="container">
                <h1 style="text-align: center;">Contáctanos</h1>
                <form method="POST" action="{{ route('contacto') }}">     
                @csrf                   
                    <div class="form-group"><label for="name">Nombre completo</label>
                    <input class="form-control item" type="text" name="nombre" required></div>
                    <!--{!! $errors->first('nombre', '<small>:message</small><br>')!!}-->
                    <div class="form-group"><label for="name">Empresa</label>
                    <input class="form-control item" type="text"  name="empresa"></div>
                    <!--{!! $errors->first('empresa', '<small>:message</small><br>')!!}-->
                    <div class="form-group"><label for="subject">Número telefónico</label>
                    <input type="tel" class="form-control item" name="telefono" required></div>
                    <!--{!! $errors->first('telefono', '<small>:message</small><br>')!!}-->
                    <div class="form-group"><label for="email">Correo electrónico</label>
                    <input class="form-control item" type="email"  name="correo" required></div>
                    <!--{!! $errors->first('correo', '<small>:message</small><br>')!!}-->
                    <div class="form-group"><label for="message">Cuéntenos cómo podemos ayudarle</label>
                    <textarea class="form-control item" name="mensaje" required></textarea></div>
                    <!--{!! $errors->first('mensaje', '<small>:message</small><br>')!!}-->
                    <div class="form-group"><button class="btn btn-primary btn-block btn-lg">ENVIAR</button></div><div>
    <div class="container">
        <p style="text-align:center;">También puedes contactarnos a través de</p>
        <div class="social-icons">
            <a href="https://instagram.com/muppers_corp?igshid=1v53c7avxs70" target="_blank"><i class="fa fa-instagram"></i></a>
            <a href="https://www.facebook.com/Muppers-104332594467041" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://wa.me/525611566832/?text=Hola,%20me%20interesan%20sus%20servicios%2E" target="_blank"><i class="fa fa-whatsapp"></i></a>
        </div>
    </div>
</div>
</form>
            </div>
        </section>
    </main><nav class="navbar navbar-dark navbar-expand-md fixed-top bg-dark navbar--apple">
    <div class="container">
        <a class="navbar-brand nav-link" href="/"><img class="muppers-logo" alt="Muppers.com" src="assets/img/muppers/muppers-logo.jpg"> Muppers</a> <button data-toggle="collapse" data-target="#menu" class="navbar-toggler"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"><i class="la la-navicon"></i></span></button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav flex-grow-1 justify-content-between">
                <li class="nav-item d-none d-xs-block d-md-block"></li>
                <li class="nav-item"><a class="nav-link" href="/contacto">Contáctanos</a></li>
                <li class="nav-item"><a class="nav-link" href="/sobre-nosotros">Sobre nosotros</a></li>
                <li class="nav-item"><a class="nav-link" href="/nuestros-clientes">Nuestros clientes</a></li>
            </ul>
        </div>
    </div>
</nav><div class="footer-basic" style="  background: #080808;
  color: rgb(255,255,255);
">
    <footer>
        <div class="social" style="  color: rgb(211,152,152);
"><a href="https://instagram.com/muppers_corp?igshid=1v53c7avxs70" target="_blank"><i class="fa fa-instagram" style="  color: #f2f5f8;
"></i></a><a href="https://wa.me/525611566832/?text=Hola,%20me%20interesan%20sus%20servicios%2E" target="_blank"><i class="fab fa-whatsapp" style="color: #f2f5f8;
"></i></a><a href="https://www.facebook.com/Muppers-104332594467041" target="_blank"><i class="fab fa-facebook-f" style="color: #f2f5f8;
"></i></a></div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="/">Inicio</a></li>
            <li class="list-inline-item"><a href="/sobre-nosotros">Sobre Nosotros</a></li>
            <li class="list-inline-item"><a href="/preguntas-frecuentes">FAQ</a></li>
        </ul>
        <p class="copyright">Muppers © 2020</p>
    </footer>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>