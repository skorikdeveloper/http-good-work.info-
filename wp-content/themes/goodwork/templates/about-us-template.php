<?php
/*
Template Name: О нас
*/
get_header();
global $post;
$post_id = $post->ID;
the_post();
?>

<div id="about-us-page">

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
        <img src="<?=get_template_directory_uri()?>/img/about-us-bg.png" alt="Good Work" class="img-wrapper">
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

    <div class="about-us-content" style="background-image: url('<?=get_template_directory_uri()?>/img/about-us-content-bg.png')">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php the_content();?>
                </div>
            </div>
        </div>
    </div>


</div>

<?php get_footer();?>