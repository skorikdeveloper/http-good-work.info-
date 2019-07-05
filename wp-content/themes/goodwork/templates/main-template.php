<?php
/*
Template Name: Главная страница
*/
get_header();

global $post;
$post_id = $post->ID;
?>
    <div id="main-page">

        <div class="first-block">
            <div class="container">
                <div class="row">

                    <div class="col-md-3">
                        <a href="/" class="logo">
                            <img src="<?= get_template_directory_uri().'/img/main-logo.png'?>" alt="Good Work">
                        </a>
                    </div>

                    <div class="col-md-9">
                        <h1 class="first_block_header">
                            <?= carbon_get_post_meta( $post_id, 'first_block_header')?>
                        </h1>
                        <p class="first_block_text">
                            <?= carbon_get_post_meta( $post_id, 'first_block_text')?>
                        </p>

                        <p class="first_block_button">
                            <a href="#" class="btn btn-success open-modal" data-modal="order"><?= carbon_get_post_meta( $post_id, 'first_block_button')?></a>
                        </p>
                    </div>

                </div>
            </div>

            <?php $images = carbon_get_post_meta( $post_id, 'first_block_carousel')?>
            <div class="owl-carousel owl-theme first_block_carousel">
                <?php foreach ($images as $img) : ?>
                    <?php $img_src = wp_get_attachment_image_url( $img['images'], 'full' );?>
                    <div class="item"><img src="<?= $img_src?>" alt=""></div>

                <?php endforeach; ?>
            </div>
        </div>

        <div class="employment" style="background-image: url('<?= get_template_directory_uri() ?>/img/employment_bg.png')">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h2><?= carbon_get_post_meta( $post_id, 'title')?></h2>
                    </div>
                    <div class="col-md-2 col-sm-3 text-center">
                        <?php $first_img = wp_get_attachment_image_url( carbon_get_post_meta( $post_id, 'first_img'), 'full' );?>
                        <img src="<?= $first_img?>" alt="">
                        <p><?= carbon_get_post_meta( $post_id, 'first_text')?></p>
                    </div>
                    <div class="col-md-2 col-sm-3 text-center">
                        <?php $second_img = wp_get_attachment_image_url( carbon_get_post_meta( $post_id, 'second_img'), 'full' );?>
                        <img src="<?= $second_img?>" alt="">
                        <p><?= carbon_get_post_meta( $post_id, 'second_text')?></p>
                    </div>
                    <div class="col-md-2 col-sm-3 text-center">
                        <?php $third_img = wp_get_attachment_image_url( carbon_get_post_meta( $post_id, 'third_img'), 'full' );?>
                        <img src="<?= $third_img?>" alt="">
                        <p><?= carbon_get_post_meta( $post_id, 'third_text')?></p>
                    </div>
                    <div class="col-md-2 col-sm-3 text-center">
                        <?php $fourth_img = wp_get_attachment_image_url( carbon_get_post_meta( $post_id, 'fourth_img'), 'full' );?>
                        <img src="<?= $fourth_img?>" alt="">
                        <p><?= carbon_get_post_meta( $post_id, 'fourth_text')?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="country_slider">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center"><h2>Хочу работать в</h2></div>
                    <?php $posts = my_get_posts('country'); ?>
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme">
                            <?php foreach ($posts as $post) : ?>
                            <?php
                                if(empty(carbon_get_post_meta( $post->ID, 'country_show_on_main_page'))) continue;
                                $img = carbon_get_post_meta( $post->ID, 'country_flag');
                                $img_src = wp_get_attachment_image_url( $img, 'full' );
                                $country_name = carbon_get_post_meta( $post->ID, 'country_name');
                            ?>
                            <div class="item text-center">
                                <a href="<?= get_permalink(12).'#'.$post->post_name?>">
                                    <img src="<?= $img_src?>" alt="">
                                    <p><?= $country_name?></p>
                                </a>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php  wp_reset_postdata();?>
                    </div>

                </div>
            </div>
        </div>

        <div class="callback-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <a href="/" class="logo">
                            <img src="<?= get_template_directory_uri().'/img/logo-form.png'?>" alt="Good Work">
                        </a>
                        <p class="text-p">Вам перезвонить?</p>
                    </div>
                    <div class="col-md-8">
                        <?= do_shortcode('[contact-form-7 id="87" title="Форма вам перезвонить?" html_class="use-floating-validation-tip"]');?>
                    </div>
                </div>
            </div>
        </div>

        <div class="plan-block" style="background-image: url('<?=get_template_directory_uri()?>/img/main-plan-bg.png')">
            <div class="container wrap">
                <div class="row">
                    <div class="steps-wrapper">
                        <div class="step step-1">
                            <img src="<?= wp_get_attachment_image_url(carbon_get_post_meta( $post_id, 'step_1_img'), 'full')?> ">
                            <p><?= carbon_get_post_meta( $post_id, 'step_1_text')?></p>
                        </div>
                        <div class="step step-2">
                            <img src="<?= wp_get_attachment_image_url(carbon_get_post_meta( $post_id, 'step_2_img'), 'full')?> " >
                            <p><?= carbon_get_post_meta( $post_id, 'step_2_text')?></p>
                        </div>
                        <div class="step step-3">
                            <img src="<?= wp_get_attachment_image_url(carbon_get_post_meta( $post_id, 'step_3_img'), 'full')?> " >
                            <p><?= carbon_get_post_meta( $post_id, 'step_3_text')?></p>
                        </div>
                        <div class="step step-4">
                            <img src="<?= wp_get_attachment_image_url(carbon_get_post_meta( $post_id, 'step_4_img'), 'full')?> " >
                            <p><?= carbon_get_post_meta( $post_id, 'step_4_text')?></p>
                        </div>
                        <div class="step step-5">
                            <img src="<?= wp_get_attachment_image_url(carbon_get_post_meta( $post_id, 'step_5_img'), 'full')?> ">
                            <p><?= carbon_get_post_meta( $post_id, 'step_5_text')?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="steps-wrapper steps-wrapper-2">
                        <div class="step step-9">
                            <img src="<?= wp_get_attachment_image_url(carbon_get_post_meta( $post_id, 'step_9_img'), 'full')?> " >
                            <p><?= carbon_get_post_meta( $post_id, 'step_9_text')?></p>
                        </div>
                        <div class="step step-8">
                            <img src="<?= wp_get_attachment_image_url(carbon_get_post_meta( $post_id, 'step_8_img'), 'full')?> " >
                            <p><?= carbon_get_post_meta( $post_id, 'step_8_text')?></p>
                        </div>
                        <div class="step step-7">
                            <img src="<?= wp_get_attachment_image_url(carbon_get_post_meta( $post_id, 'step_7_img'), 'full')?> " >
                            <p><?= carbon_get_post_meta( $post_id, 'step_7_text')?></p>
                        </div>
                        <div class="step step-6">
                            <img src="<?= wp_get_attachment_image_url(carbon_get_post_meta( $post_id, 'step_6_img'), 'full')?> ">
                            <p><?= carbon_get_post_meta( $post_id, 'step_6_text')?></p>
                        </div>
                    </div>
                </div>
                <img src="<?=get_template_directory_uri()?>/img/main-plan-wrapper.png" alt="Good Work" class="img-wrapper">
            </div>
        </div>

    </div>

<?php get_footer();?>