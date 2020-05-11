
<?php get_header(); ?>

<?php while (have_posts()) : if (have_posts()) : the_post(); ?>

    <div class="article-list pb-3" style="min-height: 64.4vh">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2>
                        <?php echo get_the_title(); ?>
                    </h2>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <p class="data">
                        <?php the_content(); ?>
                    </p>
                </div>

            </div>
        </div>



    </div>
<?php endif; endwhile;; ?>



<?php get_footer(); ?>