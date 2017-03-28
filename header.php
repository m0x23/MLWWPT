	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//DE" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes( $doctype ) ?>>
<head profile="http://gmpg.org/xfn/11">
 
   <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
 

  

   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
   <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
 
   <?php wp_head(); ?>
 
</head>
<body  <?php body_class( $class ); ?>>
 

 
 
<div id="wrapper">
 
   <div id="header">
   <img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" width=810 />

   <!-- Basisstruktur Navigations Menu -->
   

   
   
	<nav>
	<?php
		$defaults = array(
			'theme_location' => 'main',
			'container' => false,
			'menu_class' => 'navbar',
			'depth' => 2
		);
		wp_nav_menu($defaults);
	?>
	</nav>
   
   </div><!-- header -->
