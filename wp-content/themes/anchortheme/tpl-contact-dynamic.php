<?php
/*
Template Name: Contact - Dynamic
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row">
			
				    <div id="main" class="large-12 medium-12 columns" role="main">
					
						<?php get_template_part( 'parts/loop', 'page' ); ?>

						<?php get_template_part( 'parts/multi', 'locations' ); ?>

						<div class="row">
							<?php the_field('form_shortcode'); ?>
						</div>
					    					
    				</div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
