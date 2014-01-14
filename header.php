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
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />

  <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <?php wp_enqueue_script("jquery"); ?>
  <?php wp_head(); ?>
  <script type="text/javascript">
    var disqus_developer = 0; // this would set it to developer mode
  </script>
  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-4851218-2']);
  _gaq.push(['_setDomainName', 'turpial.org.ve']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

  </script>
  <script type="text/javascript">
  /* <![CDATA[ */
      (function() {
          var s = document.createElement('script'), t = document.getElementsByTagName('script')[0];
          s.type = 'text/javascript';
          s.async = true;
          s.src = 'http://api.flattr.com/js/0.6/load.js?mode=auto';
          t.parentNode.insertBefore(s, t);
      })();
  /* ]]> */
  </script>
</head>

<body>
    <div id="wrapper">
        <div id="header">
            <a id="logo" href="<?php bloginfo('url'); ?>"></a>
            <div id="contact-icons">
                <a class="FlattrButton" style="display:none;" href="http://turpial.org.ve"></a>
                <noscript>
                  <a href="http://flattr.com/thing/452623/Turpial-Website" target="_blank">
                  <img src="http://api.flattr.com/button/flattr-badge-large.png" alt="Flattr this" title="Flattr this" border="0" /></a>
                </noscript>
                <a id="paypal-donate" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=3QDYV3JLXPQ7U"><img src="https://www.paypal.com/en_US/i/btn/x-click-but04.gif" alt="" /></a>
                <a id="rss-icon" href="http://turpial.org.ve/feed/" title="Feed RSS"></a>
                <a id="twitter-icon" href="http://twitter.com/turpialve" title="@turpialve"></a>
                <div class="clearbox"></div>
            </div>
        </div>

        <div class="container">
            <div id="navbar">
                <div id="menu">
                    <ul>
                        <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
                        <?php wp_list_pages('title_li=&depth=1'); ?>
                        <li><a href="http://wiki.turpial.org.ve">Wiki</a></li>
                    </ul>
                </div>
            </div>

        <!-- shadow needs to be closed in footer -->
    <!-- wrapper needs to be closed in footer -->
