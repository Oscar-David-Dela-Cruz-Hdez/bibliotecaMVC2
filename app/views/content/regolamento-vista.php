<link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/regolamento.css">

    <div class="d-flex flex-column min-vh-100">
    
        <!-- header -->
        <header class="header py-3">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="text-center">Biblioteca Virtual</h1>
                    </div>
                </div>
            </div>
        </header>

        <!-- nav -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.html">
                <img src="logo.png" alt="Logo" style="width: 40px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo APP_URL; ?>principale/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo APP_URL; ?>iniziaSessione/">Inicio Sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo APP_URL; ?>documentazione/">Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo APP_URL; ?>libri/">Libros</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- contenido -->
        <main class="container mt-5 flex-fill">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center main-text">Reglamento de la Biblioteca</h2>
                    <p class="mt-4 main-text">
                        <strong>Artículo 1:</strong> Descripción del primer artículo del reglamento. Aquí puedes detallar las reglas específicas que se aplican a los usuarios de la biblioteca.
                    </p>
                    <p class="main-text">
                        <strong>Artículo 2:</strong> Descripción del segundo artículo del reglamento. Proporciona información clara y concisa sobre las políticas de la biblioteca.
                    </p>
                    <p class="main-text">
                        <strong>Artículo 3:</strong> Descripción del tercer artículo del reglamento. Asegúrate de incluir todas las reglas importantes que los usuarios deben conocer.
                    </p>
                    <p class="main-text">
                        <strong>Artículo X:</strong> Descripción del artículo X del reglamento. Continúa agregando artículos hasta que todo el reglamento esté cubierto.
                    </p>
                </div>
            </div>
        </main>

        <!-- footer -->
        <footer class="footer mt-auto py-3">
            <div class="container">
                <p class="text-center">&copy; 2024 Biblioteca Virtual. Todos los derechos reservados.</p>
            </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
