<?php 

$mb[] = array(
    'id' => 'dates',
    'title' => __( 'Dato og tid', 'rwmb' ),
    'pages' => array('kalender'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Startdato', 'rwmb' ),
            'id'    => "start_date",
            'type' => 'datetime',
            ),
        
         array(
            'name'  => __( 'Slutdato', 'rwmb' ),
            'id'    => "end_date",
            'type' => 'datetime',
            ),
    ),
);