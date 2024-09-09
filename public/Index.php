<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vital Power Zone</title>
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
                    <a class="nav-link" href="IndexRegister.php">Inscripción</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section">
        <div class="container text-center">
        </div>
    </header>

    <!-- Welcome Section -->
    <section id="welcome" class="py-5">
        <div class="container text-center">
            <h2 class="mb-4">Descubre lo Mejor del Fitness</h2>
            <p class="lead mb-4">En Vital Power Zone, nuestro compromiso es ofrecerte lo mejor en instalaciones, entrenadores profesionales y un ambiente motivador para alcanzar tus metas. Únete a nuestra comunidad y comienza tu viaje hacia un estilo de vida más saludable.</p>
        </div>
    </section>

    <!-- Plans and Memberships Section -->
    <section id="plans" class="py-5 bg-light">
        <div class="container text-center">
            <h2 class="mb-4">Nuestros Planes y Membresías</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <i class="bi bi-dumbbell mb-3" style="font-size: 4rem; color: #007bff;"></i>
                            <h5 class="card-title">Plan Básico</h5>
                            <p class="card-text">Acceso ilimitado a un gimnasio específico. <br />
                                Clases grupales presenciales.<br />
                                Acceso a la app del gimnasio con entrenamientos virtuales</p>
                            <a href="#" class="btn btn-primary">Más Información</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <i class="bi bi-person-circle mb-3" style="font-size: 4rem; color: #007bff;"></i>
                            <h5 class="card-title">Plan Avanzado</h5>
                            <p class="card-text">Todo lo incluido en el Plan Básico. <br />
                                Acceso a múltiples gimnasios de la cadena.<br />
                                Descuentos en productos como bebidas deportivas. <br />
                                Sesiones de entrenamiento personal ocasionales.</p>
                            <a href="#" class="btn btn-primary">Más Información</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <i class="bi bi-heart-pulse mb-3" style="font-size: 4rem; color: #007bff;"></i>
                            <h5 class="card-title">Plan Premium</h5>
                            <p class="card-text">Todo lo incluido en el Plan Avanzado. <br />
                                Invitar a un amigo a entrenar contigo sin costo adicional. <br />
                                Acceso a todos los gimnasios de la cadena a nivel nacional o incluso internacional. <br />
                                Descuentos adicionales en productos y servicios. <br />
                                Acceso a áreas exclusivas como sillones de masaje.</p>
                            <a href="#" class="btn btn-primary">Más Información</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact & Social Media Section -->
    <section id="contact-social" class="py-5">
        <div class="container text-center">
            <div class="mb-5">
                <h2 class="mb-4">Contacto y Soporte</h2>
                <p class="lead mb-4">Si tienes alguna pregunta o necesitas asistencia, no dudes en ponerte en contacto con nosotros.</p>
                <a href="mailto:info@gymapp.com" class="btn btn-primary btn-lg">Envíanos un Email</a>
            </div>
            <div class="bg-light py-4">
                <h2 class="mb-4">Síguenos en Redes Sociales</h2>
                <a href="#" class="btn btn-outline-primary mx-2">Facebook</a>
                <a href="#" class="btn btn-outline-primary mx-2">Twitter</a>
                <a href="#" class="btn btn-outline-primary mx-2">Instagram</a>
            </div>
        </div>
    </section>

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