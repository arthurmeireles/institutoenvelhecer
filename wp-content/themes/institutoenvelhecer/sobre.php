/*
Template Name: Conteudo- Sobre
*\

<?php get_header(); ?>


<div id="pgn-sobre-barra-titulo" class="subheader-pages mb-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mt-5 mb-4">Sobre Nós</h2>
            </div>
        </div>
    </div>
</div>
<div class="highlight-phone mb-3">
    <div class="container">
        <div id="box-geral-sobre" class="row">
            <div class="col col-lg-6 mb-5">
                <h3 class="title title-txt-sobre">Escreve Algo aqui</h3>
                <p class="txts-sobre">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <div class="img-sobre">
                    <img src="/institutoenvelhecer/wp-content/uploads/2020/04/bg-pg-inicial-1.jpg">
                </div>
            </div>
            <div class="col col-lg-6 mb-5">
                <div class="img-sobre img-sobre-1 d-lg-block d-md-block d-sm-none">
                    <img src="/institutoenvelhecer/wp-content/uploads/2020/04/bg-pg-inicial-1.jpg">
                </div>

                <h3 class="title title-txt-sobre mt-5">Escreve Algo aqui</h3>

                <p class="txts-sobre">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <div class="img-sobre img-sobre-2 ">
                    <img src="/institutoenvelhecer/wp-content/uploads/2020/04/bg-pg-inicial-1.jpg">
                </div>

            </div>
        </div>
    </div>
</div>

<div class="projects-horizontal">
    <div class="container">
        <div class="intro">
            <h2 class="text-center title-section">Missão&nbsp;</h2>
            <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
        </div>
        <div class="row projects">
            <div class="col-sm-6 item">
                <div class="row">
                    <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="/institutoenvelhecer/wp-content/uploads/2020/04/bg-pg-inicial-1.jpg"></a></div>
                    <div class="col description-mission">
                        <h3 class="name">Project Name</h3>
                        <p class="description description-mission">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 item">
                <div class="row">
                    <div class="col-md-12 col-lg-5">
                        <a href="#">
                            <img class="img-fluid" src="/institutoenvelhecer/wp-content/uploads/2020/04/bg-pg-inicial-1.jpg">
                        </a></div>
                    <div class="col description-mission">
                        <h3 class="name">Project Name</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 item">
                <div class="row">
                    <div class="col-md-12 col-lg-5"><a href="#">
                            <img class="img-fluid" src="/institutoenvelhecer/wp-content/uploads/2020/04/bg-pg-inicial-1.jpg"></a></div>
                    <div class="col description-mission">
                        <h3 class="name">Project Name</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 item">
                <div class="row">
                    <div class="col-md-12 col-lg-5">
                        <a href="#">
                            <img class="img-fluid" src="/institutoenvelhecer/wp-content/uploads/2020/04/bg-pg-inicial-1.jpg">
                        </a>
                    </div>
                    <div class="col description-mission">
                        <h3 class="name">Project Name</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="projects-horizontal mb-5 container">
    <div class="intro col-md-12">
        <h2 class="text-center title-section">Linha do tempo&nbsp;</h2>
        <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
    </div>

    <div class="row mb-5">
        <?php
            $args = array(
                'post_type' => 'Historia',
                'posts_per_page' => 3
            );
            $the_query = new WP_Query( $args );
            ?>

        <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="col-md-4">
                    <div class="card card-pgn-sobre-marco">
                        <?php echo the_post_thumbnail(); ?>
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo the_title(); ?>
                            </h5>
                            <?php echo the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="btn btn-leia-mais">Leia Mais</a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else:
            get_template_part( 'partials/content', '404eventos' );
        ?>
        <?php endif; ?>

    </div>

    <div class="row mt-3">
        <a class="btn-acesso btn btn-primary m-auto" href="/institutoenvelhecer/timeline/">
            Clique aqui para ver mais
        </a>
    </div>
</div>



<div class="map-clean container">
    <div class="container">
        <div class="intro">
            <h2 class="text-center title-section">Localização&nbsp;</h2>
            <p class="text-center">
                Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae.
            </p>
        </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15876.569824223847!2d-35.2103498!3d-5.8355344!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x202db5ba763f4e40!2sDiretoria%20de%20Desenvolvimento%20de%20Pessoas%20-%20DDP%2FUFRN!5e0!3m2!1spt-BR!2sbr!4v1586117432474!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

<style>

    .card-pgn-sobre-marco{
        max-height: 500px;
        height: 100%;
    }
    .card-pgn-sobre-marco img{
        max-height: 200px;
    }
    .card-pgn-sobre-marco p{
        font-size: 14px;
    }

    .card-pgn-sobre-marco .card-body p{
        margin-bottom: 15px;
        overflow: hidden;
    }
    .card-pgn-sobre-marco .card-body a{
        background-color: rgb(0, 126, 184) !important;
    }
    .card-pgn-sobre-marco .card-body a:hover {
        font-weight: normal;
    }
    .btn-acesso.btn-primary{
        background-color: #0088c7 !important;
    }
    .btn-acesso.btn-primary:hover{
        background-color: #0088c7 !important;
        font-weight: normal;
    }
</style>


<?php get_footer(); ?>
