/*
Template Name: Home
*\


<?php get_header(); ?>

<div class="container-fluid main-header-text">
    <div class="top-header-container">
        <div class="header-cell">
            <h1>Instituto do Envelhecer</h1>

            <p>
                Nam porttitor blandit accumsan. Ut vel dictum sem, a pretium dui. In malesuada enim in dolor euismod,
                id commodo mi consectetur. Curabitur at vestibulum nisi. Nullam vehicula nisi velit. Mauris turpis
                nisl, molestie ut ipsum et, suscipit
                vehicula odio. Vestibulum interdum vestibulum felis ac molestie. Praesent aliquet quam et libero
                dictum, vitae dignissim leo eleifend. In in turpis turpis. Quisque justo turpis, vestibulum non enim
                nec, tempor mollis mi. Sed vel tristique
                quam.
            </p>
        </div>
    </div>
</div>

<!--MENU SECUNDARIO SOLICITADO PELO MICHAEL-->
<div class="container-fluid mb-5" style="background-color: #eef4f7; height: auto">
    <div id="menu-secundario" class="container">
        <div class="col mt-5">
            <div class="menu-secundario-lista-items row justify-content-center">
                <div class="nav-item col" role="presentation">
                    <a class="nav-link" href="/institutoenvelhecer/documentos/">
                        <div class="box-logo-menu-secundario">
                            <img style="max-height: 12vh" src="/institutoenvelhecer/wp-content/uploads/2020/04/documentos.png">
                        </div>
                        <h4>Documentos</h4>
                    </a>
                </div>

                <div class="nav-item col" role="presentation">
                    <a class="nav-link" href="/institutoenvelhecer/pesquisas/">
                        <div class="box-logo-menu-secundario">
                            <img style="max-height: 12vh" src="/institutoenvelhecer/wp-content/uploads/2020/04/pesquisa.png">
                        </div>
                        <h4>Pesquisa</h4>
                    </a>
                </div>

                <div class="nav-item col" role="presentation">
                    <a class="nav-link" href="/institutoenvelhecer/posts-extensao/">
                        <div class="box-logo-menu-secundario">
                            <img style="max-height: 12vh" src="/institutoenvelhecer/wp-content/uploads/2020/04/extensão.png">
                        </div>
                        <h4>Extensão</h4>
                    </a>
                </div>

                <div class="nav-item col" role="presentation">
                    <a class="nav-link" href="/institutoenvelhecer/projetos-2/">
                        <div class="box-logo-menu-secundario">
                            <img style="max-height: 12vh" src="/institutoenvelhecer/wp-content/uploads/2020/04/projetos.png">
                        </div>
                        <h4>Projetos</h4>
                    </a>
                </div>

                <div class="nav-item col" role="presentation">
                    <a class="nav-link" href="/institutoenvelhecer/parceiros-2/">
                        <div class="box-logo-menu-secundario">
                            <img style="max-height: 12vh" src="/institutoenvelhecer/wp-content/uploads/2020/04/parceiros.png">
                        </div>
                        <h4>Parceiros</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="team-boxed png-inicial mb-5">

    <div class="container">
        <div class="intro">
            <h2 class="text-center title-section"> Últimas notícias</h2>
            <p class="text-center">
                Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh
                erat, pellentesque ut laoreet vitae.
            </p>
        </div>

        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <div id="box-carousel" class="carousel-inner" style="  display: flex; width: 100%; height: auto !important;
                justify-content: center; align-content: center;">


                <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 5
                    );

                    $objeto = new WP_Query( $args );

                    if( $objeto->have_posts() ) :
                        while ( $objeto->have_posts() ) : $objeto->the_post();
                            get_template_part( 'partials/content', 'card' );
                        endwhile;

// Parando a query
                        wp_reset_postdata();

                        ?>

                    <?php else:
                        get_template_part( 'content', '404eventos' );

                        ?>
                        <!-- Mostra algo caso nao tenha conteúdo -->
                    <?php endif; ?>

                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true">
                            <i class="fa fa-angle-left"></i>
                        </span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" style= "" aria-hidden="true">
                            <i class="fa fa-angle-right"></i>
                        </span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <a class="btn-acesso btn btn-primary m-auto" href="/institutoenvelhecer/noticias/">
                Clique aqui para ver mais notícias
            </a>
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
                    <a class="btn btn-primary btn-acesso" role="button" href="#"
                    >SAIBA MAIS</a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-6">
                <img src="/institutoenvelhecer/wp-content/uploads/2020/04/40955.jpg">
            </div>
        </div>
    </div>
</div>

    <div class="team-boxed png-inicial" style="background-color: white">
        <div class="container">
            <div class="intro">
                <h2 class="text-center title-section"> Próximos Eventos</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh
                    erat, pellentesque ut laoreet vitae.</p>
            </div>
            <div class="row justify-content-around">

                <?php
                $args = array(
                    'post_type' => 'Evento',
                    'posts_per_page' => 3

                );
                $the_query = new WP_Query( $args );
                ?>

                <?php if ( $the_query->have_posts() ) : ?>

                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <a class="ajusta-card mb-5 mt-2 d-flex"  href="<?php the_permalink(); ?>">
                            <figure class="snip1253">

                                <div class="image">
                                    <?php echo the_post_thumbnail(); ?>
                                </div>
                                <figcaption>


                                    <h3> <?php echo the_title(); ?> </h3>
                                    <div class="date">
                                        <p class="data">

                                            <?php echo get_post_meta( get_the_ID() , 'data_do_evento', true ); ?>
                                        </p>
                                    </div>
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

                <div class="col-sm-12 col-md-5 item"><i class="fa fa-clock-o icon"></i>
                    <h3 class="name">
                        <strong>Horário de Funcionamento</strong>
                    </h3>
                    <p class="description">
                        Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu
                        gravida. Aliquam varius finibus est.
                    </p>
                </div>

                <div class="col-sm-12 col-md-2 item">
                    <!--                   <i class="fa fa-map-marker icon"></i>-->
                    <!--                    <h3 class="name">-->
                    <!--                        <strong>Nossa localização</strong>-->
                    <!--                    </h3>-->
                    <!--                    <p class="description">-->
                    <!--                        DDP/UFRN - Campus Universitário Lagoa Nova, CEP 59.078.970 - Natal/RN-->
                    <!--                    </p>-->
                </div>


                <div class="col-sm-12 col-md-5 item">
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
        <div class="map-clean container " style="background-color: #0088c7">
            <div class="container">
                <div class="intro">
                    <h2 class="text-center title-section" style="color: #fff">Localização&nbsp;</h2>
                    <p class="text-center" style="color: #fff">
                        DDP/UFRN - Campus Universitário Lagoa Nova, CEP 59.078.970 - Natal/RN
                    </p>
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15876.569824223847!2d-35.2103498!3d-5.8355344!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x202db5ba763f4e40!2sDiretoria%20de%20Desenvolvimento%20de%20Pessoas%20-%20DDP%2FUFRN!5e0!3m2!1spt-BR!2sbr!4v1586117432474!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>

<style>
    .btn-acesso.btn-primary{
        background-color: #0088c7 !important;
    }
    .btn-acesso.btn-primary:hover{
        background-color: #0088c7 !important;
        font-weight: normal;
    }
    .carousel-item.card-noticia{
        margin-right: 0 !important;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
        max-height: 250px;
        height: 150px;
        text-align: left;
    }

    .carousel-control-next-icon, .carousel-control-prev-icon{
        border-radius: 50%;
        width: 50px;
        height: 50px;
        background-image: none !important;
    }
    .carousel-control-next-icon i, .carousel-control-prev-icon i{
        font-size: 40px;
        color: black;
        font-weight: bolder;
    }

    .box-imagem-noticia img{
        height: 100%;
        width: auto !important;
    }
    .description-mission{
        max-height: 100%;
        min-height: 100%;
        overflow: hidden;
    }
    .titulo-card{
        margin: 0px;
        font-weight: normal;
    }
    .card-noticia .item .row, .box-imagem, #menu-secundario .nav-item.col{
        height: 100%;
    }

    .description-mission h4, .description-mission p{
        text-align: left;
        margin-bottom: 0px;
    }

    .description-mission p{
        height: 60%;
    }

    .box-imagem img{
        height: 120px;
        width: auto;
    }
    .box-leia-mais{
        height: 25%;
    }
    .menu-secundario-lista-items{
        background-color: white;
        box-shadow: 0px 4px 6px 0px rgba(47,47,47,0.2);
        border-radius: 6px;
    }
    .  .nav-item .nav-link{
        width: 100%;
    }
    .menu-secundario-lista-items .nav-item .nav-link{
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
    .box-logo-menu-secundario{
        display: flex;
        justify-content: center;
    }


</style>

<script>

    function iniciaCarousel(){
        let card =  document.getElementsByClassName("card-noticia")
        let batata = card[0];
        batata.classList.add("active");
    }
</script>


<?php get_footer(); ?>

