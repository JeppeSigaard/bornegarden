<?php 

$mb[] = array(
    'id' => 'post-color',
    'title' => __( 'Farve', 'rwmb' ),
    'post_types' => array('post','page','kalender'),
    'context' => 'side',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Angiv indlæggets temafarve', 'rwmb' ),
            'id'    => "post_color",
            'type' => 'radio',
            'std' => '#a73636',
            'options' => array(
                '#a73636' => '<span style="color: #a73636 ;">Mørkerød (standard)</span><br/>',
                '#6e6e39' => '<span style="color: #6e6e39 ;">Mørkegrøn</span><br/>',
                '#a688a5' => '<span style="color: #a688a5 ;">Lilla</span><br/>',
                '#73a6b5' => '<span style="color: #73a6b5 ;">Platinblå</span><br/>',
                '#9a9238' => '<span style="color: #9a9238 ;">Lysebrun</span><br/>',
                '#715f95' => '<span style="color: #715f95 ;">Lavendel</span><br/>',
            ),
        ),
    ),
);


