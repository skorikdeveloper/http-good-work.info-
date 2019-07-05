<?php
/*
Template Name: Партнеры
*/
get_header();
global $post;
$post_id = $post->ID;
the_post();
?>

    <div id="partners-page">

        <div class="first-block__country">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <a href="/" class="logo">
                            <img src="<?= get_template_directory_uri().'/img/main-logo.png'?>" alt="Good Work">
                        </a>
                        <h1 class="first_block_header">
                            <?= carbon_get_post_meta( $post_id, 'first_block_header')?>
                        </h1>
                    </div>

                </div>
            </div>
            <img src="<?=get_template_directory_uri()?>/img/partners-bg.png" alt="Good Work" class="img-wrapper">
        </div>

        <div class="red-line">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2><?= carbon_get_post_meta( $post_id, 'red_line_text')?></h2>
                    </div>
                </div>
            </div>
        </div>

        <?php if(carbon_get_post_meta($post_id, 'show_carousel')) :?>
        <div class="partners_slider">
            <div class="container">
                <div class="row">
                    <?php $images = carbon_get_post_meta($post_id, 'carousel'); ?>
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme">
                            <?php foreach ($images as $image) : ?>
                                <?php
                                $img = $image['image'];
                                $img_src = wp_get_attachment_image_url( $img, 'full' );
                                ?>
                                <div class="item text-center">
                                    <a href="<?= $image['link']?>" target="_blank">
                                        <img src="<?= $img_src?>" alt="">
                                        <p><?= $image['title']?></p>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <?php  wp_reset_postdata();?>
                    </div>

                </div>
            </div>
        </div>
        <?php endif;?>

        <div class="partners_form_block">
            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <?php
                        $img_form = carbon_get_post_meta($post_id, 'img_form');
                        $img_src = wp_get_attachment_image_url( $img_form, 'full' );
                        ?>
                        <img src="<?= $img_src?>" alt="Good Work">
                    </div>

                    <div class="col-md-6">
                        <p class="for-parnters-p">Для партнеров:</p>
                        <p class="partners-tel"><?=carbon_get_post_meta($post_id, 'nomer_for_partner');?></p>
                        <?= do_shortcode('[contact-form-7 id="152" title="Форма для партнеров" html_class="use-floating-validation-tip"]') ?>
                    </div>

                </div>
            </div>
        </div>

    </div>
<?php get_footer();?>