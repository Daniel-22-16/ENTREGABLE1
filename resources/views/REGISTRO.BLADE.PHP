<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Registro e Inicio de Sesión de Usuario</title>
    <style>
        /* Estilo CSS para el formulario */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form-group button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 50px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 30%;
        }

        .form-group button:hover {
            background-color: #555;
        }

        .form-group .error-message {
            color: red;
            margin-top: 5px;
        }

        .form-group.success input {
            border-color: #2ecc71;
        }

        .form-group.error input {
            border-color: #e74c3c;
        }

        .social-login {
            text-align: center;
            margin-top: 20px;
        }

        .social-login button {
            background-color: #3b5998;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
        }

        .social-login button:last-child {
            margin-right: 0;
        }

        .toggle-form {
            text-align: center;
            margin-top: 20px;
        }

        .toggle-form button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .toggle-form button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Registro e Inicio de Sesión de Usuario</h2>
    <form id="auth-form">
        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group" id="confirm-password-group" style="display: none;">
            <label for="confirm-password">Confirmar Contraseña:</label>
            <input type="password" id="confirm-password" name="confirm-password">
            <p class="error-message" id="password-error"></p>
        </div>
        <div class="form-group">
            <button type="submit" id="submit-button">Crear Cuenta</button>
        </div>
    </form>

    <div class="toggle-form">
        <button id="toggle-button">¿Ya tienes una cuenta? Inicia Sesión</button>
    </div>

    <div class="social-login">
        <button onclick="loginWithGoogle()" style="background-color: #fff;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/800px-Google_%22G%22_logo.svg.png" alt="Google Logo" style="width: 50px; height: 50px;">
        </button>
        <button onclick="loginWithFacebook()" style="background-color: #fff;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/1200px-Facebook_f_logo_%282019%29.svg.png" alt="Facebook Logo" style="width: 50px; height: 50px;">
        </button>
        <button onclick="loginWithTwitter()" style="background-color: #fff;">
            <img src="https://img.freepik.com/vector-premium/viejo-icono-logotipo-twitter_606147-21.jpg" alt="Twitter Logo" style="width: 50px; height: 50px;">
        </button>
        <button onclick="loginWithApple()" style="background-color: #fff;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Apple_logo_black.svg/1200px-Apple_logo_black.svg.png" alt="Apple Logo" style="width: 50px; height: 50px;">
        </button>
        <!-- Asegúrate de cambiar "google-logo.png", "facebook-logo.png", "twitter-logo.png" y "apple-logo.png" con las rutas correctas a las imágenes de los logotipos -->
    </div>

</div>

<script src="https://www.gstatic.com/firebasejs/9.1.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.1.1/firebase-auth.js"></script>
<script>
    // Configuración de Firebase
    var firebaseConfig = {
        apiKey: "TU_API_KEY",
        authDomain: "TU_DOMINIO.firebaseapp.com",
        projectId: "TU_PROJECT_ID",
        storageBucket: "TU_STORAGE_BUCKET",
        messagingSenderId: "TU_SENDER_ID",
        appId: "TU_APP_ID"
    };

    // Inicialización de Firebase
    firebase.initializeApp(firebaseConfig);

    // Variables para los elementos del formulario
    const form = document.getElementById('auth-form');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const confirmPasswordGroup = document.getElementById('confirm-password-group');
    const confirmPasswordInput = document.getElementById('confirm-password');
    const passwordError = document.getElementById('password-error');
    const submitButton = document.getElementById('submit-button');
    const toggleButton = document.getElementById('toggle-button');

    // Evento para alternar entre registro e inicio de sesión
    toggleButton.addEventListener('click', function() {
        const buttonText = toggleButton.textContent;
        if (buttonText === '¿Ya tienes una cuenta? Inicia Sesión') {
            confirmPasswordGroup.style.display = 'none';
            submitButton.textContent = 'Iniciar Sesión';
            toggleButton.textContent = '¿No tienes una cuenta? Regístrate';
        } else {
            confirmPasswordGroup.style.display = 'block';
            submitButton.textContent = 'Crear Cuenta';
            toggleButton.textContent = '¿Ya tienes una cuenta? Inicia Sesión';
        }
    });

    // Función para registrar o iniciar sesión con correo electrónico y contraseña
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        const email = emailInput.value;
        const password = passwordInput.value;
        const buttonText = submitButton.textContent;

        if (buttonText === 'Crear Cuenta') {
            const confirmPassword = confirmPasswordInput.value;
            if (password !== confirmPassword) {
                passwordError.textContent = 'Las contraseñas no coinciden';
                return;
            }
            // Registrar usuario
            firebase.auth().createUserWithEmailAndPassword(email, password)
                .then((userCredential) => {
                    // Registro exitoso
                    const user = userCredential.user;
                    console.log('Usuario registrado:', user);
                    // Aquí puedes redirigir al usuario o realizar otras acciones
                })
                .catch((error) => {
                    // Error en el registro
                    console.error('Error al registrar:', error);
                });
        } else {
            // Iniciar sesión
            firebase.auth().signInWithEmailAndPassword(email, password)
                .then((userCredential) => {
                    // Inicio de sesión exitoso
                    const user = userCredential.user;
                    console.log('Usuario inició sesión:', user);
                    // Aquí puedes redirigir al usuario o realizar otras acciones
                })
                .catch((error) => {
                    // Error en el inicio de sesión
                    console.error('Error al iniciar sesión:', error);
                });
        }
    });

    // Función para registrar con cuenta de Google
    function loginWithGoogle() {
        var provider = new firebase.auth.GoogleAuthProvider();
        firebase.auth().signInWithPopup(provider).then(function(result) {
            // Registro exitoso
            var user = result.user;
            console.log("Usuario registrado con Google:", user);
            // Aquí puedes redirigir al usuario o realizar otras acciones
        }).catch(function(error) {
            // Error en el registro
            console.error("Error al registrar con Google:", error);
        });
    }
</script>

</body>
</html>
