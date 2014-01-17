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

                    <?php get_template_part('ads_h_display'); ?>

                    <div id="content"><?php the_content(); ?></div>

                    <?php endwhile; ?>
                <?php else : ?>
                    <p>We couldn't find the page you are looking for</p>
                <?php endif; ?>
            </div>

            <?php get_template_part('ads_h_text'); ?>
        </div>
    </div>

    <div class="push"></div>
    <?php get_footer(); ?>
</body>
</html>
