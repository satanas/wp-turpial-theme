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
          <p>Turpial es un cliente para twitter e identi.ca escrito en python. Es ligero, funcional y no da&ntilde;a la capa de ozono.</p>
          <a id="download-button" href="downloads/">versi&oacute;n 1.5</a>
        </div>
        <div class="clearbox"></div>
      </div> 
      <div id="features">
        <div class="feature">
          <img alt="Amplia funcionalidad" width="60" src="<?php bloginfo('template_directory'); ?>/images/functionality.png" />
          <div class="feature-text">
            <h2>Amplia funcionalidad</h2>
            <p>A pesar de ser un cliente ligero tiene soporte para respuestas, retweets, menciones, mensajes directos, favoritos, entre otras.</p>
          </div>
        </div>
        <div class="feature">
          <img alt="Subir im&aacute;genes y acortar urls" width="60" src="<?php bloginfo('template_directory'); ?>/images/images.png" />
          <div class="feature-text">
            <h2>Subir im&aacute;genes y acortar urls</h2>
            <p>Posee soporte para subir im&aacute;genes y acortar urls mediante distintos servicios</p>
          </div>
        </div>
        <div class="feature">
          <img alt="Amplia funcionalidad" width="60" src="<?php bloginfo('template_directory'); ?>/images/columns.png" />
          <div class="feature-text">
            <h2>Modo extendido</h2>
            <p>Puedes ajustar Turpial para que se muestre usando una interfaz de 3 columnas y así te enterarás de todo con un solo vistazo.</p>
          </div>
        </div>
        <span class="more"><a href="features/">conoce m&aacute;s...</a></span>
        <div class="clearbox"></div>
      </div>
      <div id="page">
        <div id="news">
          <div id="news-title">
            <img alt="news" src="<?php bloginfo('template_directory'); ?>/images/news.png" width="70" />
              <h2>Noticias</h2>
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
              <span class="post-more"><a href="<?php the_permalink(); ?>">(leer m&aacute;s)</a></span>
            </div>
              <?php endwhile; ?>
            <?php else : ?>
            <div class="post">
              <div class="post-head">
                <h2>No se encontraron posts</h2>
              </div>
            </div>
            <?php endif; ?>

            <span id="more-news"><a href="news/">Ir al blog</a></span>
          </div>
          <div id="buttons">
            <a href="faqs" class="button">
              <img alt="button-image" src="<?php bloginfo('template_directory'); ?>/images/help-icon.png" width="60" />
              <span class="button-title">Preguntas</span>
              <span class="button-text">¿Perdido? Lee las respuestas a las preguntas más frecuentes y sal de dudas</span>
            </a>
            <a href="http://dev.turpial.org.ve" class="button">
              <img alt="button-image" src="<?php bloginfo('template_directory'); ?>/images/develop-icon.png" width="60" />
              <span class="button-title">Desarrollo</span>
              <span class="button-text">Entérate de que manera puedes colaborar en el desarrollo proyecto</span>
            </a>
            <?php get_twitter_widget(); ?>
          </div>
          <div class="clearbox"></div>
        </div>
      </div>
      </div>
      <div class="push"></div>
    </div>
<?php get_footer(); ?>
