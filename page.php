<?php get_header(); ?>
    <div id="content">
      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
        <div id="page-head">
              <h1><?php the_title(); ?></h1>
        </div>
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
        <div id="page">
            <?php the_content(); ?>
        </div>
        <?php endwhile; ?>
      <?php else : ?>
        <div id="page-head">
          <h2><?php _e('Page not found'); ?></h2>
        </div>
        <div id="page">
          <p>We couldn't find the page you are looking for</p>
        </div>
    <?php endif; ?>
      </div>
      </div>
      <div class="push"></div>
    </div>
<?php get_footer(); ?>
