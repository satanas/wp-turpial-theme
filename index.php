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

            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                <div class="post">
                  <div class="post-head">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <span class="metadata">
                      <?php _e('Posted '); the_time('m/d/Y'); _e(' by '); _e(' '); the_author_posts_link(); edit_post_link('Edit', ' &#124; ', ''); ?></span>
                  </div>
                  <?php the_content(); ?>
                  <span class="comment-count"><img alt="coment-icon" src="<?php bloginfo('template_directory'); ?>/images/comment-icon.png" width="16" /><?php comments_popup_link('No comments', '1 comment', '% comments'); ?></span>
                </div>
                <?php endwhile; ?>
                <div id="navigation">
                    <p><?php posts_nav_link(); ?></p>
                </div>
            <?php else : ?>
            <div class="post">
                <h2><?php _e('We couldn\'t find posts'); ?></h2>
            </div>
            <?php endif ?>
        </div>
    </div>

    <?php get_footer(); ?>
</body>
</html>
