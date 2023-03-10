<main>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="webroot/img/foto1.webp" width="100%" height="500">
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>50% Descuento</h1>
                        <p>Aprovecha las ultimas ofertas de las rebajas de invierno.</p>
                        <p><a class="btn btn-lg btn-warning" href="#">Saber mas</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="webroot/img/foto2.jpg" width="100%" height="500">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Nike x Lil Nas X</h1>
                        <p>Descubre las "zapatillas de Satan" en esta ultima colaboracion.</p>
                        <p><a class="btn btn-lg btn-warning" href="#">Saber mas</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="webroot/img/foto3.webp" width="100%" height="500">
                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>Nike Air Max 95 olive.</h1>
                        <p>Las nuevas zapatillas perfectas para el otoño.</p>
                        <p><a class="btn btn-lg btn-warning" href="#">Saber mas</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <section class="album py-5">
        <section class="container">
            <section class='row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3'>
                <?php
                foreach ($arrayProductos as $producto) {
                    if ($producto->stock <= 0) {
                    } else {
                        ?>
                        <section class='col'>
                            <section class='card shadow-sm'>
                                <img src='webroot/img/<? echo $producto->foto ?>' width='100%' height='450'>
                                <section class='card-body bg-dark'>
                                    <h3 class='h3 text-light'><? echo $producto->nombre ?></h3>
                                    <p class='card-text text-light'><? echo $producto->descripcion ?></p>
                                    <section class='d-flex justify-content-between align-items-center'>
                                        <small class='text-white'><? echo $producto->precio ?>€</small>
                                        <section class='btn-group'>
                                            <form action="" method="post">
                                                <input type="hidden" name="cod_producto" value="<?echo $producto->cod_producto?>">
                                                <?
                                                    if(estaValidado()) {?>
                                                        <input type="submit" name="comprar" class='btn btn-sm btn-outline-warning' value="Comprar">
                                                    <?
                                                    } else {?>
                                                        <input type="submit" name="login" class='btn btn-sm btn-outline-warning' value="Comprar">
                                                    <?
                                                    }
                                                ?>
                                            </form>
                                        </section>
                                    </section>
                                </section>
                            </section>
                        </section>
                        <?
                    }
                }
                ?>
            </section>
        </section>
    </section>
</main>