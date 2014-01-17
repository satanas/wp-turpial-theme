<div id="latest-news">
    <?php $my_query = new WP_Query('showposts=8'); ?>
    <?php if($my_query->have_posts()) : ?>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <div class="post-thumbnail">
            <div class="shadow">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <span>
                    <p><?php the_time('M d, Y'); ?></p>
                    <p><?php _e('By '); the_author(); ?></p>
                </span>
            </div>
            <?php the_post_thumbnail(); ?>
        </div>
        <?php endwhile; ?>
    <?php else : ?>
    <div class="post">
        <div class="post-head">
            <h2>We have no news for the moment. Please come back later</h2>
        </div>
    </div>
    <?php endif; ?>
    <div class="clearbox"></div>

    <div id="more-news"><a href="http://turpial.org.ve/news/">Read more...</a></div>
</div>
