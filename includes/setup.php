<?php

function hl_setup_theme()
{
    add_theme_support('editor_styles');

    add_editor_style(
        [
            'https://fonts.googleapis.com/css2?family=Lato&display=swap',
            'assets/bootstrap-icons/bootstrap-icons.css',
            'assets/public/index.css',
            'assets/public/editor.css'
        ]
    );
}
