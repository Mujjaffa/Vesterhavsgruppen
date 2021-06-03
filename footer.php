<footer class="site-footer">

	<nav class="site-nav">
		<?php
		$arge = array(
		'theme_location' => 'footer'
		);

		?>

		<?php wp_nav_menu( $arge ); ?>
	</nav>

	<p class="footer-text"> <?php bloginfo('name'); ?> - &copy; <?php echo date('Y') ?></p>

	</footer>

</div> <!-- container -->

<?php wp_footer(); ?>


</body>
</html>