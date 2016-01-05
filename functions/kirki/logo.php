<?php 

Kirki::add_section( 'theme_logo', array(
    'title'          => __( 'Logo' ),
    'description'    => __( 'Vælg et logo til hjemmesiden' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'smamo_logo', array(
    'settings' => 'logo',
    'label'    => __( 'Logo', 'smamo' ),
    'type'          => 'image',
    'section'       => 'theme_logo',
    'priority'      => 10,
    'default'       => null,
) );