<?php
/*
Template Name: Работа по странам
*/
get_header();

global $post;
$post_id = $post->ID;
?>

<div id="country-work-page">

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
        <img src="<?=get_template_directory_uri()?>/img/country-work-bg.png" alt="Good Work" class="img-wrapper">
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

    <div class="list-country-work">
        <div class="container">
            <?php
            $posts = my_get_posts('country');
            foreach ($posts as $post) : ?>
            <div class="country-wrapper" id="<?= $post->post_name?>">
                <div class="row">

                    <?php
                    the_post();
                    $img = carbon_get_post_meta( $post->ID, 'country_picture');
                    $img_src = wp_get_attachment_image_url( $img, 'full' );
                    $country_name = carbon_get_post_meta( $post->ID, 'country_name');
                    ?>
                    <div class="col-md-8">
                        <div class="wrapper_title_country">
                            <img src="<?= $img_src?>" alt="Good Work работа в <?=$country_name ?>">
                            <p class="title_country"><?= the_title()?></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="wrapper_descr_country">
                            <?php $documents = carbon_get_post_meta( $post->ID, 'country_documents');?>
                            <div class="ul-wrap">
                                <p><strong>ВЫЕЗД ПО :</strong></p>
                                <ul class="country_document">
                                    <?php foreach($documents as $doc) :?>
                                        <li><?=$doc['country_document']?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>

                            <div class="descr">
                                <?php the_content(); ?>
                            </div>

                            <a href="#" class="btn btn-success open-modal" data-modal="order-country" data-country="<?= the_title()?>"><?= carbon_get_post_meta( $post_id, 'button_text')?></a>
                        </div>
                    </div>

                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>

<?php get_footer();?>
