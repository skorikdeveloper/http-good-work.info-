<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Settings')
    ->show_on_template('templates/contact-template.php')
    ->add_fields(array(
        Field::make('text', 'first_block_header', 'Заголовок первого блока')->set_required(true),
        Field::make('text', 'red_line_text', 'Текст в красной линии')->set_required(true),
    ));

Container::make('post_meta', 'Contacts')
    ->show_on_template('templates/contact-template.php')
    ->add_fields(array(
        Field::make('text', 'city', 'Город')->set_required(true),
        Field::make('text', 'address', 'Адрес и время работы')->set_required(true),
        Field::make('text', 'email', 'Почта')->set_required(true),
        Field::make( 'complex', 'numbers', 'Контактные номера' )
            ->add_fields( array(
                    Field::make( 'text', 'num', 'Номер' ),
                )
            )
    ));

Container::make('post_meta', 'Block with form')
    ->show_on_template('templates/contact-template.php')
    ->add_fields(array(
        Field::make('image', 'img_form', 'Картинка Справа')->set_required(true),
    ));
