<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php get_template_part('head'); ?>

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
        <!-- End of header -->

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
            <!-- End of navbar -->

        <!-- shadow needs to be closed in footer -->
    <!-- wrapper needs to be closed in footer -->
