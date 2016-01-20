<?php 
   

// Get the nav menu based on $menu_name (same as 'theme_location' or 'menu' arg to wp_nav_menu)
// This code based on wp_nav_menu's code to get Menu ID from menu slug

wp_nav_menu(array('theme_location' => 'main_menu', 'container' => false, 'menu_id' => 'main_menu', 'menu_class' => 'main_menu',) );
?>
