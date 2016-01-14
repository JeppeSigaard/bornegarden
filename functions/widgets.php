<?php 
add_theme_support('widgets');
$widget_fields = array(
   'name'          => __( 'Standard sidebar', 'smamo' ),
	'id'            => 'default-sidebar',
	'description'   => 'Widgets der vises på alle sider',
    'class'         => 'widget',
	'before_widget' => '<div class="widget">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-header">',
	'after_title'   => '</h3>', 
);

// opret standardområde
register_sidebar($widget_fields);


// opret indlægsområde
$widget_fields['name'] = 'Indlægssiders widgets';
$widget_fields['id'] = 'post-widgets';
$widget_fields['description'] = 'Viser widgets på nyhedssider';
register_sidebar($widget_fields);



require 'widgets/register-widget-tax.php';
require 'widgets/register-widget-areas.php';


// Fjern standardwidgets
function unregister_default_widgets() {
     unregister_widget('WP_Widget_Pages');
     unregister_widget('WP_Widget_Calendar');
     unregister_widget('WP_Widget_Archives');
     unregister_widget('WP_Widget_Links');
     unregister_widget('WP_Widget_Meta');
     unregister_widget('WP_Widget_Search');
     // unregister_widget('WP_Widget_Text');
     unregister_widget('WP_Widget_Categories');
     unregister_widget('WP_Widget_Recent_Posts');
     unregister_widget('WP_Widget_Recent_Comments');
     unregister_widget('WP_Widget_RSS');
     unregister_widget('WP_Widget_Tag_Cloud');
     //unregister_widget('WP_Nav_Menu_Widget');
     unregister_widget('Twenty_Eleven_Ephemera_Widget');
 }
 add_action('widgets_init', 'unregister_default_widgets', 11);
