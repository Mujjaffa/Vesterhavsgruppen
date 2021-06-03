<?php

get_header();

if(have_posts()):
	while(have_posts()): the_post(); ?>

<video autoplay muted loop class="video">
    <source src="<?php echo get_stylesheet_directory_uri(); ?>/videos/Summer_Forest.mp4" type="video/mp4">
</video>



<?php echo do_shortcode('[visual_portfolio id="49"]'); ?>


<?php echo do_shortcode('[wpgmza id="1"]'); ?>

	<?php endwhile;

	else: 
		echo '<p>No content found</p>';
		
	endif;


	get_footer();

	?>




	
