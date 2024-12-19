<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROSARIUM</title>
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
            <a href="registrarCuenta.php">
                <button class="btn-register button">
                    Registrarse
                </button>
            </a>
            <a href="iniciarSesion.php">
                <button class="btn-login button">
                    Iniciar sesión
                </button>
            </a>
        </div>
    </nav>

    <div class="main-content">
        <h1>Bienvenido a PROSARIUM</h1>
        <p class="subtitle">La menor pagina de historias del mundo</p>

        <div class="stats-container">
            <div class="stat-card">
                <div class="icon-container">
                    <i class="stat-icon fa-solid fa-star"></i>
                </div>
                <div class="stat-info">
                    <h3>$532,345</h3>
                    <p class="stat-label">Volumen</p>
                </div>
            </div>

            <div class="stat-card">
                <div class="icon-container">
                    <i class="stat-icon fa-solid fa-star"></i>
                </div>
                <div class="stat-info">
                    <h3>$532,345</h3>
                    <p class="stat-label">Volumen</p>
                </div>
            </div>

            <div class="stat-card">
                <div class="icon-container">
                    <i class="stat-icon fa-solid fa-star"></i>
                </div>
                <div class="stat-info">
                    <h3>$532,345</h3>
                    <p class="stat-label">Volumen</p>
                </div>
            </div>

            <div class="stat-card">
                <div class="icon-container">
                    <i class="stat-icon fa-solid fa-star"></i>
                </div>
                <div class="stat-info">
                    <h3>$532,345</h3>
                    <p class="stat-label">Volumen</p>
                </div>
            </div>
        </div>
    </div>

    <script type="module">
        import {
            generarOpcionesMenuUsuario,
            eliminarHijos
        } from '../../Scripts/herramientas.js';

        document.addEventListener('DOMContentLoaded', () => {

            //Genera de forma dinamica las opciones del menu de navegación
            generarOpcionesMenuUsuario('Inicio');
        });

        //eliminarHijos('nav-right');
    </script>

</body>

</html>