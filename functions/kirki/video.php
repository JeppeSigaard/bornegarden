<?php 

Kirki::add_section( 'theme_front_video', array(
    'title'          => __( 'Video på forsiden' ),
    'description'    => __( 'Indsæt en video fra youtube på hjemmesidens forside' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'front_video', array(
    'settings' => 'smamo_front_video',
    'label'    => __( 'Video url', 'smamo' ),
    'type'          => 'url',
    'section'       => 'theme_front_video',
    'priority'      => 10,
    'default'       => null,
) );