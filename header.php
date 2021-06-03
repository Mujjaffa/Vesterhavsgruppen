<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name')?></title>
	<link rel="stylesheet" href="https://use.typekit.net/ldx4csh.css">
	<link rel="stylesheet" href="https://use.typekit.net/kvu5wvp.css">
	<?php wp_head(); ?>
	</head>
	
<body <?php body_class(); ?>>

<div class="container">

	<!-- site header -->
	<header class="site-header">
		
		<img src="http://localhost:8888/wordpress/wp-content/uploads/2021/05/SPEJDER-LOGO-FAERDIG-brug-den-1.png">

<?php if (is_page()) { ?>

<?php }?>



<nav class="site-nav">

	<?php
	$arge = array(
		'theme_location' => 'primary'
	);

	?>


		<?php wp_nav_menu( $arge ); ?>
</nav>

	</header><!-- /site-header -->