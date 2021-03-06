<?php

function vesterhavsgruppen_resources() {

wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'vesterhavsgruppen_resources');

//Video
function prefix_your_custom_embed_url_attributes( $video_url ) {
    $video_url .= '&loop=1';
    return $video_url;
}
add_filter( 'wp_video_popup', 'prefix_your_custom_embed_url_attributes' );

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

//Navigation Menus 
register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
));
