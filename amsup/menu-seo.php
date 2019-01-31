  		<div class="card-seo text-center">
						<div class="card-header">
							Informações
						</div>
						<ul class="list-group list-group-flush">
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
            
  					
						
							<a href="<?php the_permalink(); ?>"><li class="list-group-item"><?php the_title(); ?></li></a>
							
							
							<?php
        $i ++;
                         if($i % 3 == 0) { 
                    echo '';
                   }
        
            endwhile; 
        ?>      </ul>
				</div>	