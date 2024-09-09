<?php
require_once '../vendor/autoload.php';

use APPGYM_JDRG_PHP\Controllers\GymController;

$gymController = new GymController('../registers.json');
$registers = $gymController->readJsonFile();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarjetas de Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    .hero-section {
        background: url('https://t4.ftcdn.net/jpg/03/20/49/25/360_F_320492530_2aeFG0eKU03OM20OD4eLzRte0K6xpw9i.jpg') no-repeat center center;
        background-size: cover;
        height: 400px;
        /* Altura del banner */
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .feature-icon i {
        color: #007bff;
    }

    .card {
        border: 1px solid #ddd;
        border-radius: 0.5rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card-body {
        text-align: left;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
    }

    .footer {
        background-color: #333;
        color: white;
        padding: 20px 0;
    }

    .footer a {
        color: white;
    }

    .footer a:hover {
        text-decoration: underline;
    }
</style>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="Index.php">GYM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="AddRegister.php">Añadir socios</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section">
        <div class="container text-center">
            <h1 class="text-white">Socios Activos</h1>
        </div>
    </header>

    <div class="container mt-5">
        <div class="row">
            <?php
            // Generar tarjetas para cada contacto
            foreach ($registers as $index => $UserGym) {
                echo "
                <div class='col-md-4 mb-1'>
                    <div class='card'>
                        <div class='card-body'>
                            <h5 class='card-title'>Nombre: " . ($UserGym['name'] ?? '') . "</h5>
                            <p class='card-text'>Email: " . ($UserGym['email'] ?? '') . "</p>
                            <p class='card-text'>Fecha de Nacimiento: " . ($UserGym['birthdate'] ?? '') . "</p>
                            <p class='card-text'>Género: " . ($UserGym['gender'] ?? '') . "</p>
                            <p class='card-text'>Peso: " . ($UserGym['weight'] ?? '') . "</p>
                            <p class='card-text'>Altura: " . ($UserGym['height'] ?? '') . "</p>
                            <p class='card-text'>Horas de Entrenamiento: " . ($UserGym['hoursTraining'] ?? '') . "</p>
                            <p class='card-text'>IMC: " . ($UserGym['imc'] ?? '') . "</p>
                            <p class='card-text'>Edad: " . ($UserGym['age'] ?? '') . "</p>
                            <p class='card-text'>Cuota Semanal: " . ($UserGym['weeklyFee'] ?? '') . "</p>
                        </div>
                    </div>
                </div>";
            }
            ?>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <p>&copy; 2024 Gimnasio Vital Power Zone. Todos los derechos reservados.</p>
            <p><a href="#">Política de Privacidad</a> | <a href="#">Términos de Servicio</a></p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>