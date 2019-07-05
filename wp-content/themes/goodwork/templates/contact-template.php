<?php
/*
Template Name: Контакты
*/
get_header();
global $post;
$post_id = $post->ID;
the_post();
?>

    <div id="contact-page">

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
            <img src="<?=get_template_directory_uri()?>/img/contact-bg.png" alt="Good Work" class="img-wrapper">
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

        <div class="contact_address">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"><p class="for-parnters-p">Как к нам добраться</p></div>
                </div>
                <div class="row">

                    <div class="col-md-8">
                        <div id="map">
                            <div id="googleMap" style="width:100%;height:350px;"></div>
                            <script>
                                $(document).ready(function () {
                                    function myMap() {
                                        var mapProp= {
                                            center:new google.maps.LatLng(47.836637, 35.144037),
                                            zoom:17,
                                        };
                                        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

                                        var marker = new google.maps.Marker({position: {lat: 47.836637, lng: 35.144037}, title: 'GOOD WORK'});

                                        marker.setMap(map);

                                        var infowindow = new google.maps.InfoWindow({
                                            content: 'GOOD WORK'
                                        });

                                        infowindow.open(map, marker);
                                    }
                                    myMap();
                                });
                            </script>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contacts">
                            <div class="wrapper-address">
                                <p class="city"><?= carbon_get_post_meta( $post_id, 'city')?></p>
                                <p class="address"><?= carbon_get_post_meta( $post_id, 'address')?></p>
                            </div>
                            <ul>
                                <?php $numbers = carbon_get_post_meta( $post_id, 'numbers');
                                foreach($numbers as $num) :?>
                                <li><a href="tel:<?= str_replace('+', '', str_replace(' ', '', $num['num']))?>"><img src="<?= get_template_directory_uri().'/img/icon_phone.png'?>" alt="Good Work"><?= $num['num']?></a></li>
                                <?php endforeach;?>
                                <li><a href="mailto:<?= carbon_get_post_meta( $post_id, 'email')?>"><?= carbon_get_post_meta( $post_id, 'email')?></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="contact_form_block">
            <div class="container">
                <div class="row">

                    <div class="col-md-5">
                        <p class="for-parnters-p">Свяжитесь с нами:</p>
                        <?= do_shortcode('[contact-form-7 id="155" title="Форма на странице Контакты" html_class="use-floating-validation-tip"]') ?>
                    </div>

                    <div class="col-md-7">
                        <?php
                        $img_form = carbon_get_post_meta($post_id, 'img_form');
                        $img_src = wp_get_attachment_image_url( $img_form, 'full' );
                        ?>
                        <img src="<?= $img_src?>" alt="Good Work">
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php get_footer();?>