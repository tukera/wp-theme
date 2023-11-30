<?php

function hl_enqueue()
{
    wp_register_style(
        'hl_font_Lato',
        'https://fonts.googleapis.com/css2?family=Lato&display=swap',
        [],
        null
    );

    wp_register_style(
        'hl_bootstrap_icons',
        get_theme_file_uri('assets/bootstrap-icons/bootstrap-icons.css')
    );

    wp_register_style(
        'hl_theme',
        get_theme_file_uri('assets/public/index.css')
    );

    wp_enqueue_style('hl_font_Lato');
    wp_enqueue_style('hl_bootstrap_icons');
    wp_enqueue_style('hl_theme');
}
