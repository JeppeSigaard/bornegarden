<?php 

function smamo_widgets_init() {

    $terms = get_terms('tax_widget',array('orderby' => 'id','hide_empty' => false));
    foreach($terms as $widget){
        
        register_sidebar( array(
            'id'          => $widget->slug,
            'name'        => $widget->name,
            'description' => $widget->description,
            'before_widget' => '<div class="widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<div class="widget-header"><h3>',
            'after_title'   => '</h3><div class="widget-arrow square-icon icon-next"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20 20">
        <path d="M9.163 4.516c0.418 0.408 4.502 4.695 4.502 4.695 0.223 0.219 0.335 0.504 0.335 0.789s-0.112 0.57-0.335 0.787c0 0-4.084 4.289-4.502 4.695-0.418 0.408-1.17 0.436-1.615 0-0.446-0.434-0.481-1.041 0-1.574l3.747-3.908-3.747-3.908c-0.481-0.533-0.446-1.141 0-1.576s1.197-0.409 1.615 0z"></path>
        </svg>
        </div></div>'
        ) ); 
    }
}
add_action( 'widgets_init', 'smamo_widgets_init' );