<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

?>
<footer class="text-white">
	<div class="w-full md:w-80/100 mx-auto px-4">
		<div class="flex flex-wrap">
			<div class="w-full md:w-74/100">
				<div class="flex flex-wrap">
					<div class="w-full md:w-1/3">
						<?php if (is_active_sidebar("footer-widget-1")) : ?>
							<?php dynamic_sidebar("footer-widget-1"); ?>

						<?php endif; ?>
					</div>
					<div class="w-full md:w-1/3">
						<?php if (is_active_sidebar("footer-widget-2")) : ?>
							<?php dynamic_sidebar("footer-widget-2"); ?>

						<?php endif; ?>
					</div>
					<div class="w-full md:w-1/3">
						<?php if (is_active_sidebar("footer-widget-3")) : ?>
							<?php dynamic_sidebar("footer-widget-3"); ?>

						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="w-full md:w-26/100">

				<?php if (is_active_sidebar("footer-widget-4")) : ?>
					<?php dynamic_sidebar("footer-widget-4"); ?>

				<?php endif; ?>
				<div class="social flex justify-start w-1/2 mr-auto">
					<a href="#" class="mr-auto">
						<img src="<?= get_template_directory_uri() ?>/assets/images/screenshot.png" alt="screenshot.png">
					</a>
				</div>	

			</div>
		</div>
	</div>
	<hr class="footer-hr">
	<div class="copywrite">
		<?php if (is_active_sidebar("footer-widget-5")) : ?>
			<?php dynamic_sidebar("footer-widget-5"); ?>

		<?php endif; ?>
	</div>
</footer><?php wp_footer(); ?>
<a href="#" class="scrolltop force-hidden" id="scrolltop">
	<?xml version="1.0" encoding="UTF-8"?>
	<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.63 12.7">
	<defs>
		<style>
		.cls-1 {
			fill: #fff;
		}
		</style>
	</defs>
	<path class="cls-1" d="M10.33,2.93l8.25,9.38c.23.25.54.39.88.39h0c1.01,0,1.54-1.19.87-1.94L11.22.4c-.47-.53-1.29-.53-1.75,0L.29,10.71c-.66.75-.13,1.94.88,1.94h0c.33,0,.65-.14.88-.39L10.33,2.93Z"/>
	</svg>
</a>
<div id="ast-scroll-top"></div>
<?php
if (is_front_page()) {
	// Default homepage
?>
	<script src="<?= get_template_directory_uri() ?>/assets/js/swiper-bundle.min.js"></script>
	<script src="<?= get_template_directory_uri() ?>/assets/js/hang.js"></script>
<?php
} else {


?>
	<script src="<?= get_template_directory_uri() ?>/assets/js/bala.js"></script>
<?php
}
wp_footer();
?>
</body>

</html>