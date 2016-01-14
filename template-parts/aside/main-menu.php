<?php 
   

// Get the nav menu based on $menu_name (same as 'theme_location' or 'menu' arg to wp_nav_menu)
// This code based on wp_nav_menu's code to get Menu ID from menu slug

$menu_name = 'main_menu';

if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

    $menu_items = wp_get_nav_menu_items($menu->term_id);

    $menu_list = '<ul id="menu-' . $menu_name . '">';

    foreach ( (array) $menu_items as $key => $menu_item ) {
        
        $title = $menu_item->title;
        $url = $menu_item->url;
        $color = (isset($menu_item->color)) ? $menu_item->color: '#a73636';
        
        $menu_list .= '<li><a style="background-color: '.$color.';" href="' . $url . '">' . $title . '</a></li>';
        
    }
    $menu_list .= '</ul>';
    
    } else {
        $menu_list = '<ul><li>Menu "' . $menu_name . '" not defined.</li></ul>';
    }
// $menu_list now ready to output
    echo $menu_list;
?>
