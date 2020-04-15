/*
Template Name: Home
*\


<?php get_header(); ?>
    <div class="container-fluid main-header-text">
        <div class="top-header-container">
            <div class="header-cell">
                <h1>Instituto do ENVELHECER</h1>
                <p>Nam porttitor blandit accumsan. Ut vel dictum sem, a pretium dui. In malesuada enim in dolor euismod,
                    id commodo mi consectetur. Curabitur at vestibulum nisi. Nullam vehicula nisi velit. Mauris turpis
                    nisl, molestie ut ipsum et, suscipit
                    vehicula odio. Vestibulum interdum vestibulum felis ac molestie. Praesent aliquet quam et libero
                    dictum, vitae dignissim leo eleifend. In in turpis turpis. Quisque justo turpis, vestibulum non enim
                    nec, tempor mollis mi. Sed vel tristique
                    quam.</p>
            </div>
        </div>
    </div>
    <div class="team-boxed png-inicial">
        <div class="container">
            <div class="intro">
                <h2 class="text-center title-section"> Próximos eventos</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh
                    erat, pellentesque ut laoreet vitae.</p>
            </div>
            <div class="row justify-content-around">



                <?php

                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3
                );

                $objeto = new WP_Query( $args );

                if( $objeto->have_posts() ) :
                    while ( $objeto->have_posts() ) : $objeto->the_post();
                        get_template_part( 'content', 'card' );
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
    </div>


    <div class="highlight-phone intro-sobre pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6">
                    <div class="intro mb-3">
                        <h2 class="text-center title-section">Sobre nós</h2>
                        <p>
                            Nam porttitor blandit accumsan. Ut vel dictum sem, a pretium dui. In malesuada enim in dolor
                            euismod, id commodo mi consectetur. Curabitur at vestibulum nisi. Nullam vehicula nisi
                            velit. Mauris turpis nisl, molestie ut ipsum et,
                            suscipit vehicula odio. Vestibulum interdum vestibulum felis ac molestie. Praesent aliquet
                            quam et libero dictum, vitae dignissim leo eleifend. In in turpis turpis. Quisque justo
                            turpis, vestibulum non enim nec, tempor mollis
                            mi.&nbsp;
                        </p>
                        <a class="btn btn-primary" role="button" href="#"
                           style="background-color: rgb(0,84,122) !important;">SAIBA MAIS</a>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-6">
                    <img src="/institutoenvelhecer/wp-content/uploads/2020/04/40955.jpg">
                </div>
            </div>
        </div>
    </div>


    <div class="features-blue">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Contato</h2>
                <p class="text-center">
                    Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut
                    laoreet vitae.
                </p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 features row">
                <div class="col-sm-12 col-md-4 item"><i class="fa fa-map-marker icon"></i>
                    <h3 class="name">
                        <strong>Nossa localização</strong>
                    </h3>
                    <p class="description">
                        DDP/UFRN - Campus Universitário Lagoa Nova, CEP 59.078.970 - Natal/RN
                    </p>
                </div>
                <div class="col-sm-12 col-md-4 item"><i class="fa fa-clock-o icon"></i>
                    <h3 class="name">
                        <strong>Horário de Funcionamento</strong>
                    </h3>
                    <p class="description">
                        Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu
                        gravida. Aliquam varius finibus est.
                    </p>
                </div>
                <div class="col-sm-12 col-md-4 item">
                    <i class="fa fa-phone icon"></i>
                    <h3 class="name">
                        <strong>Nossos Contatos</strong>
                    </h3>
                    <div class="description">

                        <p class="m-0">
                            <label>Telefone:</label>&nbsp;
                            <label>4002-8922</label>
                        </p>

                        <p class="m-0">
                            <label>Celular:&nbsp;</label>&nbsp;
                            <label>(84) 9.9999-0000</label>
                        </p>

                        <p class="m-0 ">
                            <label>E-mail:</label>&nbsp;
                            <label>institutodoenvelhecer@ufrn.edu.br</label>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>




<?php get_footer(); ?>

