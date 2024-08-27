<main>
    <div class="comentarios">
        <div class="container-fluid">
            <!-- Carousel for mobile -->
            <div id="comentariosCarousel" class="carousel carousel-dark d-md-none" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php for($i = 1; $i <=3 ; $i++){ ?>
                    <div class="carousel-item <?php echo $i==1 ? "active" : ""  ?>">
                        <div class="comentario">
                            <div class="comentario__imagen">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile-img.png" alt="...">
                            </div>
                            <div class="comentario__contenido">
                                <h4 class="comentario__nombre">Dani Serrano <?php echo $i ?></h4>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <a class="carousel-control-prev" href="#comentariosCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#comentariosCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
            </div>

            <!-- Grid for larger screens -->
            <div class="row d-none d-md-flex">
                <?php for($i = 1; $i <=3 ; $i++){ ?>
                <div class="col-md-3" style="@media (min-width: 768px) {margin-<?php echo $i == 1 ? "left" : ($i == 3 ? "right" : "")?>:8rem}">
                    <div class="comentario d-flex justify-content-center align-items-center">
                        <div class="comentario__imagen">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile-img.png" alt="...">
                        </div>
                        <div class="comentario__contenido">
                            <h4 class="comentario__nombre">Dani Serrano <?php echo  $i ?></h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</main>
