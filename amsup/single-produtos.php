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
			<div class="col-md-8 col-sm-12">
				        <?php 
                if ( have_posts() ) {
                	while ( have_posts() ) {
                		the_post(); 
                		    the_content();
                	} // end while
                } // end if
            ?>
            <div class="p-1em"></div>
            			<div class="col-md-12 col-sm-12 text-center" id="form-direito">
				<h2>Faça um Orçamento</h2>
				<p><?php echo do_shortcode('[contact-form-7 id="198" title="formulario-site"]');  ?></p>
			</div>
        	</div>
        	<div class="col-md-4 col-sm-12">
        		<img class="thumb-produtos" src="<?php the_post_thumbnail_url( 'large' ); ?>" style="height: auto; width: 100%;" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" /> 
        	</div>
        </div>
    </div>
    <div class="p-1em"></div>
</section>

<?php get_footer(); ?>