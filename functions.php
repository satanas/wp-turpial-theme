<?php
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(210, 158, true);
add_image_size('single-post-thumbnail', 450, 338);

if ( function_exists('register_sidebar') )
    register_sidebar();
?>
