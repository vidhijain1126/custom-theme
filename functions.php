<?php
function custom_css(){
$version = wp_get_theme()->get( 'Version' );
wp_enqueue_style('customcss',get_template_directory_uri()."/style.css",array(),$version,'all');
wp_enqueue_style('csS_','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css',array(),1.1,'all');
wp_enqueue_style('fontawesome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css",array(),1.1,'all');
}
add_action('wp_enqueue_scripts','custom_css'); 

function custom_function(){
	wp_enqueue_script('custom_js',get_template_directory_uri()."/script.js",array(),1.1,'all');
}
add_action('wp_enqueue_scripts','custom_function');

register_nav_menus(array('prime-menue' => 'Header Menue',));
add_theme_support('post-thumbnails');
add_theme_support('custom-header');


register_sidebar(
	array(
		'name' => "sidebar location",
		'id'=>'sidebar'
	)
);
register_sidebar(
	array(
		'name' => "footer widget",
		'id'=>'foot',
		'before_widget'=> "<div class='foot1'>",
		'after_widget'=> "</div>"
	)
	);
register_sidebar(
	array(
		'name' => "footer widget1",
		'id'=>'foot1',
		'before_widget'=> "<div class='foot2'>",
		'after_widget'=> "</div>"
	)
	);
register_sidebar(
	array(
		'name' => "footer widget2",
		'id'=>'foot2',
		'before_widget'=> "<div class='foot3'>",
		'after_widget'=> "</div>"
	)
	);
add_theme_support('custom-background');
add_post_type_support('page','excerpt');

function newspost() {
	$args = array(
		'label'             =>__('News','textdomain'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'news' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type('news', $args );
}
add_action('init','newspost');

function taxonomycallback() {
    register_taxonomy( 'news_category', 'news', array(
        'rewrite'      => array( 'slug' => 'news_catogries' ),
        'label'=>__('Category','textdomain'),
        'hierarchical'=>true,
    ) );
}
add_action( 'init', 'taxonomycallback', 0 );
?>