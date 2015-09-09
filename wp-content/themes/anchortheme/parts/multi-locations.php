<?php if( have_rows('locations') ): ?>
<?php while( have_rows('locations') ): the_row(); ?>
<?php 
	// vars
	$map = get_sub_field('map_code');
	$info = get_sub_field('location_info');
?>
<div class="small-12 medium-3 large-3 columns multi-location">
	<?php echo $map; ?>
	<?php echo $info; ?>
</div>
<?php endwhile; ?>
<?php endif; ?>