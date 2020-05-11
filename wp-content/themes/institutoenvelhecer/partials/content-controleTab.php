<a class="nav-link mb-2" id="v-pills-<?php echo get_the_ID() ?>" data-toggle="pill" href="#<?php echo get_the_ID() ?>"
   role="tab" aria-controls="<?php echo get_the_ID() ?>" aria-selected="false" onclick="">
    <?php echo get_post_meta( get_the_ID() , 'data', true ); ?>
</a>
