<?php 

function hide_front_fields() {

    $front = get_option( 'page_on_front');
    $current = (isset($_GET['post'])) ? wp_strip_all_tags($_GET['post']) : false;
    if($front !== $current){
       echo '<style type="text/css"> #front_gallery_top,#front_fields{ display: none!important; } </style>';
    }
    else{
        echo '<style type="text/css"> #postdivrich,#front_show,#post-color,#postimagediv,#pageparentdiv{ display: none!important; } </style>';
    }
}

add_action('admin_head', 'hide_front_fields');

$mb[] = array(
    'id' => 'front_gallery_top',
    'title' => __( 'Forsidens Billedgallerier', 'rwmb' ),
    'post_types' => array('page'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Galleri 1', 'rwmb' ),
            'id'    => "front_gallery_1",
            'type' => 'image_advanced',
            'max_file_uploads' => 7,
        ),
        
        array(
            'name'  => __( 'Galleri 2', 'rwmb' ),
            'id'    => "front_gallery_2",
            'type' => 'image_advanced',
            'max_file_uploads' => 7,
        ),
    ),
);

$mb[] = array(
    'id' => 'front_fields',
    'title' => __( 'Forsidekasser', 'rwmb' ),
    'pages' => array('page'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(

        array(
            'name'  => __( 'Kasse', 'rwmb' ),
            'id'    => "field",
            'type' => 'group',
            'clone' => true,
            'fields' => array(

                array(
                    'name' => __('Ikon','rwmb'),
                    'id' => 'field_icon',
                    'type' => 'file_advanced',
                    'max_file_uploads' => 1,
                ),

                array(
                    'name' => __('Overskrift','rwmb'),
                    'id' => 'field_heading',
                    'type' => 'text',
                ),                

                array(
                    'name' => 'Tekst',
                    'id'    => 'field_text',
                    'type' => 'textarea',
                    'rows' => 4,
                ),
                
                array(
                    'name'  => 'Link',
                    'id'  => 'field_link',
                    'type'  => 'post',
                    'field_type' => 'select_advanced',
                    'post_type'   => array( 'post', 'page' ),
                    'placeholder' => __( 'Vælg et indhold', 'smamo' ),
                    'query_args'  => array(
                        'post_status'    => 'publish',
                        'posts_per_page' => - 1,
                    ),
                ),

            ),

            ),
    ),
);
