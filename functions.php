<?php
	register_nav_menu('main','main');	
	add_action( 'widgets_init', 'theme_slug_widgets_init' );
	function theme_slug_widgets_init() 
	{
		register_sidebar
		(
			array
			(
				'name' => __('main', 'mlwwpt'),
				'id' => 'sidebar-1',
				'description' => __('Light Sidebar', 'mlwwpt'),
				'before_widget' => '<li id="%1$s" class="widget %2$s">',
				'after_widget'  => '</li>',
				'before_title'  => '<h3 class="widgettitle">',
				'after_title'   => '</h2>',
			) 
		);
	}
	register_sidebar('main','main');
	
	add_theme_support('title-tag');
	add_theme_support('automatic-feed-links');
	add_theme_support( "custom-header", $args );
	add_theme_support( "custom-background", $args );
	add_editor_style();
	add_theme_support( "post-thumbnails" );
	
	
	if (!isset($content_width))
	{
		$content_width = 600;
	}

	if (is_singular()) wp_enqueue_script( "comment-reply" );
	
	wp_link_pages( $args );
	
	

	
?>