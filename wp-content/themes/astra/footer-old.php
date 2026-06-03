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
<a href="#" class="fixed bottom-10 left-5 bg-darkprim z-5 border border-white shadow-xl hidden" id="up">
	<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" class="fill-white"
		fill="#1f1f1f">
		<path d="M440-160v-487L216-423l-56-57 320-320 320 320-56 57-224-224v487h-80Z" />
	</svg>
</a>
<a href="#"
	class="fixed bottom-10 right-5 bg-darkprim z-5 border border-white shadow-xl w-15 h-15 rounded-full p-2 scroll-show" id="whatsapp">
	<svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-full h-full">
		<style>
			.s0 {
				fill: none;
				stroke: white;
				stroke-linecap: round;
				stroke-linejoin: round;
				stroke-width: 20
			}
		</style>
		<path class="s0"
			d="m363.39 118.99c-37.22-36.21-86.8-56.13-139.48-56.13-108.74 0-197.22 85.88-197.22 191.42 0 33.71 9.06 66.65 26.29 95.7l-27.98 99.16 104.56-26.64c28.79 15.26 61.21 23.28 94.26 23.28h0.09c108.65 0 199.09-85.88 199.09-191.42 0-51.13-22.39-99.16-59.61-135.37zm-49.57 175.38c-4.89-2.41-29.14-13.97-33.67-15.52-4.53-1.64-7.82-2.42-11.11 2.41-3.29 4.83-12.7 15.52-15.63 18.8-2.85 3.19-5.78 3.62-10.66 1.21-28.97-14.06-47.98-25.09-67.08-56.91-5.06-8.45 5.07-7.85 14.48-26.13 1.6-3.19 0.8-5.95-0.44-8.36-1.25-2.41-11.11-25.95-15.19-35.52-4-9.32-8.09-8.02-11.11-8.19-2.84-0.18-6.13-0.18-9.42-0.18-3.28 0-8.61 1.21-13.14 5.95-4.53 4.83-17.24 16.38-17.24 39.92 0 23.54 17.68 46.31 20.08 49.5 2.49 3.19 34.74 51.47 84.22 72.25 31.27 13.11 43.53 14.23 59.17 11.99 9.5-1.38 29.14-11.56 33.22-22.77 4.09-11.21 4.09-20.78 2.84-22.76-1.15-2.16-4.44-3.36-9.32-5.69z" />
	</svg>
</a>
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