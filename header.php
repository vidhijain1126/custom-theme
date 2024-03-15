<!DOCTYPE html>
<html <? language_attributes() ?>>
<head>
	<title>
		<?php bloginfo('name'); ?> 
		<?php wp_title()?>
		<?php if(is_front_page()){
			echo "|"; bloginfo('discription');
		} ?>
	</title>
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
  <div class="menulogo">

  </div>
</nav>
<body <? body_class() ?>>

