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
            </div>

            <?php get_template_part('features'); ?>

            <div id="latest-news">
            </div>
        </div>
    </div>

<div id="content">
        <div id="description" class="landscape-item">
          <h1>Made in Venezuela</h1>
          <p>Turpial is a microblogging client written in Python. It is lightweight, functional and does not harm the ozone layer</p>
          <a id="download-button" href="downloads/">version 1.6.9</a>
        </div>
        <div class="clearbox"></div>
      </div> 
      
      <div id="page">
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
    <?php get_footer(); ?>
</body>
</html>
