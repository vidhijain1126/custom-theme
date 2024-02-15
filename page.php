<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <style>
        p{
            padding: 50px;
        }
    </style>
</head>
<?php
get_header();
?>
<body <? body_class() ?>>
<div class="contmain"> 
        <aside>
            <div class="mn">
        <p><i class="fa fa-long-arrow-left"></i> &nbsp;Admin Dashboard</p>
        <?php dynamic_sidebar('sidebar') ?>
    </div>
        <div class="spacee"></div>
    </aside>
    <div class="onlyp" style="margin: 10px; width: 80%;">
<h2> <?php the_title() ?> </h2>
<?php the_content() ?>
</div>
</div>
</body>
<?php
get_footer();
?>
</html>