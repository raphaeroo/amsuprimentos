<?php get_header (); ?>
<section id="topo-interno">
    <div class="container">
    <div class="col-12 text-right">
	<h1><?php the_title(); ?></h1>
    </div></div>
</section>
<section id="pag-interna">
    <div class="p-1em"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-12" style="text-align: justify;">
			    <img class="thumb-produtos" src="<?php the_post_thumbnail_url( 'large' ); ?>" style="height: auto; width: 45%; margin-right:5px; float: left;" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
			    
				        <?php 
                if ( have_posts() ) {
                	while ( have_posts() ) {
                		the_post(); 
                		    the_content();
                	} // end while
                } // end if
            ?>
            <div id="separador"></div>
            <div class="p-1em"></div>
            			<div class="col-md-12 col-sm-12 text-center" id="form-direito">
				<h2>Fale Conosco Agora Mesmo</h2>
				<p><?php echo do_shortcode('[contact-form-7 id="198" title="formulario-site"]');  ?></p>
			</div>
			<div id="separador"></div>
			<div class="p-1em"></div>
			<div class="text-center col-12">
			    <h4>Informações relacionadas a <b><?php the_title(); ?></b>:</h4>
			</div><div class="p-1em"></div>
			<div class="row">
			    
			<?php
            $args = array( 
                'post_type' => 'informacoes', 
                'posts_per_page' => 2, 
                'order' => 'asc', 
                'orderby' => 'rand' 
            );
                        
            $loop = new WP_Query( $args );
            $i = 0;
            
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
        
              <!-- Service 1 -->
              
              <div class="col-6">
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
        ?></div>
        	</div>
        	<div class="col-md-4 col-sm-12">
        		 <?php include('menu-seo.php'); ?>
        	</div>
        </div>
    </div>
    <div class="p-1em"></div>
</section>
<div class="container text-center">
<span class="autoral">O texto acima <b>"<?php the_title(); ?>"</b> é de direito reservado. Sua reprodução, parcial ou total, mesmo citando nossos links, é proibida sem a autorização do autor. Plágio é crime e está previsto no artigo 184 do Código Penal. - <a target="_blank" href="http://www.planalto.gov.br/Ccivil_03/Leis/L9610.htm">Lei n° 9.610-98 sobre os Direitos Autorais.</a></span></div>
<div class="p-1em"></div>
<?php get_footer(); ?>