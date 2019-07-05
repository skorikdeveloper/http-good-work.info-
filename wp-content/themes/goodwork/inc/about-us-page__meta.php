<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Settings')
    ->show_on_template('templates/about-us-template.php')
    ->add_fields(array(
        Field::make('text', 'first_block_header', 'Заголовок первого блока')->set_required(true),
        Field::make('text', 'red_line_text', 'Текст в красной линии')->set_required(true),
    ));