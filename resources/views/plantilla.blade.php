<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido - MelomaniaSV</title>

    <!-- Estilos de css y bootstrap -->
    
    <link rel="stylesheet" href="{{route('css')}}"> 
    <link rel="stylesheet" href="http://localhost/MelomaniaSV/CSS/contenidoindex.css"> 
    <link rel="stylesheet" href="http://localhost/MelomaniaSV/CSS/registro.css"> 
    
    <link rel="icon" href="http://localhost/MelomaniaSV/Img/icono.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo"><a href="http://localhost//MelomaniaSV/HTML/"><img src="{{ route('logo.image') }}" height="50px"></a></div>
            <div class="sesion">
                <div class="ini-sesion"><a href="http://localhost//MelomaniaSV/HTML/iniciarsesion.php">INICIAR SESIÓN</a></div>
                <div class="registro">REGÍSTRATE</div>
                <div class="carrito">$0.00</div>
            </div>
            
        </div>
        <div class="nav">
            <div class="urlIni firstNav"><a href="http://localhost//MelomaniaSV/HTML/index.php">Inicio</a></div>
            <!-- Hipervinculo para acceder a la tienda y cursos-->
            <a class="urlMenu" href="http://localhost/MelomaniaSV/HTML/tienda.php">Tienda</a>
            <a class="urlMenu" href="http://localhost/MelomaniaSV/HTML/cursos.php">Cursos</a>
            <a class="urlMenu" href="http://localhost/MelomaniaSV/HTML/cursos.php">Nosotros</a>
        </div>



        <!-- AQUÍ VA EL CONTENIDO DE CADA PÁGINA-->
        <div class="content">
            @yield('content')
        </div>

        <div class="footer">
        <div class="logoFooter"><a href="http://localhost//MelomaniaSV/HTML/"><img src="http://localhost/MelomaniaSV/Img/Logo.png" height="50px"></a></div>
        <div class="socialNetworks">
            <a href="http://www.facebook.com"><img src="http://localhost/MelomaniaSV/Img/rss/facebook.png"></a>
            <a href="http://www.twitter.com"><img src="http://localhost/MelomaniaSV/Img/rss/twitter.png"></a>
            <a href="http://www.instagram.com"><img src="http://localhost/MelomaniaSV/Img/rss/instagram.png"></a>
        </div>
            <p>© 2023 Melomanía.</p>
            <p class="lastFooter">Tecnologías Web - Universidad Católica de El Salvador</p>
        </div>
    </div>
    
    <script src="http://localhost//MelomaniaSV/js/registro.js"></script>
</body>
</html>









