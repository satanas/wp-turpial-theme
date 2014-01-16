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
                <?php $my_query = new WP_Query('showposts=10'); ?>
                <?php if($my_query->have_posts()) : ?>
                <div class="previews">
                    <?php $counter = 0; ?>
                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <div class="post-preview">
                        <?php the_post_thumbnail('single-post-thumbnail'); ?>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                        <span class="metadata">
                            <span class="date"><?php the_time('M d, Y'); ?></span>
                            <span class="author"><?php _e('By '); the_author_posts_link(); edit_post_link('Edit', ' &#124; ', ''); ?></span>
                        </span>
                        <?php echo get_the_excerpt(); ?> <a href="<?php the_permalink(); ?>">Read full article</a>
                    </div>
                    <?php $counter++; ?>
                    <?php if($counter > 4) : ?>
                        </div><div class="previews">
                    <?php endif; ?>
                    <?php endwhile; ?>
                </div>
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
