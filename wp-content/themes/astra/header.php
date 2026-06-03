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
<html dir="rtl" lang="fa-IR">

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

            }
        </style>
    <?php
    }
    ?>

    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/bala.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/farzin.css">

    <?php wp_head(); ?>
    <!-- <?php // astra_head_bottom(); 
            ?> -->
</head>

<body <?php astra_schema_body(); ?> <?php body_class("relative bg-primary"); ?>>
    <header>
        <div class="mobile-menu">
            <div id="black"></div>
            <h1>
                <?php
                // ۱. بررسی اینکه آیا لوگویی تعریف شده است یا خیر
                if (has_custom_logo()) {

                    // ۲. دریافت اطلاعات لوگو (خروجی یک آرایه است)
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

                    // $logo[0] شامل آدرس URL تصویر است
                    // $logo[1] شامل عرض تصویر است
                    // $logo[2] شامل ارتفاع تصویر است

                    if ($logo) {
                ?>
                        <div class="site-logo">
                            <a href="<?php echo esc_url(home_url('/')); ?>">
                                <img src="<?php echo esc_url($logo[0]); ?>"
                                    width="<?php echo esc_attr($logo[1]); ?>"
                                    height="<?php echo esc_attr($logo[2]); ?>"
                                    alt="<?php bloginfo('name'); ?>">
                            </a>
                        </div>
                <?php
                    }
                }
                ?>
            </h1>

            <div class="menu-patent">
                <div class="menu btn7" data-menu="7">
                    <div class="icon-E"></div>
                    <div class="icon-X"></div>
                </div>
            </div>
        </div>
        <div class="desktop-menu">
            <div class="flex flex-col md:flex-row gap-4 items-center">
                <div class="menu-patent">
                    <div class="menu btn7" data-menu="7">
                        <div class="icon-E"></div>
                        <div class="icon-X"></div>
                    </div>
                </div>
                <div class="flex items-center">
                    <?php
                    if (is_front_page()) {
                        // Default homepage
                    ?>
                        <h1 class="hidden md:block site-logo">
                        <?php
                    }
                        ?>
                        <?php
                        // ۱. بررسی اینکه آیا لوگویی تعریف شده است یا خیر
                        if (has_custom_logo()) {

                            // ۲. دریافت اطلاعات لوگو (خروجی یک آرایه است)
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

                            // $logo[0] شامل آدرس URL تصویر است
                            // $logo[1] شامل عرض تصویر است
                            // $logo[2] شامل ارتفاع تصویر است

                            if ($logo) {
                        ?>

                                <a href="<?php echo esc_url(home_url('/')); ?>">
                                    <img src="<?php echo esc_url($logo[0]); ?>"
                                        width="<?php echo esc_attr($logo[1]); ?>"
                                        height="<?php echo esc_attr($logo[2]); ?>"
                                        alt="<?php bloginfo('name'); ?>">
                                </a>


                        <?php
                            }
                        }
                        ?>
                        <?php
                        if (is_front_page()) {
                            // Default homepage
                        ?>
                        </h1>
                    <?php
                        }
                    ?>
                    <?php
                    $args = array(
                        'container' => false,
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul class="primary">%3$s</ul>',
                    );
                    wp_nav_menu($args);
                    ?>
                </div>
            </div>
            <div class="w-10/100 md:w-54/100 lg:w-35/100 xl:w-20/100 2xl:w-12/100">
                <a href="#" class="btn header-btn">
                    مشاوره رایگان
                </a>
            </div>

        </div>
    </header>