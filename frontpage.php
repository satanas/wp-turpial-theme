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
            <div id="signature">
                <p>Turpial is a lightweight and beautiful microblogging client written in Python</p>
                <a href="http://turpial.org.ve/downloads/">Download</a>
            </div>

            <?php get_template_part('features'); ?>

            <h3 id="latest-news-title">Latest news</h3>

            <?php get_template_part('latest_news'); ?>

            <?php get_template_part('ads_h_display'); ?>
        </div>
    </div>

    <div class="push"></div>
    <?php get_footer(); ?>
</body>
</html>
