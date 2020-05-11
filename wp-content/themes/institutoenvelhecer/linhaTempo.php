/*
Template Name: Linha do Tempo
*\
<?php get_header(); ?>



<div class="pgn-linha-tempo article-list container mb-5">
    <div class="intro mb-5">
        <h2 class="text-center title-section">Linha do tempo</h2>
        <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat,
            pellentesque ut laoreet vitae. </p>
    </div>
    <div class="timeline">
        <?php
        $args = array(
            'post_type' => 'Historia',
            'posts_per_page' => 5
        );

        $objeto = new WP_Query( $args );

        if( $objeto->have_posts() ) :
            while ( $objeto->have_posts() ) : $objeto->the_post();
                get_template_part( 'partials/content', 'cardLinhaTempo' );
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

<style>
    .pgn-linha-tempo{
        background-color: #eef4f7;
    }

    .marca a .card{
        max-width: 550px;
    }
    .bola-com-data.tela-pequena{
        display: none !important;
    }
    .card-data-marco{
        display: none !important;
    }

    .bola-com-data{
        display: flex !important;
        height: 150px;
        width: 150px;
        background-color: rgb(255, 186, 104);
        position: absolute;
        border: 3px solid #a6d3e9;
        border-radius: 50%;
        justify-content: center;
    }
    .bola-com-data h4{
        height: auto;
        display: flex !important;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white
    }

    .linha{
        height: 100%;
        width: 3px;
        background-color: #0088c74d;
        color: #1d2124;
    }
    .bola{
        width: 25px;
        height: 25px;
        border: solid 1px black;
        background-color: #cca92c;
        border-radius: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
        box-shadow: 0 0 0 0 rgba(0, 0, 0, 1);
        animation: pulse 2s infinite
    }

    .data-marco {
        min-height: 135px;
        min-width: 280px;
        padding: 20px 30px;
        background-color: #a6d3e8;
        border-radius: 6px;
        vertical-align: middle;
        display: flex;
        text-align: center;
        box-shadow: 0 4px 9px 0 rgba(67, 65, 79, 0.48);
        display: table-cell;
        vertical-align: middle;
        color: #eef4f7 !important;
    }

    @media (max-width: 768px){

        .pgn-linha-tempo{
            padding-top: 5%;
        }
        .bola-com-data.tela-pequena{
            display: flex !important;
            border-radius: 0px;
            height: auto;
            width: auto;
            background-color: rgb(255, 186, 104);
            position: absolute;
            justify-content: center;
            padding: 3%;
            border: none;
        }
        .box-imagem-marco{
            min-width: 50%;
            min-height: 3em;
            margin-left: 0px !important;
        }
        .card::before{
            content: none;
        }
        .tela-grande{
            display: none !important;
        }
    }

    @-webkit-keyframes pulse {
        0% {
            -webkit-box-shadow: 0 0 0 0 rgba(204,169,44, 0.4);
        }
        70% {
            -webkit-box-shadow: 0 0 0 10px rgba(204,169,44, 0);
        }
        100% {
            -webkit-box-shadow: 0 0 0 0 rgba(204,169,44, 0);
        }
    }
    @keyframes pulse {
        0% {
            -moz-box-shadow: 0 0 0 0 rgba(204,169,44, 0.4);
            box-shadow: 0 0 0 0 rgba(204,169,44, 0.4);
        }
        70% {
            -moz-box-shadow: 0 0 0 10px rgba(204,169,44, 0);
            box-shadow: 0 0 0 10px rgba(204,169,44, 0);
        }
        100% {
            -moz-box-shadow: 0 0 0 0 rgba(204,169,44, 0);
            box-shadow: 0 0 0 0 rgba(204,169,44, 0);
        }
    }

</style>

<script>

</script>

<?php get_footer(); ?>

