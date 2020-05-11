/*
Template Name: Pesquisas
*\
<?php get_header(); ?>


<div class="article-list">
    <div class="container" id="lista-eventos-pgn-eventos">
        <div class="intro mb-5">
            <h2 class="text-center title-section">Pesquisas</h2>
            <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat,
                pellentesque ut laoreet vitae.
            </p>
        </div>
        <div class="row articles" id="pgn-eventos-lista-cards">

            <?php
            $args = array(
                'post_type' => 'Pesquisa',
            );
            $the_query = new WP_Query( $args );
            ?>

            <?php if ( $the_query->have_posts() ) : ?>

                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <a class="ajusta-card mb-5 d-flex"  href="<?php the_permalink(); ?>">
                        <figure class="snip1253">

                            <div class="image">
                                <?php echo the_post_thumbnail(); ?>
                            </div>
                            <figcaption>

                                <h3> <?php echo the_title(); ?> </h3
                                <p>
                                    <?php echo the_excerpt(); ?>
                                </p>
                            </figcaption>
                        </figure>
                    </a>

                <?php endwhile; ?>
            <?php else:
                get_template_part( 'partials/content', '404eventos' );
                ?>
            <?php endif; ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>

