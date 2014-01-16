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
                      <div id="turpial_adsense">
                        <script type="text/javascript"><!--
                        google_ad_client = "ca-pub-9865703181407066";
                        /* Turpial Footer */
                        google_ad_slot = "1694063806";
                        google_ad_width = 728;
                        google_ad_height = 90;
                        //-->
                        </script>
                        <script type="text/javascript"
                        src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                        </script>
                      </div>
                    </div>


                    <div id="content"><?php the_content(); ?></div>

                    <?php endwhile; ?>
                <?php else : ?>
                    <p>We couldn't find the page you are looking for</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="push"></div>
    <?php get_footer(); ?>
</body>
</html>
