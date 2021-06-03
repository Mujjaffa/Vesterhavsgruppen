<?php

get_header();

?>

<?php if(get_field("cover-image")): ?>
	<img src="<?php the_field("cover-image") ?>" alt="cover-image" class="cover-image">
<?php endif; ?>

<?php
if(have_posts()):
	while(have_posts()): the_post(); ?>




<article class="post page">
	<?php if(!is_front_page()): ?>
		<h2><?php the_title(); ?></h2>
	<?php endif; ?>
	<?php the_content(); ?>
</article>

	<?php endwhile;

	else: 
		echo '<p>No content found</p>';
		
	endif;

	get_footer();

	?>
