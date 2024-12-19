<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - PROSARIUM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../../Styles/estilos.css">
</head>

<body>
    <nav>
        <div class="nav-left">
            <a href="#" class="logo">PROSARIUM</a>
            <div class="nav-links">
                <!--En está sección se incertaran los links-->
            </div>
        </div>
        <div class="nav-right">
            <button class="btn-register button">
                Registrarse
            </button>
            <a href="iniciarSesion.php">
                <button class="btn-login button">
                    Iniciar sesión
                </button>
            </a>
        </div>
    </nav>

    <div class="main-content">
        <h1>Crea tu cuenta</h1>
        <p class="subtitle">Únete a la comunidad</p>

        <form class="register-form" id="registerForm" action="../../Scripts/MySQL/usuarios.php" method="POST">
            <div class="form-group">
                <label for="username">Nombre de usuario</label>
                <input type="text" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirmar contraseña</label>
                <input type="password" id="confirm-password" name="confirm-password">
            </div>
            <input type="hidden" name="registrar" value="registrar">
            <input type="submit" value="Crear cuenta" class="submit-btn button" >

        </form>

    </div>

    <script type="module">
        import {
            generarOpcionesMenuUsuario
        } from '../../Scripts/herramientas.js';
        document.addEventListener('DOMContentLoaded', () => {
            generarOpcionesMenuUsuario('');
        });


    </script>


</body>

</html>