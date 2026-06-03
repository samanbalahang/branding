<?php
/*
* Template name: branding-old
*/
get_header();
?>
<main class="w-full">
    <section class="hidden md:block first-sliders w-full relative main-section">
        <!-- Swiper -->
        <div class="swiper mySwipera">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="w-full overflow-hidden relative">
                        <?php
                        $image = get_field("oneslider");
                        ?>
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                        <div class="absolute w-full h-full flex flex-wrap items-center  justify-startz-10 top-0 left-0">
                            <div class="w-1/2 md:w-1/2 flex flex-col md:ps-40 items-start justify-center h-full">
                                <?= the_field("sliderfirsttext") ?>
                                <?php
                                $link = get_field("sliderfirstbtn");
                                $post_url = get_permalink($link->ID);
                                ?>
                                <a href="<?= get_permalink($link->ID) ?>" class="btn slider-btn">
                                    <?= get_the_title($link->ID) ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-full overflow-hidden relative">
                        <?php
                        $image = get_field("secondslider");
                        ?>
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                        <div class="absolute w-full h-full flex flex-wrap items-center  justify-start z-10 top-0 left-0">
                            <div class="w-1/2 md:w-1/2 flex flex-col md:ps-40 items-start justify-center h-full">
                                <?= the_field("slidersecondtext") ?>
                                <?php
                                $link = get_field("slidersecondbtn");
                                $post_url = get_permalink($link->ID);
                                ?>
                                <a href="<?= get_permalink($link->ID) ?>" class="btn slider-btn">
                                    <?= get_the_title($link->ID) ?>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-full overflow-hidden relative">
                        <?php
                        $image = get_field("thirdslider");
                        ?>
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                        <div class="absolute w-full h-full flex flex-wrap items-center justify-start z-10 top-0 left-0 ">
                            <div class="w-1/2 md:w-1/2 flex flex-col md:ps-40 items-start justify-center h-full">
                                <?= the_field("sliderthirdtext") ?>
                                <?php
                                $link = get_field("sliderthirdbtn");
                                $post_url = get_permalink($link->ID);
                                ?>
                                <a href="<?= get_permalink($link->ID) ?>" class="btn slider-btn">
                                    <?= get_the_title($link->ID) ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-full overflow-hidden relative">
                        <?php
                        $image = get_field("fourslider");
                        ?>
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                        <div class="absolute w-full h-full flex flex-wrap items-center justify-start z-10 top-0 left-0 ">
                            <div class="w-1/2 md:w-1/2 flex flex-col md:ps-40 items-start justify-center h-full">
                                <?= the_field("sliderfourthtext") ?>
                                <?php
                                $link = get_field("sliderfourthbtn");
                                $post_url = get_permalink($link->ID);
                                ?>
                                <a href="<?= get_permalink($link->ID) ?>" class="btn slider-btn">
                                    <?= get_the_title($link->ID) ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-full overflow-hidden relative">
                        <?php
                        $image = get_field("fiveslider");
                        ?>
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                        <div class="absolute w-full h-full flex flex-wrap items-center justify-end z-10 top-0 left-0 ">
                            <div class="w-1/2 md:w-1/2 flex flex-col md:ps-40 items-start justify-center h-full">
                                <?= the_field("sliderfifthtext") ?>
                                <?php
                                $link = get_field("sliderfifthbtn");
                                $post_url = get_permalink($link->ID);
                                ?>
                                <a href="<?= get_permalink($link->ID) ?>" class="btn slider-btn">
                                    <?= get_the_title($link->ID) ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-full overflow-hidden relative">
                        <?php
                        $image = get_field("sixslider");
                        ?>
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                        <div class="absolute w-full h-full flex flex-wrap items-center justify-end z-10 top-0 left-0 ">
                            <div class="w-1/2 md:w-1/2 flex flex-col md:ps-40 items-start justify-center h-full">
                                <?= the_field("slidersixthtext") ?>
                                <?php
                                $link = get_field("slidersixthbtn");
                                $post_url = get_permalink($link->ID);
                                ?>
                                <a href="<?= get_permalink($link->ID) ?>" class="btn slider-btn">
                                    <?= get_the_title($link->ID) ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-full overflow-hidden relative">
                        <?php
                        $image = get_field("sevenslider");
                        ?>
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                        <div class="absolute w-full h-full flex flex-wrap items-center justify-end z-10 top-0 left-0 ">
                            <div class="w-1/2 md:w-1/2 flex flex-col md:ps-40 items-start justify-center h-full">
                                <?= the_field("sliderthirdtext") ?>
                                <?php
                                $link = get_field("sliderthirdbtn");
                                $post_url = get_permalink($link->ID);
                                ?>
                                <a href="<?= get_permalink($link->ID) ?>" class="btn slider-btn">
                                    <?= get_the_title($link->ID) ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>

        </div>
        <div class="scroll-down-mouse">
            <img src="<?= get_template_directory_uri() ?>/assets/images/scroll down.svg" alt="scroll down.sv" class="w-full">
        </div>
    </section>
    <!-- mobile main swiper -->
    <section class="block md:hidden first-sliders w-full">
        <!-- Swiper -->
        <div class="swiper mySwipera">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="w-full overflow-hidden">
                        <?php
                        $image = get_field("mobileoneslider");
                        ?>
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-full overflow-hidden">
                        <?php
                        $image = get_field("mobilesecondslider");
                        ?>
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-full overflow-hidden">
                        <?php
                        $image = get_field("mobilethirdslider");
                        ?>
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full mb-8 bg-semi-dark">
        <div class="w-full md:w-80/100 mx-auto">
            <div class="flex flex-wrap">
                <h2 class="p-4 w-20/100">
                    <?= the_field("kartibehnajibranding") ?>
                </h2>
                <div class="p-4 w-80/100">
                    <?= the_field("brandingtextbase") ?>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full md:w-80/100 mx-auto my-8">
        <h2>
            <?= the_field("secondheading") ?>
        </h2>
        <div class="flex flex-wrap">
            <div class="w-full md:w-10/100 p-4">
                <?php
                $image = get_field("secondpartimg");
                ?>
                <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
            </div>
            <div class="w-full md:w-90/100 p-4">
                <?= the_field("secondparttext") ?>
            </div>
        </div>
        <div class="flex justify-end">
            <?php
            $link = get_field("secondpartbtnone");
            $post_url = get_permalink($link->ID);
            ?>
            <a href="<?= get_permalink($link->ID) ?>" class="secondpart-btn">
                <?= get_the_title($link->ID) ?>
                <?= get_the_excerpt($link->ID) ?>
            </a>
        </div>
    </section>

    <section class="paralex">
        <h2>
            <?= the_field("paralextitr") ?>
        </h2>
        <div class="swiper servicesSwiper mt-8">
            <div class="swiper-wrapper">
                <?php
                $args_random = array(
                    'post_type'      => 'post',
                    'post_status'    => 'publish',
                    'tax_query'      => array(
                        array(
                            'taxonomy' => 'category',
                            'field'    => 'slug',
                            'terms'    => 'services',
                        ),
                    ),
                    'posts_per_page' => 12,
                    'orderby'        => 'ASC'
                );
                $productsLoop = new WP_Query($args_random);
                if ($productsLoop->have_posts()) :
                    while ($productsLoop->have_posts()) : $productsLoop->the_post();
                        // --- Start Product HTML Output ---
                ?>
                    <div class="swiper-slide">
                        <a href="<?= get_permalink() ?>">
                            <div class="flex flex-col justify-center items-center">
                                <div class="rounded-full overflow-hidden">
                                    <?= the_post_thumbnail('small'); ?>
                                </div>
                                <h3 class="mt-2 tex-white">
                                    <?= get_the_title(); ?>
                                </h3>
                            </div>
                        </a>
                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </section>
    <section class="my-8 w-full projects">
        <div class="my-8 w-full md:w-80/100 mx-auto">
            <h2>
                <?= the_field("projecttitle") ?>
            </h2>
        </div>
        <div class="w-full relative">
            <div class="my-8 w-full md:w-80/100 mx-auto">
                <div class="swiper Swiperproject">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <?php
                            $link = get_field("firstproject");
                            $post_url = get_permalink($link->ID);
                            $url = get_the_post_thumbnail_url($link->ID, 'large');
                            ?>
                            <a href="<?= get_permalink($link->ID) ?>">
                                <div class="card-over-parent">
                                    <?php
                                    if ($url) {
                                    ?>
                                        <img src="<?= esc_url($url) ?>" alt="<?= esc_attr(get_the_title()); ?>" loading="lazy">
                                    <?php
                                    }
                                    ?>
                                    <div class="card-over">
                                        <img src="<?= get_template_directory_uri() ?>/assets/images/projects/project-01.png" alt="project">
                                        <div class="w-full">
                                            <h2>
                                                <?= get_the_title($link->ID) ?>
                                            </h2>
                                            <div>
                                                <?= get_the_excerpt($link->ID) ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </a>
                        </div>
                        <div class="swiper-slide">
                            <?php
                            $link = get_field("secondproject");
                            $post_url = get_permalink($link->ID);
                            $url = get_the_post_thumbnail_url($link->ID, 'large');
                            ?>
                            <a href="<?= get_permalink($link->ID) ?>">
                                <div class="card-over-parent">
                                    <?php
                                    if ($url) {
                                    ?>
                                        <img src="<?= esc_url($url) ?>" alt="<?= esc_attr(get_the_title()); ?>" loading="lazy">
                                    <?php
                                    }
                                    ?>
                                    <div class="card-over">
                                        <img src="<?= get_template_directory_uri() ?>/assets/images/projects/project-02.png" alt="project">
                                        <div class="w-full">
                                            <h2>
                                                <?= get_the_title($link->ID) ?>
                                            </h2>
                                            <div>
                                                <?= get_the_excerpt($link->ID) ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <?php
                            $link = get_field("thirdproject");
                            $post_url = get_permalink($link->ID);
                            $url = get_the_post_thumbnail_url($link->ID, 'large');
                            ?>
                            <a href="<?= get_permalink($link->ID) ?>">
                                <div class="card-over-parent">
                                    <?php
                                    if ($url) {
                                    ?>
                                        <img src="<?= esc_url($url) ?>" alt="<?= esc_attr(get_the_title()); ?>" loading="lazy">
                                    <?php
                                    }
                                    ?>
                                    <div class="card-over">
                                        <img src="<?= get_template_directory_uri() ?>/assets/images/projects/project-03.png" alt="project">
                                        <div class="w-full">
                                            <h2>
                                                <?= get_the_title($link->ID) ?>
                                            </h2>
                                            <div>
                                                <?= get_the_excerpt($link->ID) ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <?php
                            $link = get_field("forthproject");
                            $post_url = get_permalink($link->ID);
                            $url = get_the_post_thumbnail_url($link->ID, 'large');
                            ?>
                            <a href="<?= get_permalink($link->ID) ?>">
                                <div class="card-over-parent">
                                    <?php
                                    if ($url) {
                                    ?>
                                        <img src="<?= esc_url($url) ?>" alt="<?= esc_attr(get_the_title()); ?>" loading="lazy">
                                    <?php
                                    }
                                    ?>
                                    <div class="card-over">
                                        <img src="<?= get_template_directory_uri() ?>/assets/images/projects/project-04.png" alt="project">
                                        <div class="w-full">
                                            <h2>
                                                <?= get_the_title($link->ID) ?>
                                            </h2>
                                            <div>
                                                <?= get_the_excerpt($link->ID) ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <section class="w-full md:w-80/100 mx-auto my-8 affiliate">
        <h2 class="mb-8!">
            <?= the_field("affiliateheading") ?>
        </h2>
        <div class="flex flex-wrap">
            <?php
            $args = array(
                'post_type' => 'costomerbrandlogos',
                'order' => 'desc',
                'posts_per_page' => -1
            );
            $productsLoop = new WP_Query($args);
            if ($productsLoop->have_posts()) {
                global $post;
                while ($productsLoop->have_posts()) : $productsLoop->the_post();
            ?>
                    <div class="w-1/3 md:w-1/7 p-4">
                        <div class="bg-white">
                            <a href="<?= get_permalink() ?>">
                                <?= the_post_thumbnail('medium'); ?>
                            </a>
                        </div>
                    </div>
            <?php
                    wp_reset_postdata();
                endwhile;
            }
            ?>
        </div>
    </section>
    <section class="mt-8! w-full bg-semi-dark">
        <div class="w-full md:w-80/100 mx-auto">
            <div class="flex justify-between items-center">
                <h2>
                    <?= the_field("newstitle")   ?>
                </h2>
                <div class="flex items-center gap-4">
                    <?= the_field("phonenumber") ?>
                    <?php
                    $image = get_field("phone");
                    ?>
                    <?php if ($image) {
                    ?>
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

</main>
<?php
get_footer();
