<?php
/*
* Template name: projects details
*/
get_header("portfolio");
?>
<main class="w-full bg-white">
    <section>
        <div class="swiper Swiperportfolio">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="w-full relative">
                        <?php
                        $image = get_field("firstsliderimage");
                        ?>
                        <?php if ($image) {
                        ?>
                            <div class="card-main-image w-full">
                                <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="w-full">
                            </div>
                        <?php
                        }
                        ?>
                        <div class="w-full h-full absolute top-0 left-0 flex flex-col justify-center items-center project-slider-text">
                            <hgroup>
                                <h1>
                                    <?= the_title() ?>
                                </h1>
                                <h2>
                                    <?= the_field("fistsliderheading") ?>
                                </h2>
                            </hgroup>
                            <div>
                                <?= the_field("fistslidertext") ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-full relative">
                        <?php
                        $image = get_field("secondsliderimage");
                        ?>
                        <?php if ($image) {
                        ?>
                            <div class="card-main-image w-full">
                                <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="w-full">
                            </div>
                        <?php
                        }
                        ?>
                        <div class="w-full h-full absolute top-0 left-0 flex justify-center items-center flex-col project-slider-text">
                            <hgroup>
                                <h2>
                                    <?= the_field("secondsliderheading") ?>
                                </h2>
                            </hgroup>
                            <div>
                                <?= the_field("secondslidertext") ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <section class="mt-8 mb-8">
        <div class="flex flex-wrap">
            <div class="w-full md:w-60/100 p-4">
                <div class="table">
                    <div class="tablerow">
                        <div class="tabletd">
                            <?= the_field("tablefirstrowfirstcol") ?>
                        </div>
                        <div class="tabletd">
                            <?= the_field("tablefirstrowsecondcol") ?>
                        </div>
                    </div>
                    <div class="tablerow">
                        <div class="tabletd">
                            <?= the_field("tablesecondrowfirstcol") ?>
                        </div>
                        <div class="tabletd">
                            <?= the_field("tablesecondrowsecondcol") ?>
                        </div>
                    </div>
                    <div class="tablerow">
                        <div class="tabletd">
                            <?= the_field("tablethirdrowfirstcol") ?>
                        </div>
                        <div class="tabletd">
                            <?= the_field("tablesthirdrowsecondcol") ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-40/100 p-4">
                <?= the_field("fistprojectdetail") ?>
            </div>
        </div>
    </section>
    <section class="mt-8 mb-8">
        <div class="flex flex-wrap">
            <div class="w-full md:w-50/100 p-4">
                <div class="flex flex-wrap">
                    <div class="w-1/2">
                        <?= the_field("chalesh") ?>
                    </div>
                    <div class="w-1/2">
                        <?= the_field("chaleshtext") ?>
                    </div>
                    <div class="w-1/2">
                        <?= the_field("solution") ?>
                    </div>
                    <div class="w-1/2">
                        <?= the_field("solutiontext") ?>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-50/100 p-4">
                <?php
                $image = get_field("chaleshimg");
                ?>
                <?php if ($image) {
                ?>
                    <div class="w-full">
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="w-full">
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <section class="mt-8 mb-8">
        <div class="flex flex-wrap">
            <div class="w-full md:w-50/100 p-4">
                <?php
                $image = get_field("haselimg");
                ?>
                <?php if ($image) {
                ?>
                    <div class="w-full">
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="w-full">
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="w-full md:w-50/100 p-4">
                <?= the_field("haseltxt") ?>
            </div>

        </div>
    </section>
    <section class="mt-8 mb-8">
        <?php
        $image = get_field("middlefullimg");
        ?>
        <?php if ($image) {
        ?>
            <div class="w-full">
                <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="w-full">
            </div>
        <?php
        }
        ?>
    </section>
    <section class="mt-8 mb-8">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/2">
                <?php
                $image = get_field("undermiddelfullimg");
                ?>
                <?php if ($image) {
                ?>
                    <div class="w-full">
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="w-full">
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="w-full md:w-1/2">
                <?php
                $image = get_field("undermiddelfullimgb");
                ?>
                <?php if ($image) {
                ?>
                    <div class="w-full">
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="w-full">
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <section class="mt-8 mb-8">
        <div class="flex flex-wrap">
            <div class="w-full md:w-25/100">
                <?php
                $image = get_field("twentypercentimg");
                ?>
                <?php if ($image) {
                ?>
                    <div class="w-full">
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="w-full">
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="w-full md:w-75/100">
                <?php
                $image = get_field("seventypercentimg");
                ?>
                <?php if ($image) {
                ?>
                    <div class="w-full">
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="w-full">
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <section class="mt-8 mb-8">
        <?php
        $image = get_field("endfullimg");
        ?>
        <?php if ($image) {
        ?>
            <div class="w-full">
                <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="w-full">
            </div>
        <?php
        }
        ?>
    </section>
    <section class="mt-8 mb-8">
        <div class="flex justify-between">
            <?php
                $link = get_field("nextproject");
                $post_url = get_permalink($link->ID);
            ?>
            <a href="<?= get_permalink($link->ID) ?>" class="slider-btn">
               <?xml version="1.0" encoding="UTF-8"?>
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33.22 65.9">
                <path d="M29.22,65.9c1.91,0,3.89-1.72,3.9-4.62,0-1.28-.45-2.51-1.22-3.38l-22.34-24.98L31.98,8.01c.78-.87,1.23-2.1,1.24-3.38C33.22,1.74,31.25,0,29.34,0c-.97,0-1.91.44-2.63,1.25L1.24,29.52c-1.64,1.83-1.65,4.93-.01,6.76l25.37,28.36c.72.8,1.66,1.25,2.63,1.25h0Z"/>
                </svg>
            </a>
            <?php
                $link = get_field("prevproject");
                $post_url = get_permalink($link->ID);
            ?>
            <a href="<?= get_permalink($link->ID) ?>" class="slider-btn">
                <?xml version="1.0" encoding="UTF-8"?>
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33.17 65.9">
                    <path d="M3.89,0C1.98,0,0,1.73,0,4.63c0,1.28.45,2.51,1.23,3.38l22.38,24.94L1.23,57.89c-.78.87-1.23,2.1-1.23,3.38,0,2.9,1.98,4.63,3.89,4.63.97,0,1.91-.44,2.63-1.25l25.42-28.32c1.64-1.83,1.64-4.93,0-6.76L6.52,1.25c-.72-.8-1.66-1.25-2.63-1.25h0Z"/>
                </svg>
            </a>
        </div>
    </section>
</main>
<?php
get_footer("portfolio");
