<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'First block')
    ->show_on_template('templates/main-template.php')
    ->add_fields(array(
        Field::make('text', 'first_block_header', 'Заголовок')->set_required(true),
        Field::make('rich_text', 'first_block_text', 'Текст по заголовком')
            ->set_required(true)
            ->set_rows(4), // Высотка поля в строках. Необязательный параметр.
        Field::make('text', 'first_block_button', 'Текст в кнопке'),
        Field::make( 'complex', 'first_block_carousel', 'Картинки в слайдер' )
            ->add_fields( array(
                    Field::make( 'image', 'images', 'Картинка' )
                )
            )
    ));

Container::make('post_meta', 'Employment')
    ->show_on_template('templates/main-template.php')
    ->add_fields(array(
        Field::make('text', 'title', 'Заголовок')->set_required(true),
        Field::make('image', 'first_img', 'Первая иконка')->set_required(true),
        Field::make('text', 'first_text', 'Первый текст')->set_required(true),
        Field::make('image', 'second_img', 'Вторая иконка')->set_required(true),
        Field::make('text', 'second_text', 'Второй текст')->set_required(true),
        Field::make('image', 'third_img', 'Третья иконка')->set_required(true),
        Field::make('text', 'third_text', 'Третий текст')->set_required(true),
        Field::make('image', 'fourth_img', 'Четвертая иконка')->set_required(true),
        Field::make('text', 'fourth_text', 'Четвертый текст')->set_required(true),
    ));

Container::make('post_meta', 'Steps')
    ->show_on_template('templates/main-template.php')
    ->add_fields(array(
        Field::make('image', 'step_1_img', 'Первая иконка')->set_required(true),
        Field::make('text', 'step_1_text', 'Первый текст')->set_required(true),
        Field::make('image', 'step_2_img', 'Вторая иконка')->set_required(true),
        Field::make('text', 'step_2_text', 'Второй текст')->set_required(true),
        Field::make('image', 'step_3_img', 'Третья иконка')->set_required(true),
        Field::make('text', 'step_3_text', 'Третий текст')->set_required(true),
        Field::make('image', 'step_4_img', 'Четвертая иконка')->set_required(true),
        Field::make('text', 'step_4_text', 'Четвертый текст')->set_required(true),
        Field::make('image', 'step_5_img', 'Пятая иконка')->set_required(true),
        Field::make('text', 'step_5_text', 'Пятый текст')->set_required(true),
        Field::make('image', 'step_6_img', 'Шестая иконка')->set_required(true),
        Field::make('text', 'step_6_text', 'Шестой текст')->set_required(true),
        Field::make('image', 'step_7_img', 'Седьмая иконка')->set_required(true),
        Field::make('text', 'step_7_text', 'Седьмой текст')->set_required(true),
        Field::make('image', 'step_8_img', 'Восьмая иконка')->set_required(true),
        Field::make('text', 'step_8_text', 'Восьмой текст')->set_required(true),
        Field::make('image', 'step_9_img', 'Девятая иконка')->set_required(true),
        Field::make('text', 'step_9_text', 'Девятый текст')->set_required(true),
    ));