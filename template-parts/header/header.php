<header class="site-header">
    <div class="top-logo">
        <a href="<?php echo get_bloginfo('url') ?>" title="Tilbage til forsiden">
            <img src="<?php echo get_theme_mod('logo'); ?>" />
        </a>
    </div>
    <nav class="top-menu">
        <?php 
        
        $menu_name = 'top_menu';

        if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

            $menu_items = wp_get_nav_menu_items($menu->term_id);

            $menu_list = '<ul>';

            foreach ( (array) $menu_items as $key => $menu_item ) {

                if($menu_item->menu_item_parent !== '0'){

                    $title = strip_tags($menu_item->title);
                    $url = $menu_item->url;

                    $menu_list .= '<li><a href="' . $url . '">' . $title . '</a></li>';
                }
            }
            $menu_list .= '</ul>';

            } else {
                $menu_list = '<ul><li>Menu "' . $menu_name . '" not defined.</li></ul>';
            }

        echo $menu_list;
        
        ?>
    </nav>
    <div class="nav-toggle"><span></span></div>
</header>