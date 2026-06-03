<?php
/*
* Template name: portfolio
*/
get_header("portfolio");
?>
<main class="w-full bg-white">
    <section class="page-paralex">
        <?php
        $image = get_field("portfolioimage");
        if ($image) {
        ?>
            <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="w-full">
        <?php
        }
        ?>
        <div class="pageparalextitle">
            <h1>
                <?= the_title() ?>
            </h1>
        </div>
    </section>
    <section  class="mt-8 mb-8">
        <div class="swiper Swiperproject">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <?php
                    $link = get_field("firstproject");
                    $post_url = get_permalink($link->ID);
                    ?>
                    <a href="<?= $post_url ?>">
                        <div class="card-over-parent">
                            <?php
                            $image = get_field("firstprojectimage");
                            ?>
                            <?php if ($image) {
                            ?>
                                <div class="card-main-image w-full">
                                    <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                                </div>
                            <?php
                            }
                            ?>
                            <div class="card-over">
                                <?php
                                $image = get_field("firstprojectlogo");
                                ?>
                                <?php if ($image) {
                                ?>
                                    <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                                <?php
                                }
                                ?>
                                <div class="w-full">
                                    <h2 class="text-center">
                                        <?= get_the_title($link->ID) ?>
                                    </h2>
                                    <div class="text-center">
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
                    ?>
                    <a href="<?= $post_url ?>">
                        <div class="card-over-parent">
                            <?php
                            $image = get_field("secondprojectimage");
                            ?>
                            <?php if ($image) {
                            ?>
                                <div class="card-main-image w-full">
                                    <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                                </div>
                            <?php
                            }
                            ?>
                            <div class="card-over">
                                <?php
                                $image = get_field("secondprojectlogo");
                                ?>
                                <?php if ($image) {
                                ?>
                                    <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                                <?php
                                }
                                ?>
                                <div class="w-full">
                                    <h2 class="text-center">
                                        <?= get_the_title($link->ID) ?>
                                    </h2>
                                    <div class="text-center">
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
                    ?>
                    <a href="<?= $post_url ?>">
                        <div class="card-over-parent">
                            <?php
                            $image = get_field("thirdprojectimage");
                            ?>
                            <?php if ($image) {
                            ?>
                                <div class="card-main-image w-full">
                                    <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                                </div>
                            <?php
                            }
                            ?>
                            <div class="card-over">
                                <?php
                                $image = get_field("thirdprojectlogo");
                                ?>
                                <?php if ($image) {
                                ?>
                                    <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                                <?php
                                }
                                ?>
                                <div class="w-full">
                                    <h2 class="text-center">
                                        <?= get_the_title($link->ID) ?>
                                    </h2>
                                    <div class="text-center">
                                        <?= get_the_excerpt($link->ID) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <section class="mt-8 mb-8">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/2 p-4">
                <?php
                $link = get_field("fourthproject");
                $post_url = get_permalink($link->ID);
                ?>
                <a href="<?= $post_url ?>">
                    <div class="card-over-parent">
                        <?php
                        $image = get_field("fourthprojectimage");
                        ?>
                        <?php if ($image) {
                        ?>
                            <div class="card-main-image w-full">
                                <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                            </div>
                        <?php
                        }
                        ?>
                        <div class="card-over">
                            <?php
                            $image = get_field("fourthprojectlogo");
                            ?>
                            <?php if ($image) {
                            ?>
                                <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                            <?php
                            }
                            ?>
                            <div class="w-full">
                                <h2 class="text-center">
                                    <?= get_the_title($link->ID) ?>
                                </h2>
                                <div class="text-center">
                                    <?= get_the_excerpt($link->ID) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full md:w-1/2 p-4">
                <?php
                $link = get_field("fifthproject");
                $post_url = get_permalink($link->ID);
                ?>
                <a href="<?= $post_url ?>">
                    <div class="card-over-parent">
                        <?php
                        $image = get_field("fifthprojectimage");
                        ?>
                        <?php if ($image) {
                        ?>
                            <div class="card-main-image w-full">
                                <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                            </div>
                        <?php
                        }
                        ?>
                        <div class="card-over">
                            <?php
                            $image = get_field("fifthprojectlogo");
                            ?>
                            <?php if ($image) {
                            ?>
                                <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                            <?php
                            }
                            ?>
                            <div class="w-full">
                                <h2 class="text-center">
                                    <?= get_the_title($link->ID) ?>
                                </h2>
                                <div class="text-center">
                                    <?= get_the_excerpt($link->ID) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>    
            </div>
        </div>
    </section>
</main>
<?php
get_footer("portfolio");
