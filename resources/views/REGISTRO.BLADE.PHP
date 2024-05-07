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
    padding: 0;
    background-color: #fafafa;
    display: flex;
    justify-content: center; /* Centrar horizontalmente */
    align-items: center;
    height: 100vh;
  }
  
  .container {
    max-width: 300px;
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }
  
  .container h2 {
  font-family: 'Billabong', sans-serif; /* Aplica la fuente Billabong */
  font-size: 30px;
  font-style: normal; /* No cursiva */
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

<script>
  document.getElementById("facebookLogin").addEventListener("click", function() {
    // Aquí puedes agregar la lógica para el inicio de sesión con Facebook
    alert("Iniciando sesión con Facebook...");
  });
</script>

</body>
</html>
