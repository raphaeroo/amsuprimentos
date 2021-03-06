 <?php
/* Template Name: pagina-informacoes */
 ?>
<?php get_header(); ?>
<div id="separador"></div>
<section id="pag-interna">
<div class="container">
    <div class="col-12 text-center">
        <h1>Informações</h1>
    </div>
    <div class="p-1em"></div>
    <div class="row"> 
     
      <?php
            $args = array( 
                'post_type' => 'informacoes', 
                'posts_per_page' => 150, 
                'order' => 'asc', 
                'orderby' => 'date' 
            );
                        
            $loop = new WP_Query( $args );
            $i = 0;
            
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
        
              <!-- Service 1 -->
              <div class="col-md-4 col-sm-6">
                 <div class="div-prod text-center">
                <a href="<?php the_permalink(); ?>">
                    <div class="thumb-img">
                        <div class="img_produto" style="background:url(<?php the_post_thumbnail_url( 'large' ); ?>);height: 220px;width: 100%;background-size: contain;background-position: center;background-repeat: no-repeat;">
                        </div>
                    </div>
                </a>
                  <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                  <?php echo excerpt('10'); ?><br />
                  <div class="p-1em"></div>
                  <a class="bto-cat-prod" href="<?php the_permalink(); ?>">Saiba mais</a></div>
                  <div class="p-1em"></div>
              </div>
        
        <?php
        $i ++;
                         if($i % 3 == 0) { 
                    echo '<div class="p-1em"></div>';
                   }
        
            endwhile; 
        ?>

    </div>
</div>
</section>

<?php get_footer(); ?>