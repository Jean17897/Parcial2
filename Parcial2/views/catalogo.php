<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/image/slide1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/image/slide2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/image/slide3.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
        <h1 align="center">Catalogo</h1>
        <div class="container-xxl">
        <div class="row">
            <?php 
            $mst = producto_controler::productos();
            
            foreach ($mst as $tablaproducto) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="/image/figura<?php echo $tablaproducto["id_producto"];?>.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h1 class="card-text"><?php echo $tablaproducto["descripcion"];?></h1>
                        <br>
                        <p class="card-text"><?php echo $tablaproducto["costo_compra"];?></p>
                        <br>
                        <p class="card-text"><?php echo $tablaproducto["precio_venta"];?></p>
                        <br>
                        <p class="card-text"><?php echo $tablaproducto["cantidad_en_existencia"];?></p>
                        <hr>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i>Ver</button>
                            <button type="button" class="btn btn-dark"><i class="bi bi-cart-plus"></i>Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        
    </div>
        <ul class="nav    ">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Todos los derechos reservados © 2022</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contactanos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Siguenos en las Redes Sociales</a>
            </li>
        </ul>
    </div>