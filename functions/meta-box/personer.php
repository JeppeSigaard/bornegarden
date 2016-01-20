<?php 

$mb[] = array(
    'id' => 'stue_person',
    'title' => __( 'Tilføj personale', 'rwmb' ),
    'post_types' => array('stue'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Personale', 'rwmb' ),
            'id'    => "stue_person",
            'type' => 'post',
            'post_type'   => array( 'medarbejder'),
            'std'         => 1,
            'clone' => true,
            'field_type'  => 'select_advanced',
            'placeholder' => __( 'Vælg personale', 'smamo' ),
            'query_args'  => array(
                'post_status'    => 'publish',
                'posts_per_page' => - 1,
            ),
        ),
    ),
);