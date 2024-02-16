<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php //echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body <? body_class() ?>> -->
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

<div id="indcontainer1">
         <?php
        $search = "";
        if (isset($_GET['srchfld'])) {
            $search = $_GET['srchfld'];
        }
        ?>
            
           <div id="indcontainer1">
    <div class="srch">
        <form method="get">
            <input type="text" name="srchfld" value="<? echo $search ?>">
            <input type="submit" name="submit">
        </form>
        
    </div>
</div>

        <div class="indcatgorys-container">
        <h1>Posts</h1>
         <? while(have_posts()){
            the_post();
            $imgpath=wp_get_attachment_image_src(get_post_thumbnail_id(),'large');?>
        <div class="indcatgory">
            <img src="<?php echo $imgpath[0] ?>"></img>
            <h2><?php the_title();?></h2>
            <?php the_excerpt();?>
            <button><a href="<?php the_permalink() ?>">read more</a></button> 
        </div>
    <?php } ?>
</div>
<? wp_pagenavi() ?>
</div>
</div>
<?php
      get_footer();
    ?>
</body>
</html>