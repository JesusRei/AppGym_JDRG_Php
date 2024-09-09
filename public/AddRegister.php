<?php
require_once '../vendor/autoload.php';

use APPGYM_JDRG_PHP\Controllers\GymController;
use APPGYM_JDRG_PHP\Models\UserGym;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $birthdate = $_POST['birthdate'];
    $gender = $_POST['gender'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $hoursTraining = $_POST['hoursTraining'];

    $gymController = new GymController('../registers.json');
    $userGym = new UserGym($name, $email, $birthdate, $gender, $weight, $height, $hoursTraining);
    $gymController->addRegister($userGym);
    header('Location: IndexRegister.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    .hero-section {
        background: url('https://img.freepik.com/vector-gratis/encabezado-twitter-gimnasio_23-2150958297.jpg?w=826&t=st=1725830669~exp=1725831269~hmac=a69134cf9140c60bb1191bedeb7d6b0061bbf08e94b1c5e8dbb54dccdf62f85a') no-repeat center center;
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
        margin-bottom: 50px;
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
    </nav>
    <!-- Form -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">Registro</h3>
                        <form method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="birthdate" class="form-label">Fecha de nacimiento</label>
                                <input type="date" class="form-control" id="birthdate" name="birthdate" required>
                            </div>
                            <div class="mb-3">
                                <label for="gender" class="form-label">Género</label>
                                <input type="text" class="form-control" id="gender" name="gender" required>
                            </div>
                            <div class="mb-3">
                                <label for="weight" class="form-label">Peso en Kg: </label>
                                <input type="number" step="0.01" class="form-control" id="weight" name="weight" required>
                            </div>
                            <div class="mb-3">
                                <label for="height" class="form-label">Altura en metros: </label>
                                <input type="number" step="0.01" class="form-control" id="height" name="height" required>
                            </div>
                            <div class="mb-3">
                                <label for="hoursTraining" class="form-label">Horas de entrenamiento: </label>
                                <input type="number" class="form-control" id="hoursTraining" name="hoursTraining" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
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