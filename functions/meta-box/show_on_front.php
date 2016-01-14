<?php 

$mb[] = array(
    'id' => 'front_show',
    'title' => __( 'Vis på forsiden', 'rwmb' ),
    'pages' => array('page','post'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'vis dette indhold på forsiden', 'rwmb' ),
            'id'    => "show_on_front",
            'type' => 'checkbox',
            'std' => '0',
            ),
    ),
);