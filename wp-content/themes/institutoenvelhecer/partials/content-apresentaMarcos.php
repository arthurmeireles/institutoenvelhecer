<div class="article-list container mb-5">

<div class="team-boxed" style="background-color: white">
    <div class="col-lg-12">
        <div class="card-box" >
            <h4 class="header-title mb-4">Tabs Vertical Left</h4>

            <div class="row">
                <div class="col-md-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">





                        <?php
                        $args = array(
                            'post_type' => 'Historia',
                            'posts_per_page' => 5
                        );

                        $objeto = new WP_Query( $args );

                        if( $objeto->have_posts() ) :
                            while ( $objeto->have_posts() ) : $objeto->the_post();
                                get_template_part( 'partials/content', 'controleTab' );
                            endwhile;

// Parando a query
                            wp_reset_postdata();

                            ?>

                        <?php else:
                            get_template_part( 'content', '404eventos' );

                            ?>
                            <!-- Mostra algo caso nao tenha conteúdo -->
                        <?php endif; ?>

                    </div>
                </div>
<!--                <div class="col-md-9">-->
<!--                    <div class="tab-content pt-0">-->
<!--                        --><?php
//                        $args = array(
//                            'post_type' => 'Historia',
//                            'posts_per_page' => 5
//                        );
//
//                        $objeto = new WP_Query( $args );
//
//                        if( $objeto->have_posts() ) :
//                            while ( $objeto->have_posts() ) : $objeto->the_post();
//                                get_template_part( 'partials/content', 'conteudoTab' );
//                            endwhile;
//
//// Parando a query
//                            wp_reset_postdata();
//
//                            ?>
<!---->
<!--                        --><?php //else:
//                            get_template_part( 'content', '404eventos' );
//
//                            ?>
<!--                            Mostra algo caso nao tenha conteúdo -->
<!--                        --><?php //endif; ?>
<!--                    </div>-->
<!--                </div>-->
            </div>
            <!-- end row -->
        </div>
    </div>
</div>

</div>
