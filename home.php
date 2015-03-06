<?php
/*
Template Name: Home
*/
get_header();

get_template_part('partials/home', 'footer');
?>
		<div class="parallax-container">
			<img class="parallax" src="<?php echo get_template_directory_uri(); ?>/images/shirts.jpg">
		</div>

<?php get_footer(); ?>