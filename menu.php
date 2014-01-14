<?php
/*
Template Name: Menu
*/
?>

<div id="navbar">
    <div id="menu">
        <ul>
            <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
            <?php wp_list_pages('title_li=&depth=1'); ?>
            <li><a href="http://wiki.turpial.org.ve">Wiki</a></li>
        </ul>
    </div>
</div>
