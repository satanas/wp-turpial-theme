<?php
/*
 * Template Name: Donate
 * */
?>
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
            <div id="wp-page">
                <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                    <h1><?php the_title(); ?></h1>

                    <div id="content"><?php the_content(); ?></div>

                    <div id="donations">
                        <div class="method">
                            <h2>Flattr</h2>
                            <a class="FlattrButton" style="display:none;" href="http://turpial.org.ve"></a>
                            <noscript>
                                    <a href="http://flattr.com/thing/452623/Turpial-Website" target="_blank">
                                    <img src="http://api.flattr.com/button/flattr-badge-large.png" alt="Flattr this" title="Flattr this" border="0" /></a>
                            </noscript>
                        </div>

                        <div class="method">
                            <h2>Paypal</h2>
                            <a id="paypal-donate" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=3QDYV3JLXPQ7U"><img src="https://www.paypal.com/en_US/i/btn/x-click-but04.gif" alt="" /></a>
                        </div>
                        <div class="clearbox"></div>


                        <h4>Or just check our sponsors ;)</h4>
                    </div>


                    <?php endwhile; ?>
                <?php else : ?>
                    <p>We couldn't find the page you are looking for</p>
                <?php endif; ?>
            </div>

            <?php get_template_part('ads_h_display'); ?>
        </div>
    </div>

    <div class="push"></div>
    <?php get_footer(); ?>
</body>
</html>
