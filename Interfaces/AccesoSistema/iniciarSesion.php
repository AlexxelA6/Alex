<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio sesión - PROSARIUM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../../Styles/estilos.css">
</head>

<body>
    <nav>
        <div class="nav-left">
            <a href="../Funcionalidad/menu.php" class="logo">PROSARIUM</a>
            <div class="nav-links">
                <!--En está sección se incertaran los links-->
            </div>
        </div>
        <div class="nav-right">
            <a href="registrarCuenta.php">
                <button class="btn-register button">
                    Registrarse
                </button>
            </a>
            <button class="btn-login button">
                Iniciar sesión
            </button>
        </div>
    </nav>

    <div class="main-content">
        <h1>Inicia tu sesión</h1>
        <p class="subtitle">Únete a la comunidad</p>

        <form class="register-form">
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" id="email">
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password">
            </div>
            <button type="submit" class="submit-btn button">Iniciar sesión</button>
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