<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
  <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <?if (is_page('Home') || is_page('Features')): ?>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/nivo-slider.css" type="text/css" media="screen" />
  <?php endif ?>
  <?if (is_page('Gallery')) : ?>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/lytebox.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/gallery.css" type="text/css" media="screen" />
  <?php endif ?>
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
  <?php wp_enqueue_script("jquery"); ?>
  <?php get_nivoslider_script(); ?>
  <?php get_lytebox_script(); ?>
  <?php wp_head(); ?>
  <script type="text/javascript">
    var disqus_developer = 1; // this would set it to developer mode
  </script> 
</head>

<body>
  <div id="wrapper">
    <div id="logo-contact-icons">
      <a id="logo" href="<?php bloginfo('url'); ?>"></a>
      <div id="contact-icons">
        <a id="rss-icon" href="http://feeds.feedburner.com/turpial" title="Feed RSS"></a>
        <a id="twitter-icon" href="http://twitter.com/turpialve" title="@turpialve"></a>
        <div class="clearbox"></div>
      </div>
    </div>
    <div class="shadow">
    <div id="header">
      <div id="menu">
        <ul>
          <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
          <?php wp_list_pages('title_li=&depth=1'); ?>
          <li><a href="http://dev.turpial.org.ve">Development</a></li>    
        </ul>
      </div>
    </div>
