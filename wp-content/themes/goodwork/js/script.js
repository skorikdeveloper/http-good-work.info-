$(document).ready(function () {

    // header
    $('.drawer').drawer();

    // main page

    $('.first_block_carousel').owlCarousel({
        loop:true,
        nav:false,
        dots:false,
        autoplay:true,
        autoplayTimeout:8000,
        responsive:{
            0:{
                items:1
            }
        }
    });

    $('.country_slider .owl-carousel').owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        autoplay:true,
        autoplayTimeout: 5000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            480:{
                items:2
            },
            768:{
                items:3
            },
            992:{
                items:5
            }
        }
    });

    $('.open-modal').on('click', function (e) {
        e.preventDefault();
        $modal = $(this).data('modal');

        $('#'+$modal).modal('show');
    });


    document.addEventListener( 'wpcf7mailsent', function( event ) {
        if(event.detail.contactFormId == "62" || event.detail.contactFormId == "87" || event.detail.contactFormId == "115" || event.detail.contactFormId == "152" || event.detail.contactFormId == "155"){ // 62 это id формы для отслеживания
            $('#order').modal('hide');
            $('#order-country').modal('hide');
            $('#thanks').modal('show');
        }
    }, false );

    var headerH     = $('.header .desktop-menu').outerHeight(),
        firstBlockH = $('.first-block').outerHeight();

    $('.first-block .owl-carousel .owl-item img').css('height', headerH + firstBlockH);

    $( window ).resize(function() {
        var headerH     = $('.header .desktop-menu').outerHeight(),
            firstBlockH = $('.first-block').outerHeight();
        $('.first-block .owl-carousel .owl-item img').css('height', headerH + firstBlockH);
    });

    $('#country-work-page .open-modal').on('click', function () {
        var country = $(this).attr('data-country');
        $('#order-country input[name=your-country]').val(country);
    });

    $('.partners_slider .owl-carousel').owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        autoplay:true,
        autoplayTimeout: 5000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            480:{
                items:2
            },
            768:{
                items:3
            },
            992:{
                items:5
            }
        }
    });

});
