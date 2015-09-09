<?php 
/**
 * Template Name: Kitchen Sink
 */
?>
<?php get_header(); ?>
<style>

pre {
width: auto;
max-width: 100%;
overflow-x: scroll;
display: block;
white-space: pre-wrap;
background: #eee;
padding: 10px;
border: 1px solid #aaa;
margin-bottom: 0;
}
.elements-main-title {
font-size: 30px;
margin: 60px 0 40px;
}
.elements-title {
position: relative;
font-size: 24px;
margin: 50px 0 30px;
border-bottom: 1px solid #ddd;
}
.elements-title a {
font-size: 18px;
padding: 0 12px;
visibility: hidden;
color: black;
}
.elements-title:hover a {
visibility: visible;
}
.pre-caption {
	color: #555;
	text-align: center;
	font-style: italic;
	background: #ddd;
}

</style>
<?php $avatars = array(
	"http://api.adorable.io/avatars/285/1","http://api.adorable.io/avatars/285/2"
); ?>
			<div id="content">
			
				<div id="inner-content" class="row">
			
				    <div id="main" class="<?php super_grid(0,8,8,'kitchen-sink'); ?>" role="main">
				    	
						<section class="members-slider">

							<h3 class="elements-title">Slick Slideshow</h3>

							<p>Below is an example of slick slideshow.</p>
							<p>Slick can be instantiated on an element by including the <code>data-slick</code> attribute.</p>
							<h3>Markup</h3>
<pre>
&lt;div data-slick&gt;
	&lt;div&gt;...&lt;/div&gt;
&lt;/div&gt;</pre>
							<div class="pre-caption">The most basic way to use slick.</div>
							<h3>Output</h3>
							<div class="panel">
								<div data-slick>
									<?php foreach ($avatars as $value) { ?>
										<div class="slide">
											<img src="<?php echo $value; ?>" class="aligncenter" alt="">
										</div>
									<?php } ?>
								</div>
							</div>
							<p>Various other data attributes on the element can be used to set various options. Below you can see the markup for the slick container with all it's available options (default values are shown).</p>
							<h3>Markup</h3>
							<pre>
&lt;div data-slick data-slickaccessibility="true" data-slickadaptiveheight="false" data-slickautoplay="false" data-slickautoplayspeed="3000" data-slickarrows="true" data-slickasnavfor="" data-slickappendarrows="this" data-slickprevarrow="&lt;button type=\'button\'' class=\'slick-prev\'>Previous&lt;/button>" data-slicknextarrow="&lt;button type=\'button\' class=\'slick-next\'>Next&lt;/button>" data-slickcentermode="false" data-slickcenterpadding="50px" data-slickcssease="ease" data-slickcustompaging="" data-slickdots="false" data-slickdraggable="true" data-slickfade="false" data-slickfocusonselect="false" data-slickeasing="linear" data-slickedgefriction="0.15" data-slickinfinite="true" data-slickinitialslide="0" data-slicklazyload="ondemand" data-slickmobilefirst="false" data-slickpauseonhover="true" data-slickpauseondotshover="false" data-slickrespondto="window" data-slickresponsive="{}" data-slickrows="1" data-slickslide="" data-slickslidesperrow="1" data-slickslidestoshow="1" data-slickslidestoscroll="1" data-slickspeed="300" data-slickswipe="true" data-slickswipetoslide="false" data-slicktouchmove="true" data-slicktouchthreshold="5" data-slickusecss="true" data-slickvariablewidth="false" data-slickvertical="false" data-slickverticalswiping="false" data-slickrtl="false">

	... (slides)

