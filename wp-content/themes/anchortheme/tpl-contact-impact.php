<?php
/*
Template Name: Contact - Impact
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row">
			
				    <div id="main" class="large-12 medium-12 columns" role="main">
					
						<?php get_template_part( 'parts/loop', 'page' ); ?>

						<div class="row">
							<div class="small-12 medium-6 large-4 column">
								<ul>
									<li>Phone: 520-123-4567</li>
									<li>Address: 1234 West Street</li>
									<li>Email: <a href="mailto:info@domain.com">info@domain.com</a></li>
								</ul>
							</div>
							<div class="small-12 medium-6 large-8 column">
								<?php the_field('form_shortcode'); ?>
							</div>
						</div> 

						<?php the_field('map_code'); ?>
					    					
    				</div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
