



<a class="ajusta-card mb-3 d-flex" href="<?php the_permalink(); ?>">
    <figure class="snip1253">

        <div class="image">
            <?php echo get_the_post_thumbnail(); ?>
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