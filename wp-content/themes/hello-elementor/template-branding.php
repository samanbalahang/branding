<?php
/*
* Template name: branding
*/
get_header();
?>
<main class="w-full">
    <section class="first-sliders w-full">
        <!-- Swiper -->
        <div class="swiper mySwipera">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="w-full rounded-xl overflow-hidden">
                        <?php
                        $image = get_field("oneslider");
                        ?>
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-full rounded-xl overflow-hidden">
                        <?php
                        $image = get_field("secondslider");
                        ?>
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-full rounded-xl overflow-hidden">
                        <?php
                        $image = get_field("thirdslider");
                        ?>
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section class="container mx-auto my-8">
        <h1>
            <?= the_field("kartibehnajibranding") ?>
        </h1>
        <div class="divider"></div>
        <?= the_field("brandingtextbase") ?>
        <div class="divider"></div>
    </section>
    <section class="container mx-auto my-8">
        <h2>
               <?= the_field("secondparttext") ?>
        </h2>
        <div class="flex flex-wrap">
            <div class="w-full md:w-10/100">
                <?php
                $image = get_field("secondpartimg");
                ?>
                <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
            </div>
            <div class="w-full md:w-90/100">
                <?= the_field("secondparttext") ?>
            </div>
        </div>
        <div class="flex justify-between">
         
            <?= the_field("secondpartbtnone") ?>
        </div>
    </section>
    <section class="w-full my-8">
        <div class="swiper brandsSwiper my-8">
            <div class="swiper-wrapper">
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
                        <div class="swiper-slide">
                            <div class="h-65">
                                <div class="bg-white">
                                    <a href="<?= get_permalink() ?>">
                                        <?= the_post_thumbnail('medium'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                <?php
                        wp_reset_postdata();
                    endwhile;
                }
                ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section class="paralex">
        <h2>
            <?= the_field("paralextitr") ?>
        </h2>
        <div class="flex flex-wrap">
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
                'posts_per_page' => 4,
                'orderby'        => 'ASC'
            );
            $productsLoop = new WP_Query($args_random);
            if ($productsLoop->have_posts()) :
                while ($productsLoop->have_posts()) : $productsLoop->the_post();
                    // --- Start Product HTML Output ---
            ?>
                    <a href="<?= get_permalink() ?>">
                        <div class="card over">
                            <div class="card-header">
                                <?= the_post_thumbnail('medium'); ?>
                            </div>
                            <div class="card-over">
                                <?= get_the_title(); ?>
                            </div>
                        </div>
                    </a>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </section>
</main>
<?php
get_footer();
