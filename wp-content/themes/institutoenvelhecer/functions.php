<?php



function institutoenvelhecer_wp_styles() {

// CSS OBRIGATORIO
    wp_enqueue_style( 'style_css', get_stylesheet_uri() );

// MEUS ARQUIVOS DE CSS
    wp_enqueue_style( 'main_css', get_stylesheet_directory_uri().'/assets/css/style.css' );
    wp_enqueue_style( 'bootstrap_min_css', get_stylesheet_directory_uri().'/assets/bootstrap/css/bootstrap.min.css' );

    wp_enqueue_style( 'font_awesome_min_css', get_stylesheet_directory_uri().'/assets/fonts/font-awesome.min.css' );
    wp_enqueue_style( 'ionicons_min_css', get_stylesheet_directory_uri().'/assets/fonts/ionicons.min.css' );
    wp_enqueue_style( 'Team_Rotating_Cards_BS4_css', get_stylesheet_directory_uri().'/assets/css/-Team-Rotating-Cards-BS4-.css' );
    wp_enqueue_style( 'Add_Another_Button_css', get_stylesheet_directory_uri().'/assets/css/Add-Another-Button.css' );
    wp_enqueue_style( 'Article_Cards_css', get_stylesheet_directory_uri().'/assets/css/Article-Cards.css' );
    wp_enqueue_style( 'Article_List_css', get_stylesheet_directory_uri().'/assets/css/Article-List.css' );
    wp_enqueue_style( 'best_carousel_slide_css', get_stylesheet_directory_uri().'/assets/css/best-carousel-slide.css' );
    wp_enqueue_style( 'Card_Group1_Shadow_css', get_stylesheet_directory_uri().'/assets/css/Card-Group1-Shadow.css' );
    wp_enqueue_style( 'Carousel_Hero_css', get_stylesheet_directory_uri().'/assets/css/Carousel-Hero.css' );
    wp_enqueue_style( 'Central-Align-Logo-Header-With-Nav_css', get_stylesheet_directory_uri() . '/assets/css/Central-Align-Logo-Header-With-Nav.css' );
    wp_enqueue_style( 'Copyright_css', get_stylesheet_directory_uri().'/assets/css/Copyright.css' );
    wp_enqueue_style( 'Dark-NavBar_css', get_stylesheet_directory_uri().'/assets/css/Dark-NavBar.css' );
    wp_enqueue_style( 'dh-header-cover-image-button_css', get_stylesheet_directory_uri().'/assets/css/dh-header-cover-image-button.css' );
    wp_enqueue_style( 'dh-navbar-inverse_css', get_stylesheet_directory_uri().'/assets/css/dh-navbar-inverse.css' );
    wp_enqueue_style( 'Features-Blue_css', get_stylesheet_directory_uri().'/assets/css/Features-Blue.css' );
    wp_enqueue_style( 'fontawesome-all_min_css', get_stylesheet_directory_uri().'/assets/css/fontawesome-all.min.css' );
    wp_enqueue_style( 'fontawesome5-overrides_min_css', get_stylesheet_directory_uri().'/assets/css/fontawesome5-overrides.min.css' );
    wp_enqueue_style( 'Footer-Dark_css', get_stylesheet_directory_uri().'/assets/css/Footer-Dark.css' );
    wp_enqueue_style( 'Header---Apple_css', get_stylesheet_directory_uri().'/assets/css/Header---Apple.css' );
    wp_enqueue_style( 'Header-Blue_css', get_stylesheet_directory_uri().'/assets/css/Header-Blue.css' );
    wp_enqueue_style( 'font-awesome_min_css', get_stylesheet_directory_uri().'/assets/css/font-awesome.min.css' );
    wp_enqueue_style( 'Highlight-Phone_css', get_stylesheet_directory_uri().'/assets/css/Highlight-Phone.css' );
    wp_enqueue_style( 'ionicons.min_css', get_stylesheet_directory_uri().'/assets/css/ionicons.min.css' );
    wp_enqueue_style( 'Map-Clean_css', get_stylesheet_directory_uri().'/assets/css/Map-Clean.css' );
    wp_enqueue_style( 'Navbar---Apple_css', get_stylesheet_directory_uri().'/assets/css/Navbar---Apple.css' );
    wp_enqueue_style( 'News-Cards_css', get_stylesheet_directory_uri().'/assets/css/News-Cards.css' );
    wp_enqueue_style( 'Paralax-Box_css', get_stylesheet_directory_uri().'/assets/css/Paralax-Box.css' );
    wp_enqueue_style( 'Pretty-Footer_css', get_stylesheet_directory_uri().'/assets/css/Pretty-Footer.css' );
    wp_enqueue_style( 'Projects-Horizontal_css', get_stylesheet_directory_uri().'/assets/css/Projects-Horizontal.css' );
    wp_enqueue_style( 'Team-Boxed_css', get_stylesheet_directory_uri().'/assets/css/Team-Boxed.css' );
    wp_enqueue_style( 'TPC-Navigation-with-Phone-Left-Logo-Centered-Menu-Right_css', get_stylesheet_directory_uri().'/assets/css/TPC-Navigation-with-Phone-Left-Logo-Centered-Menu-Right.css' );
    wp_enqueue_style( 'Website-Wrapper_css', get_stylesheet_directory_uri().'/assets/css/Website-Wrapper.css' );

//    MEUS ARQUIVOS DE JS
//    wp_enqueue_script('jquery', get_template_directory_uri().'/assets/js/jquery.min.js', array(), '', false);

    wp_enqueue_script('bootstrap_min_js', get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js', array('jquery'), '', true);
    wp_enqueue_script('bs_init_js', get_template_directory_uri().'/assets/js/bs-init.js', array('jquery'), '', true);
    wp_enqueue_script('clean_blog_js', get_template_directory_uri().'/assets/js/clean-blog.js', array('jquery'), '', true);
    wp_enqueue_script('navbar_apple_js', get_template_directory_uri('jquery').'/assets/js/Navbar---Apple.js', array(), '', true);
    wp_enqueue_script('paralax_box_js', get_template_directory_uri('jquery').'/assets/js/Paralax-Box.js', array(), '', true);

}


    add_action( 'wp_enqueue_scripts', 'institutoenvelhecer_wp_styles' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support('title-tag');
    add_filter ("widget_text", "do_shortcode");
?>