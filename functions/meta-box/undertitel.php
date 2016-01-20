<?php 
   

$mb[] = array(
    'id' => 'subtitle',
    'title' => __( 'Undertitel', 'rwmb' ),
    'post_types' => array('post','page','stue'),
    'context' => 'side',
    'priority' => 'high',
    'autosave' => true,
    'fields' => array(
        
        array(
            'class' => 'qtranslate',
            'name'  => __( 'Undertitel', 'rwmb' ),
            'id'    => "post_subtitle",
            'type' => 'text',
            ),
    ),
);

