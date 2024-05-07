<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Tienda de eCommerce</title>
    <style>
        
         /* Aquí va todo el CSS del primer código */
         .container {
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        .formulario {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .productos {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            animation: moverProductos 10s linear infinite;
        }

        .producto {
            width: 100px;
            height: 100px;
            margin: 10px;
            overflow: hidden;
        }

        .producto img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .producto:hover img {
            transform: scale(1.2);
        }

        .detener-animacion {
            animation-play-state: paused !important;
        }

        .flecha {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 24px;
            cursor: pointer;
        }

        .flecha-izquierda {
            left: 10px;
        }

        .flecha-derecha {
            right: 10px;
        }

        @keyframes moverProductos {
            from {
                transform: translateX(100%);
            }
            to {
                transform: translateX(-100%);
            }
        }
        
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-image: url('https://wallpaper.forfun.com/fetch/ee/ee356e62c87dcd8544a0ec5bbd86b15a.jpeg'); /* Reemplaza 'url_de_la_imagen.jpg' con la URL de tu imagen de fondo */
            background-size: cover; /* Ajusta la imagen de fondo para que cubra todo el elemento body */
            background-repeat: no-repeat; /* Evita que la imagen de fondo se repita */
            background-attachment: fixed; /* Fija la imagen de fondo para que permanezca en su lugar mientras se desplaza la página */
            background-position: center; /* Centra la imagen de fondo */
            background-color: #fff; /* Color de fondo de respaldo */
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative; /* Agrega posición relativa al encabezado */
        }

        /* Estilo para el contenedor del logo */
        .logo {
            margin-right: auto; /* Empuja el logo hacia la izquierda */
        }

        /* Estilo para la barra de búsqueda */
        .search-container {
            display: flex;
            align-items: center;
        }

        .search--keyword--15P08Ji {
            margin-right: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 200px;
        }

        .search--submit--2VTbd-T {
            background-color: transparent;
            border: none;
            color: #fff;
            cursor: pointer;
        }

        .search-container:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        /* Estilo para la barra de navegación */
        .navbar {
            display: flex;
            justify-content: center; /* Centra los elementos horizontalmente */
            align-items: center;
            padding: 60px; /* Ajusta el espacio alrededor de los elementos */
            position: absolute; /* Agrega posición absoluta */
            top: 50%; /* Coloca la barra de navegación en el centro vertical */
            transform: translateY(-50%); /* Ajusta la posición vertical */
            right: 300px; /* Ajusta la posición horizontal */
        }

        .navbar ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        .navbar li {
            margin-right: 10px;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
        }

        .navbar a:hover {
            text-decoration: underline;
        }

        section {
            padding: 20px;
            text-align: center;
        }

        .title-container {
            margin-bottom: 20px;
        }

        .title {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .articles {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .post {
            background-color: whitesmoke;
            border-radius: 10px;
            /* padding: 20px; */
            margin: 10px;
            max-width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.8);
            overflow: hidden;
            width: 14%;
            height: 350px;
        }

        .post:hover {
            transform: translateY(-5px);
        }

        .post img {
            width: 100%;
            height: 120px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            height: 120px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        /* Estilo para h1 */
        h1 {
            font-family: 'Arial Black', sans-serif;
            font-weight: bold;
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        /* Estilo para h2 */
        h2 {
            font-size: 20px;
            color: #333;
            margin-bottom: 15px;
        }

        /* Estilo para p */
        p {
            font-size: 16px;
            color: #666;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        /* Estilo para el carrusel de imágenes */
        .slideshow-container {
    position: relative;
    width:  200px; /* Ancho fijo del contenedor del carrusel */
    height: 300px; /* Altura fija del contenedor del carrusel */
    margin: auto;
    overflow: hidden; /* Para ocultar las partes de las imágenes que se desplazarán fuera del contenedor */
  }

  .slides {
    display: flex; /* Mostrar las imágenes en una fila */
    width: 100%; /* Ajustar el ancho del contenedor de las imágenes */
    height: 100%; /* Ajustar la altura del contenedor de las imágenes */
    transition: transform 0.5s ease; /* Agregar transición de desplazamiento */
  }

  .slides img {
    width: 100%; /* Ajustar el tamaño de la imagen al contenedor */
    height: 100%; /* Ajustar el tamaño de la imagen al contenedor */
    flex-shrink: 0; /* Evitar que las imágenes se ajusten automáticamente */
    object-fit: cover; /* Escalar la imagen para que se ajuste al contenedor, manteniendo su relación de aspecto y recortando si es necesario */
    border-radius: 10px; /* Borde redondeado */
  }

  .prev, .next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    padding: 16px;
    color: white;
    font-weight: bold;
    font-size: 20px;
    z-index: 1;
    background-color: rgba(0, 0, 0, 0.5); /* Fondo semi-transparente */
    text-decoration: none;
    border-radius: 50%;
  }

  .prev:hover, .next:hover {
    background-color: rgba(0, 0, 0, 0.6); /* Oscurecer un poco al pasar el mouse */
  }

  .prev {
    left: 0;
  }

  .next {
    right: 0;
  }

        /* Estilo para el texto que aparece en la parte inferior derecha */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Estilo para el título del carrusel */
        .slide-title {
            color: #fff;
            font-size: 24px;
            font-weight: bold;
            position: absolute;
            top: 20px;
            left: 20px;
        }

        /* Estilo para el subtítulo del carrusel */
        .slide-caption {
            color: #fff;
            font-size: 16px;
            position: absolute;
            bottom: 20px;
            left: 20px;
        }
    </style>
</head>
<body>
<header>
    <div class="header-content">
        <div class="logo">
            <h1>DaniExpress</h1>
        </div>
        <nav class="navbar">
    <div class="search-container">
        <input class="search--keyword--15P08Ji" type="text" placeholder="Buscar productos..." autocomplete="off" maxlength="50" id="search-words" value="">
        <button class="search--submit--2VTbd-T" type="button">
            <i class="fas fa-search"></i> <!-- Icono de búsqueda -->
        </button>
    </div>
    <ul>
        <li><a href="http://localhost/ENTREGABLE1/public/Registro">Registrarse</a></li>
        <li><a href="http://localhost/ENTREGABLE1/public/Producto">Ver Productos</a></li>
        <li><a href="#">Cambiar Idioma</a></li>
        <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
    </ul>
</nav>
</header>
<div class="container">
  <button class="flecha flecha-izquierda" onclick="moverIzquierda()">&#10094;</button>
  <button class="flecha flecha-derecha" onclick="moverDerecha()">&#10095;</button>
  <form class="formulario" onmouseover="detenerAnimacion()" onmouseout="reanudarAnimacion()">
    <div class="productos">
      <div class="producto"><img src="https://img.freepik.com/foto-gratis/ilustracion-personaje-anime-lluvia_23-2151394669.jpg?size=626&ext=jpg&ga=GA1.1.672697106.1714348800&semt=ais" alt="Producto 1"></div>
      <div class="producto"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQx0WwD1cHmv5dA1ni_LOZlKxSp8XUFQGJvp5sf6zG3Y5K1Lj8rnqf8SP0fe9JfdTqd7Xg&usqp=CAU" alt="Producto 2"></div>
      <div class="producto"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwnLAD1phNja6LZ31NA8PwkEeI17psje7geu6xTk9dVGyu94-s3j4nXsSAmhe3zdUiiLM&usqp=CAU" alt="Producto 3"></div>
      <div class="producto"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqXTS-pPNtonga-dmHmAxAsQiGu3LTYFQX680uYxLmSSnr3MhuEXM3pStReaBQnrk5too&usqp=CAU" alt="Producto 4"></div>
    </div>
    <div class="productos">
      <div class="producto"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqXTS-pPNtonga-dmHmAxAsQiGu3LTYFQX680uYxLmSSnr3MhuEXM3pStReaBQnrk5too&usqp=CAU" alt="Producto 5"></div>
      <div class="producto"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqXTS-pPNtonga-dmHmAxAsQiGu3LTYFQX680uYxLmSSnr3MhuEXM3pStReaBQnrk5too&usqp=CAU" alt="Producto 6"></div>
      <div class="producto"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqXTS-pPNtonga-dmHmAxAsQiGu3LTYFQX680uYxLmSSnr3MhuEXM3pStReaBQnrk5too&usqp=CAU" alt="Producto 7"></div>
      <div class="producto"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqXTS-pPNtonga-dmHmAxAsQiGu3LTYFQX680uYxLmSSnr3MhuEXM3pStReaBQnrk5too&usqp=CAU" alt="Producto 8"></div>
    </div>
  </form>
</div>

        
<!-- Carrusel de imágenes -->


    <!-- Botones de navegación -->
    <div class="slideshow-container">
  <div class="slides">
    <img src="https://i.pinimg.com/736x/fe/fa/de/fefade746a896accf6beb5dffd52901b.jpg" alt="Imagen 1">
    <img src="https://i.pinimg.com/originals/fa/23/fe/fa23fe503e969bd91423bf368a5fc958.jpg" alt="Imagen 2">
    <img src="https://i.pinimg.com/736x/00/f3/8b/00f38b00c8e074a5103f8135807d4cbf.jpg" alt="Imagen 3">
    <img src="https://img.freepik.com/foto-gratis/ilustracion-personaje-anime-lluvia_23-2151394669.jpg?size=626&ext=jpg&ga=GA1.1.672697106.1714348800&semt=ais" alt="Imagen 2">
    <img src="https://images8.alphacoders.com/133/1331368.png" alt="Imagen 2">
    <img src="https://blogger.googleusercontent.com/img/a/AVvXsEhoRQHzPoS5coajfpSgwt8GSCGIeArKNSMOX5I5XzVLGiHqQ4aMzWYWorGZAjM2EiSa_TmXHmBYod1mU55tImCJZwkIj16g6ZANaOXa7euoGcFSDbywxif1cdMWjfGg4TlONz6GYR-J2ZUbq8WD6mzwX-eCIuVT2NNcGK_PjDtA0zCtzdmQAvqLmOqMgci-=s1600-rw" alt="Imagen 2">
  </div>
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- Puntos indicadores del carrusel -->
<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>
    
</header>

    
    
    <section>
        <div class="title-container">
            <h2 class="title">Últimos Productos</h2>
        </div>
        
        <div class="articles">
            
            <div class="post">
                <img src="https://compusystemperu.com/wp-content/uploads/2021/10/X515E-I5-1.jpg" alt="Producto 1" width="100" height="100">
                <h3>Laptop Asus</h3>
                <p>Descripción del Producto 1</p>
                <p>Precio: $999.9</p>
                <button>Agregar al Carrito</button>
            </div>
            
            <div class="post">
                <img src="https://img.fruugo.com/product/6/74/640042746_max.jpg" alt="Producto 2" width="100" height="100">
                <h3>Gorro de Marcada</h3>
                <p>Descripción del Producto 2</p>
                <p>Precio: $5.99</p>
                <button>Agregar al Carrito</button>
            </div>
            
            <div class="post">
                <img src="https://m.media-amazon.com/images/I/71NkhJAFXvL._AC_UF894,1000_QL80_DpWeblab_.jpg" alt="Producto 3" width="100" height="100">
                <h3>Auriculares Inalambricos</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $3.99</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://coolboxpe.vtexassets.com/arquivos/ids/321270/image-c55b00eac437469e8d0fb5d310d06491.jpg?v=638334401367100000" alt="Producto 3" width="100" height="100">
                <h3>Cargadores Inalambricos</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://http2.mlstatic.com/D_NQ_NP_964670-MLM53979731030_022023-O.webp" alt="Producto 3" width="100" height="100">
                <h3>Crimpadora de Cables</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://mmstoreperu.com/cdn/shop/products/Mouse_G502X_plus_blanco_Logitech.jpg?v=1671745958" alt="Producto 3" width="100" height="100">
                <h3>Mouse Logitech</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://image.made-in-china.com/202f0j00QhVrYAeaJnkT/Elegant-Ladies-Hand-Bag-Bolsos-De-Mujer-Bolsas-Femininas-Luxury-PU-Leather-Shoulder-Tote-4-PCS-in-1-Set-Handbags-for-Women.webp" alt="Producto 3" width="100" height="100">
                <h3>Bolsos De Mano</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://i.ebayimg.com/thumbs/images/g/kJwAAOSw2ENkK8vd/s-l640.jpg" alt="Producto 3" width="100" height="100">
                <h3>Traje Informal </h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVC12w1tuDbZ5GE5t5WEmEOWgL452hkps5VuG5KNMcgE90XIwWrdvhiNwg-1i4tIfiTcE&usqp=CAU" alt="Producto 3" width="100" height="100">
                <h3></h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRwcIXuhElLOC7ysF98MyuegEglkzExtt0GVRLJ8213KihnTgnvkxcJg9HaRTl4631h3k&usqp=CAU" alt="Producto 3" width="100" height="100">
                <h3>Reloj </h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTiBvZOknq0zYupYDMr0v9Va-10FVrbG25WPxkZ66t0jcmRqjaY9pG1BbqcnUJ2pYhHg04&usqp=CAU" alt="Producto 3" width="100" height="100">
                <h3>Pulseras de Cuero</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://m.media-amazon.com/images/I/61X0wFZgyvL._AC_UL1000_.jpg" alt="Producto 3" width="100" height="100">
                <h3>Ropa de bebe</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://www.mideporte.pe/wp-content/uploads/2019/07/ORB-360-00.webp" alt="Producto 3" width="100" height="100">
                <h3>Guantes de arquero</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://m.media-amazon.com/images/I/615qw4w7MRL._AC_UF350,350_QL80_.jpg" alt="Producto 3" width="100" height="100">
                <h3>Camara Inteligente</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>
            <div class="post">
                <img src="https://http2.mlstatic.com/D_NQ_NP_838022-MLM47858143960_102021-O.webp" alt="Producto 3" width="100" height="100">
                <h3>Mangera Magica</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>
            <div class="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqAnAfW63rVuhkYtfKGkPqppvpT12qe9I8Yy4pb3LN6swjy-MvB3xGdPMXZ1rjqU5-aGI&usqp=CAU" alt="Producto 3" width="100" height="100">
                <h3>Billetera Inteligente</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/1e04c23f22a140c0c8ab2eb9caa41cd0.jpg?imageMogr2/auto-orient%7CimageView2/2/w/800/q/70/format/webp" alt="Producto 3" width="100" height="100">
                <h3>Pijama de mujer</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://lamparadeluna.top/wp-content/uploads/2023/09/Lampara-Luna-1.jpg" alt="Producto 3" width="100" height="100">
                <h3>Lampara de Luna</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://tecnohogarjs.com/cdn/shop/files/ASTRONAUTANEBULAPROYECTORDELUCES02.png?v=1694797452" alt="Producto 3" width="100" height="100">
                <h3>Luz Proyector</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/a4cec87e1b89389480053ef6824f4e1c.jpg?imageMogr2/auto-orient%7CimageView2/2/w/800/q/70/format/webp" alt="Producto 3" width="100" height="100">
                <h3>Pantalones Leggins</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://akibamarket.com/wp-content/uploads/2021/11/figura-naruto-modo-kurama1.jpg" alt="Producto 3" width="100" height="100">
                <h3>Figura de Animes</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://falabella.scene7.com/is/image/FalabellaPE/115490851_1?wid=800&hei=800&qlt=70" alt="Producto 3" width="100" height="100">
                <h3>Cortador de Cabello</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://rimage.ripley.com.pe/home.ripley/Attachment/MKP/119/PMP20000086471/full_image-1.jpeg" alt="Producto 3" width="100" height="100">
                <h3>Ventilador Inalambrico</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIGMoyzSHG9hzg02YltBTKGEI_Qvt6pw3mS2s8fCbL_SUydLUvtskU_ra8ThlOPV3fiMg&usqp=CAU" alt="Producto 3" width="100" height="100">
                <h3>Collar de Metal</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://ripleype.imgix.net/https%3A%2F%2Fmedia-prod-use-1.mirakl.net%2FSOURCE%2F6592ce21a8be45f09590182ffbc3add6?w=750&h=555&ch=Width&auto=format&cs=strip&bg=FFFFFF&q=60&trimcolor=FFFFFF&trim=color&fit=fillmax&ixlib=js-1.1.0&s=0ae870ed100f6f461baaea2d3c7f4120" alt="Producto 3" width="100" height="100">
                <h3>Altavoz Lenovo</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://img.redbull.com/images/c_crop,w_1280,h_640,x_0,y_162,f_auto,q_auto/c_scale,w_1200/redbullcom/2018/05/29/8cfc58c2-9da4-4cdd-8e31-a8db480c148f/campeonato-mundial-red-bull-cubo-rubik-malaga-1" alt="Producto 3" width="00" height="100">
                <h3>Cubo Rubick</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/903d5e81d53b8762a5d02f24b734a0df.jpg?imageMogr2/auto-orient%7CimageView2/2/w/800/q/70/format/webp" alt="Producto 3" width="100" height="100">
                <h3>Gafas Negras</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>
            <div class="post">
                <img src="https://falabella.scene7.com/is/image/FalabellaPE/gsc_120303760_2625174_1?wid=800&hei=800&qlt=70" alt="Producto 3" width="100" height="100">
                <h3>Consola de VIdeojuegos</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://alitools.io/es/showcase/image?url=https%3A%2F%2Fae01.alicdn.com%2Fkf%2FHb76ad0ec67ef4742beada362db7f5fd5E.jpg_480x480.jpg" alt="Producto 3" width="100" height="100">
                <h3>Chaqueta senderismo</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>
            <div class="post">
                <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/9bc016bc-cd7a-49cc-a399-47930b00c59f/dunk-low-retro-zapatillas-wwlDHh.png" alt="Producto 3" width="100" height="100">
                <h3>Zapatillas Adidas</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://http2.mlstatic.com/D_NQ_NP_681375-MCO51702226767_092022-O.webp" alt="Producto 3" width="100" height="100">
                <h3>Protector de Pantalla</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://falabella.scene7.com/is/image/FalabellaPE/gsc_126198560_4481499_1?wid=800&hei=800&qlt=70" alt="Producto 3" width="100" height="100">
                <h3>Chaleco Moldeador </h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            <div class="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRd4-mLZeFCjocQX7NEck2Tdc-NvI-3DaNhPA&usqp=CAU" alt="Producto 3" width="100" height="100">
                <h3>Tablet Samsung</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $XX.XX</p>
                <button>Agregar al Carrito</button>
            </div>

            
            
            <!-- Añade más productos según sea necesario -->
        </div>
    </section>

    <footer>
        <p>Derechos de autor &copy; 2024 - Tienda de eCommerce</p>
    </footer>

    <!-- Script para el carrusel de imágenes -->
    <script>
  let slideIndex = 0;
  let isPaused = false;

  showSlides();

  function showSlides() {
    if (!isPaused) {
      const slides = document.querySelector('.slides');
      const slideWidth = slides.firstElementChild.clientWidth;
      slideIndex++;
      slides.style.transition = 'transform 0.5s ease';
      slides.style.transform = `translateX(-${slideIndex * slideWidth}px)`;
      if (slideIndex >= slides.children.length) {
        slideIndex = 0;
        setTimeout(() => {
          slides.style.transition = 'none';
          slides.style.transform = `translateX(0)`;
        }, 0);
      }
    }
    setTimeout(showSlides, 5000);
  }

  function plusSlides(n) {
    isPaused = true;
    slideIndex += n;
    const slides = document.querySelector('.slides');
    const slideWidth = slides.firstElementChild.clientWidth;
    slides.style.transition = 'transform 0.5s ease';
    slides.style.transform = `translateX(-${slideIndex * slideWidth}px)`;
    if (slideIndex >= slides.children.length || slideIndex < 0) {
      slideIndex = 0;
      setTimeout(() => {
        slides.style.transition = 'none';
        slides.style.transform = `translateX(0)`;
      }, 0);
    }
    setTimeout(() => { isPaused = false; }, 1000);
  }
</script>

<script>
  function detenerAnimacion() {
    var productos = document.querySelectorAll('.productos');
    productos.forEach(function(producto) {
      producto.classList.add('detener-animacion');
    });
  }

  function reanudarAnimacion() {
    var productos = document.querySelectorAll('.productos');
    productos.forEach(function(producto) {
      producto.classList.remove('detener-animacion');
    });
  }

  function moverIzquierda() {
    var productos = document.querySelectorAll('.productos');
    productos.forEach(function(producto) {
      producto.style.animationDirection = 'reverse';
    });
    productos[0].classList.remove('detener-animacion');
  }

  function moverDerecha() {
    var productos = document.querySelectorAll('.productos');
    productos.forEach(function(producto) {
      producto.style.animationDirection = 'normal';
    });
    productos[0].classList.remove('detener-animacion');
  }
</script>

   
</body>
</html>
