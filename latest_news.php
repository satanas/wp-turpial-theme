<div id="latest-news">
    <?php $my_query = new WP_Query('showposts=5'); ?>
    <?php if($my_query->have_posts()) : ?>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <div class="post">
            <div class="post-head">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <span class="metadata"><?php the_time('F j, Y'); ?></span>
            </div>
          <?php the_post_thumbnail(); ?>
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

    <span id="more-news"><a href="http://turpial.org.ve/news/">Go to blog</a></span>
</div>
