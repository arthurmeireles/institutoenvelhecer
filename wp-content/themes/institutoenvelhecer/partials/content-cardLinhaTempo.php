<div class="col-lg-12">
        <div class="row justify-content-center">
            <div class="col-lg-2 col-md-4 d-flex align-items-center justify-content-center">
                <div class="linha"></div>


                <div class="bola-com-data d-flex tela-grande">
                    <h4>
                        <?php echo get_post_meta( get_the_ID() , 'data', true ); ?>
                    </h4>
                </div>
            </div>

            <div class=" marca col-lg-8 col-md-8 pb-5">
                <a href="<?php the_permalink(); ?>">

                    <div class="card">
                        <div class="img-fluid m-auto box-imagem-marco">
                            <div class="bola-com-data tela-pequena d-none">
                                <h4>
                                    <?php echo get_post_meta( get_the_ID() , 'data', true ); ?>
                                </h4>
                            </div>
                            <?php echo the_post_thumbnail(); ?>
                        </div>

                        <div class="pt-2 pb-4 pl-4 pr-4">
                            <h3 class="title-section mt-3 mb-3 text-center">
                                <?php echo the_title(); ?>
                            </h3>

                            <?php echo the_excerpt(); ?>
                        </div>

                    </div>
                </a>




            </div>




            <div class="card-data-marco d-flex align-items-center">

                <h2 class="data-marco">
                    <?php echo get_post_meta( get_the_ID() , 'data', true ); ?>
                </h2>

            </div>

        </div>

</div>