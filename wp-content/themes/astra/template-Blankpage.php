<?php
/*
* Template name: Blankpage
*/
get_header();
?>
<main class="w-full bg-white">
    <section class="page-paralex">
        <?php
        $image = get_field("pageparalex");
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
    <section class="w-full md:w-80/100 mx-auto my-4">
        <div class="flex flex-wrap">
            <div class="w-full md:w-70/100 p-4">
                <?php $text = get_field("blankpagetitletwo");
                if ($text) {
                ?>
                    <?= $text ?>

                <?php
                }

                ?>
                <?php $text = get_field("blankpagetexttwo");
                if ($text) {
                ?>
                    <?= $text ?>

                <?php
                }

                ?>

            </div>
            <div class="w-full md:w-30/100 p-4">
                <?php
                $image = get_field("blankpageimagetwo");
                if ($image) {
                ?>
                    <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="w-full">
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <section class="w-full px-6 my-4">
        <?php
        $image = get_field("blankpageimagefull");
        if ($image) {
        ?>
            <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="w-full">
        <?php
        }
        ?>
    </section>
    <section class="w-full md:w-80/100 mx-auto my-4">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/2 p-4">
                <?php
                $image = get_field("blankpageimagefifty");
                if ($image) {
                ?>
                    <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="w-full">
                <?php
                }
                ?>
            </div>
            <div class="w-full md:w-1/2 p-4">
                 <?php $text = get_field("blankpagetitlefifty");
                if ($text) {
                ?>
                    <?= $text ?>

                <?php
                }

                ?>
                 <?php $text = get_field("blankpagetextfifty");
                if ($text) {
                ?>
                    <?= $text ?>

                <?php
                }

                ?>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
