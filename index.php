<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php get_template_part('head'); ?>
</head>

<body>
    <?php get_header(); ?>
    <div id="container">
        <div id="page">
            <?php $my_query = new WP_Query('showposts=8'); ?>
            <?php if($my_query->have_posts()) : ?>
                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <div class="post-thumbnail">
                    <div class="shadow">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <span>
                            <p><?php the_time('M d, Y'); ?></p>
                            <p><?php _e('By '); the_author(); ?></p>
                        </span>
                    </div>
                    <?php the_post_thumbnail('single-post-thumbnail'); ?>
                </div>
                <?php endwhile; ?>
                <div id="navigation">
                    <p><?php posts_nav_link(); ?></p>
                </div>
            <?php else : ?>
            <div class="post">
                <div class="post-head">
                    <h2>We have no news for the moment. Please come back later</h2>
                </div>
            </div>
            <?php endif; ?>
            <div class="clearbox"></div>
        </div>
    </div>

    <?php get_footer(); ?>
</body>
</html>
