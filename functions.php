<?php
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(234, 176);
add_image_size('single-post-thumbnail', 450, 338);

if ( function_exists('register_sidebar') )
    register_sidebar();
?>
