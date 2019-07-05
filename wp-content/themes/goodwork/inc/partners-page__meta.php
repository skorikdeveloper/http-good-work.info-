<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Settings')
    ->show_on_template('templates/partners-template.php')
    ->add_fields(array(
        Field::make('text', 'first_block_header', 'Заголовок первого блока')->set_required(true),
        Field::make('text', 'red_line_text', 'Текст в красной линии')->set_required(true),
    ));

Container::make('post_meta', 'Slider')
    ->show_on_template('templates/partners-template.php')
    ->add_fields(array(
        Field::make("checkbox", "show_carousel", "Включить слайдер?")
            ->set_option_value('no'),
        Field::make( 'complex', 'carousel', 'Картинки в слайдер' )
            ->add_fields( array(
                    Field::make( 'image', 'image', 'Картинка' ),
                    Field::make( 'text', 'title', 'Компания' ),
                    Field::make( 'text', 'link', 'Ссылка на компанию' )
                )
            )
    ));

Container::make('post_meta', 'Block with form')
    ->show_on_template('templates/partners-template.php')
    ->add_fields(array(
        Field::make('image', 'img_form', 'Картинка слева')->set_required(true),
        Field::make('text', 'nomer_for_partner', 'Номер для партнеров')->set_required(true),
    ));
