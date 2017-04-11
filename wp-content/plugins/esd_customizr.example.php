<?php

/*
Plugin Name: Customizer
Description: Customize the theme :-D
Author: John Doe
Version: 1.0
*/

function esd_customize_register($wp_customize)
{
    $wp_customize->add_section('esd_customize', [
        'title'    => __('Hey, hi it\'s the plugin ;)', 'esd'),
        'priority' => 1000,
    ]);

    // Text
    $wp_customize->add_setting('esd_theme_options[text]', [
        'capability' => 'edit_theme_options',
        'type'       => 'option',
    ]);
    $wp_customize->add_control('esd_text', [
        'label'    => __('Text', 'esd'),
        'section'  => 'esd_customize',
        'settings' => 'esd_theme_options[text]',
        "default"  => null,
    ]);

    // Color picker
    $wp_customize->add_setting('esd_theme_options[color]', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'link_color', [
        'label'    => __('Header Color', 'esd'),
        'section'  => 'esd_customize',
        'settings' => 'esd_theme_options[color]',
    ]));
}

add_action('customize_register', 'esd_customize_register');
