<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Information')
    ->show_on_post_type('country')
    ->add_fields(array(
        Field::make('text', 'country_name', 'Название страны в склонении. "Хочу работать в {название страны}."')
            ->set_required(true)
            ->help_text( 'Например: "Хочу работать в Польше."' ),
        Field::make('image', 'country_picture', 'Картинка/фотография страны')
            ->set_required(true),
        Field::make("checkbox", "country_show_on_main_page", "Выводить на главной странице в слайдере?")
            ->set_option_value('no')
            ->help_text( 'Если да, обязательно загрузите картинку флага страны.' ),
        Field::make('image', 'country_flag', 'Картинка флага страны'),
        Field::make( 'complex', 'country_documents', 'Выезд по:' )
            ->add_fields( array(
                    Field::make( 'text', 'country_document', 'Документ' )->set_help_text('Например "Биометрии"')
                )
            )
    ));