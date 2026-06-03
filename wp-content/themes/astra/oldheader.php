<?php

/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
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
<!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>

<head>
	<?php astra_head_top(); ?>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
	if (apply_filters('astra_header_profile_gmpg_link', true)) {
	?>
		<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php
	}
	?>
	<?php
	if (is_front_page()) {
		// Default homepage
	?>
		<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/swiper-bundle.min.css">
		<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/animate.min.css">
		<?php
		$image = get_field("paralexbackground");
		?>
		<style>
			.paralex {
				background: url(<?= $image['url'] ?>);
				background-size: cover;
				background-attachment: fixed;
				min-height: 20rem;
				display: flex;
				flex-direction: column;
				align-items: center;
				justify-content: center;
			}
		</style>
	<?php
	}
	?>

	<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/bala.css">

	<?php wp_head(); ?>
	<!-- <?php // astra_head_bottom(); 
			?> -->
</head>

<body <?php astra_schema_body(); ?> <?php body_class("relative"); ?>>
	<header>
		<div class="mobile-menu">
			<div id="black"></div>
			<a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="block w-20/100" id="headerLogoling">
				<img src="<?= get_site_icon_url() ?>" alt="<?= get_bloginfo('name') ?>" class="w-full">
			</a>
			<div class="menu-patent">
				<div class="menu btn7" data-menu="7">
					<div class="icon-E"></div>
					<div class="icon-X"></div>
				</div>
			</div>
		</div>
		<div class="desktop-menu">
			<div class="flex gap-4 items-center">
				<a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="hidden md:block w-5/100">
					<img src="<?= get_site_icon_url() ?>" alt="<?= get_bloginfo('name') ?>" class="w-full">
				</a>
				<?php
				$args = array(
					'container' => false,
					'theme_location' => 'primary',
					'items_wrap' => '<ul class="primary">%3$s</ul>',
				);
				wp_nav_menu($args);
				?>
			</div>
			<a href="#" class="header-btn">
				یک کلیک تا برند شدن
			</a>

		</div>
	</header>