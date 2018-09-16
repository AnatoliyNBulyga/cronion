<?php
/**
 * Idea
 */

/**
 * Enqueue scripts and styles.
 */
function cronion_scripts() {

    wp_enqueue_style( 'cronion-style', get_stylesheet_uri() );
    // wp_enqueue_script('jquery'); Подключается автоматически если указать array('jquery')

    wp_enqueue_script('jquery.fullPage', get_template_directory_uri() . '/js/jquery.fullPage.min.js', array('jquery'), '', true);
    wp_enqueue_script('scrolloverflow', get_template_directory_uri() . '/js/scrolloverflow.min.js', array('jquery'), '', true);
    wp_enqueue_script('scrolloverflow', get_template_directory_uri() . '/js/scrolloverflow.min.js', array('jquery'), '', true);
    wp_enqueue_script('dat.gui', get_template_directory_uri() . '/js/dat.gui.min.js', array('jquery'), '', true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '', true);
    wp_enqueue_script('YTPlayer', get_template_directory_uri() . '/js/jquery.mb.YTPlayer.min.js', array('jquery'), '', true);
    wp_enqueue_script('device', get_template_directory_uri() . '/js/device.min.js', array('jquery'), '', true);
    wp_enqueue_script('jquery.lettering', get_template_directory_uri() . '/js/jquery.lettering.js', array('jquery'), '', true);
    wp_enqueue_script('jquery.textillate', get_template_directory_uri() . '/js/jquery.textillate.js', array('jquery'), '', true);
    wp_enqueue_script('jquery.magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), '', true);
    wp_enqueue_script('jquery.mCustomScrollbar', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.min.js', array('jquery'), '', true);

    wp_enqueue_script('cronion-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true);

    
}
add_action( 'wp_enqueue_scripts', 'cronion_scripts' );

add_theme_support('automatic-feed-links');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_image_size('news-thumb', 370, 240, true);
add_image_size('service-thumb', 430, 430, true);
add_image_size('partners-thumb', 55, 55, true);
register_nav_menus(array(
    'top' => __('Top Menu', 'idea'),
    'bottom' => __('Bottom Menu', 'idea'),
));
add_theme_support('html5', array(
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
));

// Post types (Services, Reviews, Cities, Brands)
function create_post_types() {
    register_post_type( 'partners',
        array(
            'labels' => array(
                'name' => __( 'Партнеры' ),
                'singular_name' => __( 'Партнер' )
            ),
            'taxonomies' => array( 'post_tag','cars_categories'),
            'public' => true,
            'has_archive' => 'partners',
            'capability_type' => 'post',
            'supports' => array( 'title', 'editor', 'thumbnail' )
        )
    );
}
add_action( 'init', 'create_post_types' );

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');