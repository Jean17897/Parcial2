<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="/image/figura<?php echo $rest["id_producto"]?>.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h1 class="card-text"><?php echo $rest["descripcion"];?></h1>
                        <br>
                        <p class="card-text"><?php echo $rest["costo_compra"];?></p>
                        <br>
                        <p class="card-text"><?php echo $rest["precio_venta"];?></p>
                        <br>
                        <p class="card-text"><?php echo $rest["cantidad_en_existencia"];?></p>
                        <hr>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i>Ver</button>
                            <button type="button" class="btn btn-dark"><i class="bi bi-cart-plus"></i>Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            
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