<?php
/**
 * The template for displaying the footer.
 *
 * Contains the body & html closing tags.
 *
 * @package HelloElementor
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
	if ( hello_elementor_display_header_footer() ) {
		if ( did_action( 'elementor/loaded' ) && hello_header_footer_experiment_active() ) {
			get_template_part( 'template-parts/dynamic-footer' );
		} else {
			get_template_part( 'template-parts/footer' );
		}
	}
}
?>
<?php
if (is_front_page()) {
	// Default homepage
?>
	<script src="<?= get_template_directory_uri() ?>/assets/js/swiper-bundle.min.js"></script>
<?php
}
?>
<script src="<?= get_template_directory_uri() ?>/assets/js/hang.js"></script>
<?php wp_footer(); ?>

</body>
</html>
