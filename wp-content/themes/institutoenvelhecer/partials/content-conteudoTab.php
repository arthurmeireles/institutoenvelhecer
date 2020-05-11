<div class="tab-pane fade coloca-aqui" id="<?php echo get_the_ID() ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo get_the_ID() ?>">
    <div class="col-md-6">
        <h3 class="title-section mt-3 mb-3 text-center">
            <?php echo the_title(); ?>
        </h3>
        <?php echo the_excerpt(); ?>
    </div>
    <div class="col-md-6">
        <?php echo the_post_thumbnail(); ?>
    </div>
</div>