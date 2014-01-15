<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php get_template_part('head'); ?>
</head>

<body>
    <?php get_header(); ?>

    <div id="wrapper">
        <div class="container">
            <div id="page">
                <div id="posts">
                <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                    <div class="post">
                        <div class="post-head">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <span class="metadata">
                            <?php _e('Posted '); the_time('m/d/Y'); _e(' by '); _e(' '); the_author_posts_link(); edit_post_link('Edit', ' &#124; ', ''); ?></span>
                        </div>
                        <?php the_content(); ?>
                    </div>
                    <?php endwhile; ?>
                    <div class="comments-template"><?php comments_template(); ?></div>
                <?php else : ?>
                    <h2><?php _e('We couldn\'t find posts'); ?></h2>
                <?php endif ?>
                </div> <!-- end posts -->

                <?php get_sidebar(); ?>
                <?php get_template_part('footer_ads'); ?>
            </div> <!-- end page -->
        </div> <!-- end container -->
        <div class="push"></div>
    </div> <!-- end wrapper -->

    <?php get_footer(); ?>
</body>
</html>
