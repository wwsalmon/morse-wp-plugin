<?php

function morse_wp_plugin_customizer($wp_customize)
{
    $wp_customize->add_section('morse-wp-custom-section', array(
        'title' => "Morse WP Theme Overall Settings"
    ));
    $wp_customize->add_setting('morse-wp-logo-light');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'morse-wp-logo-light-control',array(
                'label'      => "Logo against light background",
                'section'    => 'morse-wp-custom-section',
                'settings'   => 'morse-wp-logo-light'
            )
        )
    );
    $wp_customize->add_setting('morse-wp-logo-dark');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'morse-wp-logo-dark-control',array(
                'label'      => "Logo against dark background",
                'section'    => 'morse-wp-custom-section',
                'settings'   => 'morse-wp-logo-dark'
            )
        )
    );
    $wp_customize->add_setting('morse-wp-template-text');
    $wp_customize->add_control('morse-wp-template-text-control', array(
        'label' => 'text field',
        'type' => 'string',
        'section' => 'morse-wp-custom-section',
        'settings' => 'morse-wp-template-home-text'
    ));
    $wp_customize->add_setting('morse-wp-color-primary');
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'morse-wp-color-primary-control', array(
            'label'      => "Primary Color",
            'section'    => 'morse-wp-custom-section',
            'settings'   => 'morse-wp-color-primary',
        ))
    );
    $wp_customize->add_setting('morse-wp-color-secondary');
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'morse-wp-color-secondary-control', array(
            'label'      => "Secondary Color",
            'section'    => 'morse-wp-custom-section',
            'settings'   => 'morse-wp-color-secondary',
        ))
    );
    $wp_customize->add_setting('morse-wp-color-link');
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'morse-wp-color-link-control', array(
            'label'      => "Link Color",
            'section'    => 'morse-wp-custom-section',
            'settings'   => 'morse-wp-color-link',
        ))
    );
    $wp_customize->add_section('morse-wp-navbar-section', array(
        'title' => "Morse WP Theme Navbar Settings"
    ));
    $wp_customize->add_setting('morse-wp-navbar-bg');
    $wp_customize->add_control('morse-wp-navbar-bg-control', array(
        'label' => 'Navbar Background Color',
        'type' => 'select',
        'choices' => array(
            "light" => "Light",
            "dark" => "Dark"
        ),
        'section' => 'morse-wp-navbar-section',
        'settings' => 'morse-wp-navbar-bg'
    ));
    $wp_customize->add_setting('morse-wp-navbar-line');
    $wp_customize->add_control('morse-wp-navbar-line-control', array(
        'label' => 'Navbar Accent Line',
        'type' => 'select',
        'choices' => array(
            "none" => "None",
            "primary" => "Primary Color",
            "accent" => "Accent Color"
        ),
        'section' => 'morse-wp-navbar-section',
        'settings' => 'morse-wp-navbar-line'
    ));
    $wp_customize->add_setting('morse-wp-navbar-tagline');
    $wp_customize->add_control('morse-wp-navbar-tagline-control', array(
        'label' => 'Navbar Tagline',
        'type' => 'string',
        'section' => 'morse-wp-navbar-section',
        'settings' => 'morse-wp-navbar-tagline'
    ));
    $wp_customize->add_section('morse-wp-footer-section', array(
        'title' => "Morse WP Theme Footer Settings"
    ));
    $wp_customize->add_setting('morse-wp-footer-bg');
    $wp_customize->add_control('morse-wp-footer-bg-control', array(
        'label' => 'footer Background Color',
        'type' => 'select',
        'choices' => array(
            "light" => "Light",
            "dark" => "Dark"
        ),
        'section' => 'morse-wp-footer-section',
        'settings' => 'morse-wp-footer-bg'
    ));
    $wp_customize->add_setting('morse-wp-footer-line');
    $wp_customize->add_control('morse-wp-footer-line-control', array(
        'label' => 'footer Accent Line',
        'type' => 'select',
        'choices' => array(
            "none" => "None",
            "primary" => "Primary Color",
            "accent" => "Accent Color"
        ),
        'section' => 'morse-wp-footer-section',
        'settings' => 'morse-wp-footer-line'
    ));
    $wp_customize->add_setting('morse-wp-footer-blurb');
    $wp_customize->add_control('morse-wp-footer-blurb-control', array(
        'label' => 'footer Blurb',
        'type' => 'textarea',
        'section' => 'morse-wp-footer-section',
        'settings' => 'morse-wp-footer-blurb'
    ));
}

add_action('customize_register', 'morse_wp_plugin_customizer');