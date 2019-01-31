 <?php
/* Template Name: pagina-produtos */
 ?>
<?php get_header(); ?>
<div id="separador"></div>
<section id="pag-interna">
<div class="container">
    <div class="col-12 text-center">
        <h1>Conheça Nossos Produtos</h1>
    </div>
    <div class="p-1em"></div>
    <div class="row text-center bt-cat">
        <div class="col">
            <a href="<?php echo site_url(); ?>/acessorios-para-crachas/"><button class="bto-cat">Acessórios para Crachás</button></a>
        </div>
        <div class="col">
            <a href="<?php echo site_url(); ?>/cartoes-pvc/"><button class="bto-cat">Cartões PVC</button></a>
        </div>
        <div class="col">
            <a href="<?php echo site_url(); ?>/impressoras-de-crachas/"><button class="bto-cat">Impressoras de Crachás</button></a>
        </div>
        <div class="col">
           <a href="<?php echo site_url(); ?>/maquinas-crachas/"> <button class="bto-cat">Máquinas / Crachás</button></a>
        </div>
        <div class="col">
            <a href="<?php echo site_url(); ?>/materia-prima/"><button class="bto-cat">Matérias Primas</button></a>
        </div>
        <div class="col">
            <a href="<?php echo site_url(); ?>/ribbons/"><button class="bto-cat">Ribbons</button></a>
        </div>
        <div class="col">
           <a href="<?php echo site_url(); ?>/suprimentos-para-impressoras/"> <button class="bto-cat">Suprimentos para Impressoras</button></a>
        </div>
    </div>  
    <div class="p-1em"></div>
<div class="row"> 
     
      <?php
            $args = array( 
                'post_type' => 'produtos', 
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
    <div class="p-1em"></div>
</section>
<?php get_footer(); ?>

