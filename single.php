<!-- <!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" type="text/css" href="<?php //echo get_template_directory_uri(); ?>/style.css">
   </head>
   <body <? //body_class() ?>> -->
   <?php
      get_header();
      $imgpath=wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
    ?>
    <div class="contmain"> 
        <aside>
            <div class="mn">
        <p><i class="fa fa-long-arrow-left"></i> &nbsp;Admin Dashboard</p>
        <?php dynamic_sidebar('sidebar') ?>
    </div>
        <div class="spacee"></div>
    </aside>
   <div class="post_dis">
    <div class="post_img"> <img src="<?php echo $imgpath[0] ?>"></img></div>
      <h2><?php the_title();?></h2>
      <?php the_content();?> 
      <?php comments_template(); ?>
      <p></p>
   </div>
</div>
   <?php
      get_footer();
    ?>
    </body>
    </html>