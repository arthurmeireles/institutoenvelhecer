



<a class=" carousel-item card-noticia mt-3 mb-3 p-3 col-lg-7" href="<?php the_permalink(); ?>">
    <div class="item">
        <div class="row">
            <div style=" height: 100%" class="col-md-4 col-lg-4 d-flex align-items-center justify-content-center box-imagem">
                <?php echo the_post_thumbnail(); ?>
            </div>


                <div class="col description-mission">
                    <h4 class="titulo-card">
                        <?php echo the_title(); ?>
                    </h4>

                    <?php echo the_excerpt(); ?>
                    <div class="box-leia-mais offset-8 col-lg-4">
                        <label>
                            Leia Mais
                        </label>
                    </div>
                </div>


        </div>
    </div>

</a>

