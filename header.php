<!DOCTYPE html>
<html>
<head>
	<title>
		<?php bloginfo('name'); ?> 
		<?php wp_title()?>
		<?php echo "|"; bloginfo('discription');?>

		<?php if(is_front_page()){
			echo "|"; bloginfo('discription');
		} ?>
	</title>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
<? wp_head() ?>
</head>
<nav>
  <div class="logo">
  <?php $logo_image= get_header_image(); ?>
   <a href="<?php echo(site_url()); ?>"><img src="<?php echo($logo_image); ?>"></img> </a>
  </div>
  <div class="menus">	
  <?php wp_nav_menu(array('theme_location'=>'prime-menue'))?>
  </div>
</nav>
</html>
