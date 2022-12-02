<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Formulario</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                </li>
                <?php if(isset($_SESSION["user"])){?>
                <li class="nav-item"> 
                    <a class="nav-link" href="#">Catalogo</a>
                </li>
                <?php }else{ ?>
                <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Catalogo</a>
                </li>
                <?php } ?>
        
            <?php if(isset($_SESSION["user"])){?>
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo $_SESSION["user"]; ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?php echo "index.php?C=".seg::codificar("sesion")."&M=".seg::codificar("cerrar")?>">Cerrar Session</a></li>
                        <li><a class="dropdown-item" href="#">Editar Perfil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            </div>
        <form class="d-flex" action="<?php echo "index.php?C=".seg::codificar("producto")."&M=".seg::codificar("mostrar") ?>" method="post">
                <input class="form-control me-2" type="search" placeholder="Buscar Id" aria-label="Search" name="Id">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
        <?php }else{ ?>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">User</a>
        </li>
        <?php } ?>
        </ul>
        
    </div>
</nav>