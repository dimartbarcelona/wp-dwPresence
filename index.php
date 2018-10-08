<?php get_header() ?>
		<div id="main-content">
			<div class="max-width-content">
			<?php
			if ( have_posts() ) :
			    while ( have_posts() ) : 
			        the_post(); ?>
			        <div class="entrada">
			            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			                <div class="contenido">
			                    <?php the_content(); ?>
			                </div>
			        </div> <?php
			    endwhile; 
			endif; 
			?>
			</div>
		</div>
		<aside id="left-aside" class="main-aside">izquierda</aside>
		<aside id="right-aside" class="main-aside">derecha</aside>
<?php get_footer() ?>