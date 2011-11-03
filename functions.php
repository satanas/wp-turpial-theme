<?php
if ( function_exists('register_sidebar') )
    register_sidebar();

function get_nivoslider_script() {
  if (is_page('Home') || is_page('Características') ) {
    wp_enqueue_script("jquery");
    wp_enqueue_script('nivoslider', get_bloginfo('stylesheet_directory').'/scripts/jquery.nivo.slider.pack.js', 'jquery', '2.1');
    wp_enqueue_script('nivoslider-loader', get_bloginfo('stylesheet_directory').'/scripts/nivo.slider.load.js', 'nivoslider', '1.0');
  }
}

function get_lytebox_script() {
  if (is_page('Galería')) {
    wp_enqueue_script('lytebox', get_bloginfo('stylesheet_directory').'/scripts/lytebox.js', 'jquery', '2.1');
  }
}

function get_twitter_widget() {
?>
<script type="text/javascript" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script type="text/javascript">
new TWTR.Widget({
  version: 2,
  type: 'search',
  search: '#turpial',
  interval: 6000,
  title: 'Turpial en twitter',
  subject: '#turpial',
  width: 'auto',
  height: 300,
  theme: {
    shell: {
      background: '#009de0',
      color: '#ffffff'
    },
    tweets: {
      background: '#ffffff',
      color: '#444444',
      links: '#1985b5'
    }
  },
  features: {
    scrollbar: false,
    loop: true,
    live: true,
    hashtags: true,
    timestamp: true,
    avatars: true,
    toptweets: true,
    behavior: 'default'
  }
}).render().start();
</script>
<?php
}
?>
