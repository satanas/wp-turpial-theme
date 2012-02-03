<?php /* Template Name: Portada */ ?>

<?php get_header(); ?>
    <div id="content">
      <div id="landscape">
        <div id="gallery" class="landscape-item">
          <div id="main-slider" class="slider">    
            <img src="<?php bloginfo('template_directory'); ?>/images/main-slider/slide1.png" alt="" />
            <img src="<?php bloginfo('template_directory'); ?>/images/main-slider/slide2.png" alt="" />
            <img src="<?php bloginfo('template_directory'); ?>/images/main-slider/slide3.png" alt="" />
          </div>
        </div>
        <div id="description" class="landscape-item">
          <h1>Tan criollo como la arepa</h1>
          <p>Turpial is a microblogging client written in Python. It is lightweight, functional and does not harm the ozone layer</p>
          <a id="download-button" href="downloads/">version 1.6.8</a>
        </div>
        <div class="clearbox"></div>
      </div> 
      <div id="features">
        <div class="feature">
          <img alt="A lot of functionality" width="60" src="<?php bloginfo('template_directory'); ?>/images/functionality.png" />
          <div class="feature-text">
            <h2>A lot of functionality</h2>
            <p>Despite being a thin client it has support for replies, retweets, mentions, direct messages, favorites, among other</p>
          </div>
        </div>
        <div class="feature">
          <img alt="Upload images and short urls" width="60" src="<?php bloginfo('template_directory'); ?>/images/images.png" />
          <div class="feature-text">
            <h2>Upload images and short urls</h2>
            <p>Support for upload images and short urls with a bunch of services</p>
          </div>
        </div>
        <div class="feature">
          <img alt="Wide mode" width="60" src="<?php bloginfo('template_directory'); ?>/images/columns.png" />
          <div class="feature-text">
            <h2>Wide mode</h2>
            <p>You can adjust Turpial to show 3 columns, that way you will see all your info at a glance</p>
          </div>
        </div>
        <span class="more"><a href="features/">learn more...</a></span>
        <div class="clearbox"></div>
      </div>
      <div id="page">
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
        <div id="news">
          <div id="news-title">
            <img alt="news" src="<?php bloginfo('template_directory'); ?>/images/news.png" width="70" />
              <h2>News</h2>
              <div class="clearbox"></div>
            </div>

            <?php $my_query = new WP_Query('showposts=3'); ?>
            <?php if($my_query->have_posts()) : ?>
              <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <div class="post">
              <div class="post-head">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <span class="metadata"><?php the_time('F j, Y'); ?></span>
              </div>
              <?php the_excerpt(); ?>
              <span class="post-more"><a href="<?php the_permalink(); ?>">(read more)</a></span>
            </div>
              <?php endwhile; ?>
            <?php else : ?>
            <div class="post">
              <div class="post-head">
                <h2>We have no news for the moment. Please come back later</h2>
              </div>
            </div>
            <?php endif; ?>

            <span id="more-news"><a href="news/">Go to blog</a></span>
          </div>
          <div id="buttons">
            <a href="faqs" class="button">
              <img alt="button-image" src="<?php bloginfo('template_directory'); ?>/images/help-icon.png" width="60" />
              <span class="button-title">Asks</span>
              <span class="button-text">¿Lost? Read the answers for most frecuent questions and clear your doubts</span>
            </a>
            <a href="http://dev.turpial.org.ve" class="button">
              <img alt="button-image" src="<?php bloginfo('template_directory'); ?>/images/develop-icon.png" width="60" />
              <span class="button-title">Development</span>
              <span class="button-text">Find out how you can collaborate with the project</span>
            </a>
            <?php get_twitter_widget(); ?>
          </div>
          <div class="clearbox"></div>
          <div id="turpial_ads"> Ads Here </div>
        </div>
      </div>
      </div>
      <div class="push"></div>
    </div>
<?php get_footer(); ?>
