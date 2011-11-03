<?php get_header(); ?>
    <div id="content">
      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
        <div id="page-head">
              <h1><?php the_title(); ?></h1>
        </div>
        <div id="page">
            <?php the_content(); ?>
        </div>
        <?php endwhile; ?>
      <?php else : ?>
        <div id="page-head">
          <h2><?php _e('No se encontró la página'); ?></h2>
        </div>
        <div id="page">
          <p>No pudimos conseguir la p&aacute;gina que buscas.</p>                  
        </div>
    <?php endif; ?>
      </div>
      </div>
      <div class="push"></div>
    </div>
<?php get_footer(); ?>
