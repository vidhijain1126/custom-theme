<?php
register_nav_menus(array('prime-menue' => 'Header Menue',));
add_theme_support('post-thumbnails');
add_theme_support('custom-header');
register_sidebar(
	array(
		'name' => "sidebars location",
		'id'=>'sidebarr'
	)
);
add_theme_support('custom-background');
add_post_type_support('page','excerpt');
second hiiiiiiiiigit 
?>