<?php

function allow_svg_uploads( $mimes ) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter( 'upload_mimes', 'allow_svg_uploads' );

function test_task_assets() {
    // wp_enqueue_style( 'map', get_template_directory_uri() . '/assets/css/main.css.map');
    wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_script( 'accordeon', get_template_directory_uri() . '/assets/js/accordeon.js', [], null, true);
}

add_action( 'wp_enqueue_scripts', 'test_task_assets' );

show_admin_bar(false);
