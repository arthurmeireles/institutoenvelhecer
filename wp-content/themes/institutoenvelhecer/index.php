

<?php get_header(); ?>

<div class="article-list">
    <div class="container" id="lista-eventos-pgn-eventos">
        <div class="intro mb-5">
            <h2 class="text-center title-section">Eventos</h2>
            <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat,
                pellentesque ut laoreet vitae. </p>
        </div>
        <div class="row articles" id="pgn-eventos-lista-cards">
            <?php
            while (have_posts()) : if (have_posts()) : the_post();
                global $post;



                ?>




                <a class="ajusta-card mb-5 d-flex"  href="<?php the_permalink(); ?>">
                    <figure class="snip1253">

                        <div class="image">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <figcaption>

                            <h3> <?php the_title(); ?> </h3>
                            <div class="date">
                                <p class="data">
                                    <?php echo get_post_meta( get_the_ID() , 'data_do_evento', true ); ?>
                                </p>
                            </div>
                            <p>
                                <?php the_excerpt(); ?>
                            </p>
                        </figcaption>
                    </figure>
                </a>


            <?php else:
                get_template_part( 'content', '404eventos' );
                ?>
            <?php endif; endwhile;; ?>


        </div>
    </div>
</div>
<?php get_footer(); ?>