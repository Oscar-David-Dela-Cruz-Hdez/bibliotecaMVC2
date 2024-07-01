<link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/principale.css">
        <div class="d-flex flex-column min-vh-100">
        
            <!-- header mamalon -->
            <header class="header py-3">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h1 class="text-center">Biblioteca Virtual</h1>
                        </div>
                    </div>
                </div>
            </header>

            <!-- nav bar mamalon tambien xD-->
            <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">
        <img src="logo.png" alt="Logo" style="width: 40px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo APP_URL; ?>iniziaSessione/">Inicio Sesión</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo APP_URL; ?>documentazione/">Registro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo APP_URL; ?>libri/">Libros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo APP_URL; ?>regolamento/">Reglamento</a>
            </li>
            <li>
                <a href="./img/st,small,507x507-pad,600x600,f8f8f8.jpg">.</a>
            </li>
        </ul>
    </div>
</nav>

                <!-- Bloque de cita (ya se que no esta acomodado, pero me da flojera, que alguien lo acomode)-->
                <div id="contenedor-cita" class="text-center mt-5 p-4 border rounded bg-light">
                    <p id="cita" class="tipografia">Cargando cita...</p>
                    <p id="autor"></p>
                </div>

            <!-- aqui empieza el contenido -->
            <main class="container mt-5 flex-fill">
                <div class="row">
                    <div class="col-md-4">
                        <div class="book-card">
                            <img src="book1.jpg" alt="Libro 1">
                            <h4 class="mt-3 main-text">Libro 1</h4>
                            <p class="secondary-text">Descripción breve del libro 1.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="book-card">
                            <img src="book2.jpg" alt="Libro 2">
                            <h4 class="mt-3 main-text">Libro 2</h4>
                            <p class="secondary-text">Descripción breve del libro 2.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="book-card">
                            <img src="book3.jpg" alt="Libro 3">
                            <h4 class="mt-3 main-text">Libro 3</h4>
                            <p class="secondary-text">Descripción breve del libro 3.</p>
                        </div>
                    </div>
                </div>



            </main>

            <!-- footer mamalon-->
            <footer class="footer mt-auto py-3">
                <div class="container">
                    <p class="text-center">&copy; 2024 Biblioteca Virtual. Todos los derechos reservados.</p>
                </div>
            </footer>
        </div>

        <script src="./app/views/js/cita.js"></script>