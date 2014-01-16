<?php
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(320, 240, true);

if ( function_exists('register_sidebar') )
    register_sidebar();
?>
