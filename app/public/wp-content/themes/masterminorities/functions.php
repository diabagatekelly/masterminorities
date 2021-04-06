<?php 
function important_files() {
    wp_enqueue_script('javaScript', get_theme_file_uri('/js/scripts-bundled.js'), 'NULL', microtime(), true);
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Lato|Roboto&display=swap');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.3.1.slim.min.js');
    wp_enqueue_script('popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
    wp_enqueue_script('bootstrap-js', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');

    wp_enqueue_style('main_styles', get_stylesheet_uri(), NULL, microtime());

    wp_localize_script('javaScript', 'siteData', array(
        'root_url' => get_site_url()
    ));
}
add_action('wp_enqueue_scripts', 'important_files');


function features() {
    register_nav_menu('footerMenu', 'Footer Menu');
    add_theme_support('title-tag');
    add_filter( 'get_the_archive_title', function ($title) {    
        if ( is_category() ) {    
                $title = single_cat_title( '', false );    
            } elseif ( is_tag() ) {    
                $title = single_tag_title( '', false );    
            } elseif ( is_author() ) {    
                $title = '<span class="vcard">' . get_the_author() . '</span>' ;    
            } elseif ( is_tax() ) { //for custom post types
                $title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
            }    
        return $title;    
    });
}
add_action('after_setup_theme', 'features');

add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );
function load_dashicons_front_end() {
  wp_enqueue_style( 'dashicons' );
}

function pageBanner($args = NULL) {
    ?>

<div class="row d-flex align-items-center page-title" style="background-image: linear-gradient(rgba(255, 255, 255, 0.4), rgba(255, 255, 255, 0.4)), url(
    
    <?php if($args['background']) {
        echo $args['background'];
        } else {
            $pageBannerImage = get_field('banner_image', get_queried_object_id()); echo $pageBannerImage['url'];
            } ?>); background-repeat: no-repeat; background-size: cover;">
        <div class="col text-center justify-content-center">
            <h1><?php
            if($args['title']) {
                echo $args['title'];
            } else {
            the_title();
            }
            ?></h1>
        </div>
    </div>
    <?php
}



function custom_sidebar() {
    register_sidebar(
        array(
            'name' => __( 'Custom'),
            'id' => 'custom-sidebar',
            'description' => __('Custom Sidebar for Blog Page'),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
        );
}
add_action( 'widgets_init', 'custom_sidebar');

function wpse74620_ignore_sticky($query)
{
    if (is_home() && $query->is_main_query())
    $query->set('post__not_in', get_option('sticky_posts'));

}
add_action('pre_get_posts', 'wpse74620_ignore_sticky');


?>