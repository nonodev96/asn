<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= site_url("Home") ?>">ASN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= site_url("Home") ?>">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#"
                           data-bs-toggle="dropdown"
                           aria-expanded="false">Ejemplo 1</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= site_url("Example_1/secure") ?>">Ejemplo 1 seguro</a></li>
                            <li><a class="dropdown-item" href="<?= site_url("Example_1/insecure") ?>">Ejemplo 1 inseguro</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#"
                           data-bs-toggle="dropdown"
                           aria-expanded="false">Ejemplo 2</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= site_url("Example_2/secure") ?>">Ejemplo 2 seguro</a></li>
                            <li><a class="dropdown-item" href="<?= site_url("Example_2/insecure") ?>">Ejemplo 2 inseguro</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#"
                           data-bs-toggle="dropdown"
                           aria-expanded="false">Ejemplo 3</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= site_url("Example_3/secure") ?>">Ejemplo 3 seguro</a></li>
                            <li><a class="dropdown-item" href="<?= site_url("Example_3/insecure") ?>">Ejemplo 3 inseguro</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>