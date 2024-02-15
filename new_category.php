<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body <?php body_class() ?>>
    <? //Template Name: newscat ?>
    <?php
      get_header();
      $imgpath=wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
    ?>
    <div>
    <div class="contmain"> 
        <aside>
            <div class="mn">
        <p><i class="fa fa-long-arrow-left"></i> &nbsp;Admin Dashboard</p>
        <?php dynamic_sidebar('sidebar') ?>
    </div>
        <div class="spacee"></div>
    </aside>
        <div class="indcatgorys-container">
        <h1>Posts</h1>
        <? $paged=get_query_var('paged')?get_query_var('paged'):1; ?>
        <? $wpnew=array('post_type'=>'news','post_status'=>'publish','posts_per_page'=>2,
            'paged'=>$paged);
        $abc=new Wp_Query($wpnew);
        while($abc->have_posts()){
            $abc->the_post();
            $imgpath=wp_get_attachment_image_src(get_post_thumbnail_id(),'large');?>
        <div class="indcatgory">
            <img src="<?php echo $imgpath[0] ?>"></img>
            <h2><?php the_title();?></h2>
            <?php the_excerpt();?>
            <button><a href="<?php the_permalink() ?>">read more</a></button> 
        </div>
    <?php } ?>

</div>

</div>
<div><? wp_pagenavi(array('query' =>$abc)) ?></div>
<?php
      get_footer();
    ?>
</body>
</html>