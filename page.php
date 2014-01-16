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

                    <div id="adsense_container">
                        <div class="turpial_adsense_footer">
                            <script type="text/javascript"><!--
                            google_ad_client = "ca-pub-9865703181407066";
                            /* Turpial Page */
                            google_ad_slot = "6621834408";
                            google_ad_width = 728;
                            google_ad_height = 90;
                            //-->
                            </script>
                            <script type="text/javascript"
                            src="//pagead2.googlesyndication.com/pagead/show_ads.js">
                            </script>
                        </div>
                    </div>

                    <div id="content"><?php the_content(); ?></div>

                    <?php endwhile; ?>
                <?php else : ?>
                    <p>We couldn't find the page you are looking for</p>
                <?php endif; ?>
            </div>

            <?php get_template_part('footer_ads'); ?>
        </div>
    </div>

    <div class="push"></div>
    <?php get_footer(); ?>
</body>
</html>