&lt;/div></pre>
<div class="pre-caption">Slick with all available options and their defaults.</div>
							<h3>Output</h3>
							<style>
								[data-slick]:hover .slick-prev:before, [data-slick]:hover .slick-next:before {
									color: #333;
								}
								[data-slick] .slick-prev:before, [data-slick] .slick-next:before {
									color: whitesmoke;
								}
							</style>
							<div class="panel">
								<div data-slick data-slickaccessibility="true" data-slickadaptiveheight="false" data-slickautoplay="false" data-slickautoplayspeed="3000" data-slickarrows="true" data-slickasnavfor="" data-slickappendarrows="this" data-slickprevarrow="<button type=\'button\'' class=\'slick-prev\'>Previous</button>" data-slicknextarrow="<button type=\'button\' class=\'slick-next\'>Next</button>" data-slickcentermode="false" data-slickcenterpadding="50px" data-slickcssease="ease" data-slickcustompaging="" data-slickdots="false" data-slickdraggable="true" data-slickfade="false" data-slickfocusonselect="false" data-slickeasing="linear" data-slickedgefriction="0.15" data-slickinfinite="true" data-slickinitialslide="0" data-slicklazyload="ondemand" data-slickmobilefirst="false" data-slickpauseonhover="true" data-slickpauseondotshover="false" data-slickrespondto="window" data-slickresponsive="{}" data-slickrows="1" data-slickslide="" data-slickslidesperrow="1" data-slickslidestoshow="1" data-slickslidestoscroll="1" data-slickspeed="300" data-slickswipe="true" data-slickswipetoslide="false" data-slicktouchmove="true" data-slicktouchthreshold="5" data-slickusecss="true" data-slickvariablewidth="false" data-slickvertical="false" data-slickverticalswiping="false" data-slickrtl="false">
								
									<?php foreach ($avatars as $value) { ?>
										<div class="slide">
											<img src="<?php echo $value; ?>" class="aligncenter" alt="">
										</div>
									<?php } ?>
								</div>
							</div>
							<p>Slick can also be instantiated normally with JavaScript, just don't include the <code>data-slick</code> attribute.</p>
							<p class="info alert-box">Note: These options need testing, please revise sripts.js if there are any issues.</p>
							<p class="info alert-box">Pro Tip: each setting is the "data-slick" followed immediately by the setting name in lower case. Excluding data elements will revert to the default setting for that option.</p>

						</section>
						<section>
								
					    	<h3 class="elements-title">Horizontal Timeline</h3>
					    	<p>Timeline uses two slick slideshows in sync to display dates and respective data.</p>
							<p>In this example <code>.slick-current</code> has been styled to underline the seleted year on the first slideshow.</p>
							<div class="timeline">
								<style>
								.years-select-slider .slick-current {
									border-bottom: 3px solid #aaa;
								}
								</style>
								<ul class="years-select-slider" data-slick data-slickasnavfor=".years-details-slider" data-slickslidestoshow="10" data-slickarrows='false' data-slickslidestoscroll="5" data-slickarrows=true data-slickdraggable="true" data-slickinfinite="false" data-slickfocusonselect="true">
									<?php $years = array( "1999","2000","2001","2002","2003","2004","2005","2006","2007","2008","2009","2010","2011","2012","2013", ); ?>
									<?php foreach ($years as $year) { ?>
										<li class="text-center">
											<a href="#tab-year-<?php echo $year; ?>"><?php echo $year; ?></a>
										</li>
									<?php } ?>
								</ul>
								<div class="years-details-slider" data-slick data-slickasnavfor=".years-select-slider" data-slickinfinite=false>
									<?php foreach ($years as $year) { ?>
										<div class="panel">
											<h5>More about the year <?php echo $year; ?></h5>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos blanditiis, autem nesciunt, molestias ratione quasi mollitia illum eligendi ullam dolorum veritatis nostrum minus id necessitatibus non cum eius dolore! Repudiandae.</p>
										</div>
									<?php } ?>
								</div>
								<p class="alert-box alert">Potential Bug: It appears that <code>centerMode</code> must equal true if arrows are used. Otherwise arrows should be turned off because the slideshows have issues staying synced.</p>
							</div>
						</section>
								
				    </div> <!-- end #main -->

					<div class="sidebar <?php super_grid(0,4,4,"kitchen-sink"); ?>">
						<h2 style="margin: 50px 0 30px">Elements</h2>
						<nav class="elements-nav">
							<ul></ul>
						</nav>
					</div>
				    
				</div> <!-- end #inner-content -->
			    <?php function kitchen_sink_script(){ ?> 
					<script>
						jQuery(document).ready(function($){
							$('.elements-title').each(function(i){
								var $this = $(this);
								console.log($this);
								var content = $this.html();
								var id = content.replace(/\s/g, '').toLowerCase();
								$('nav.elements-nav ul').append($('<li><a href="#section-' + id + '">'+content+'</a></li>'))
								$this.append("<a href='#section-" + id + "' id='section-"+id+"' class='glyphicon glyphicon-link'></a>");
							})
						});
					</script>
				<?php } 
				add_action('wp_footer', 'kitchen_sink_script', 999); ?>

			</div> <!-- end #content -->

<?php get_footer(); ?>