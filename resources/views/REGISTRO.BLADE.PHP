<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Brush+Script+MT&display=swap" rel="stylesheet">

<title>Inicio de Sesión - Instagram</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 50px 0; /* Agrega espacio arriba y abajo */
    background-color: #fafafa;
    display: flex;
    flex-direction: column; /* Organizar contenido verticalmente */
    align-items: center;
    min-height: 100vh;
  }
  
  .container {
    max-width: 300px;
    margin: auto;
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
  }
  
  .container h2 {
    font-family: 'Comic Sans MS', cursive; /* Aplica la fuente Comic Sans MS */
    font-size: 30px;
    font-style: italic; /* Estilo cursiva */
    text-align: center;
    margin-bottom: 30px;
    transform: skewX(-15deg); /* Inclina el texto */
  }
  
  input[type="text"],
  input[type="password"],
  button {
    width: calc(100% - 20px);
    padding: 10px;
    margin: 0 auto 10px; /* Centrar horizontalmente */
    border: 1px solid #ccc;
    border-radius: 10px;
    box-sizing: border-box;
    margin-left: 8px; /* Agrega un pequeño margen izquierdo */
  }

  button[type="submit"] {
    padding: 10px 20px; /* Ajusta el padding horizontal */
    margin: 0 auto; /* Centra horizontalmente */
    border: none;
    border-radius: 8px;
    background-color: #ADD8E6; /* Celeste */
    color: #fff;
    cursor: pointer;
    box-sizing: border-box;
    margin-left: 8px; /* Agrega un pequeño margen izquierdo */
  }
  
  .or {
    margin: 20px 0 ;
    font-weight: bold;
    color: #555;
    text-align: center;
  }
  
  .forgot-password {
    display: block;
    text-align: center; /* Alineación centrada */
    font-size: 14px;
    color: #003569;
    text-decoration: none;
    margin-bottom: 15px;
  }
  
  .signup-link {
    text-align: center; /* Alineación centrada */
    margin-top: 15px;
  }
  
  .signup-link span {
    color: #999;
  }
  
  .signup-link a {
    color: #003569;
    text-decoration: none;
    font-weight: bold;
  }
  
  .download-app {
    text-align: center;
    margin-top: 15px;
  }
  
  .download-app img {
    width: 100px;
    margin: 0 5px;
  }

  footer {
    margin-top: 10px;
    background-color: transparent;
    padding: 20px;
    text-align: center;
  }

  footer ul {
    list-style-type: none;
    padding: 0;
  }

  footer ul li {
    display: inline;
    margin-right: 10px;
  }

  footer ul li a {
    color: #666;
    text-decoration: none;
    font-size: 12px;
  }

  .language {
    display: block;
    margin-top: 10px;
  }

  .language a {
    color: #999;
    text-decoration: none;
    font-size: 12px;
  }

  .copyright {
    margin-top: 10px;
  }

  .copyright p {
    color: #999;
    font-size: 12px;
  }
</style>
</head>
<body>

<div class="container">
  <h2>DANIEXPRESS</h2>
  <form id="loginForm">
    <input type="text" placeholder="Teléfono, usuario o correo electrónico" id="username" required>
    <input type="password" placeholder="Contraseña" id="password" required>
    <button type="submit">Entrar</button>
  </form>
  <div class="or">o</div>
  <button id="facebookLogin">Iniciar sesión con Facebook</button>
  <a href="#" class="forgot-password">¿Has olvidado la contraseña?</a>
  <div class="signup-link">
    <span>¿No tienes una cuenta?</span>
    <a href="#">Regístrate</a>
  </div>
  <div class="download-app">
    <span>Descarga la aplicación.</span>
    <div>
      <a href="#">
        <img src="https://static.cdninstagram.com/rsrc.php/v3/yd/r/xOhODS7viZl.png" alt="Google Play">
      </a>
      <a href="#">
        <img src="https://static.cdninstagram.com/rsrc.php/v3/y9/r/LjIQEL8csb0.png" alt="Microsoft Store">
      </a>
    </div>
  </div>
</div>

<footer>
  <ul>
    <li><a href="#">Meta</a></li>
    <li><a href="#">Información</a></li>
    <li><a href="#">Blog</a></li>
    <li><a href="#">Empleo</a></li>
    <li><a href="#">Ayuda</a></li>
    <li><a href="#">API</a></li>
    <li><a href="#">Privacidad</a></li>
    <li><a href="#">Configuración de cookies</a></li>
    <li><a href="#">Condiciones</a></li>
    <li><a href="#">Ubicaciones</a></li>
    <li><a href="#">Instagram Lite</a></li>
    <li><a href="#">Threads</a></li>
    <li><a href="#">Subir contactos y personas no usuarias</a></li>
    <li><a href="#">Meta Verified</a></li>
  </ul>
  <div class="language">
    <a href="#">Español (España)</a>
  </div>
  <div class="copyright">
    <p>© 2024 Instagram from Meta</p>
  </div>
</footer>

<script>
  document.getElementById("facebookLogin").addEventListener("click", function() {
    // Aquí puedes agregar la lógica para el inicio de sesión con Facebook
    alert("Iniciando sesión con Facebook...");
  });
</script>


</body>
</html>
