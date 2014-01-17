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
            <div id="posts">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                <div class="post">
                    <div class="head">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <span class="metadata">
                            <span class="date"><?php the_time('M d, Y'); ?></span>
                            <span class="author"><?php _e('By '); the_author_posts_link(); edit_post_link('Edit', ' &#124; ', ''); ?></span>
                        </span>
                    </div>

                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php endwhile; ?>

                <div id="adsense_container">
                    <div class="turpial_adsense_precomment">
                        <script type="text/javascript"><!--
                        google_ad_client = "ca-pub-9865703181407066";
                        /* Turpial Pre-Comment */
                        google_ad_slot = "9336785207";
                        google_ad_width = 468;
                        google_ad_height = 60;
                        //-->
                        </script>
                        <script type="text/javascript"
                        src="//pagead2.googlesyndication.com/pagead/show_ads.js">
                        </script>
                    </div>
                </div>

                <div class="comments-template"><?php comments_template(); ?></div>
            <?php else : ?>
                <h2><?php _e('We couldn\'t find posts'); ?></h2>
            <?php endif ?>
            </div> <!-- end posts -->

            <?php get_sidebar(); ?>
            <?php get_template_part('ads_h_text'); ?>
        </div> <!-- end page -->
    </div> <!-- end container -->
    <div class="push"></div>

    <?php get_footer(); ?>
</body>
</html>
