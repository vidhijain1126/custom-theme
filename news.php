<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <? //Template Name: news details ?>
</head>
<?php get_header()?>
   <body <? body_class() ?>>
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
               <h1>News Posts</h1>
               <? $paged=get_query_var('paged')?get_query_var('paged'):1; ?>
               <?php $wppst=array('post_type'=>'news',
                'post_status'=>'publish',
                's'=>$search,
                'posts_per_page'=>2,
                'paged'=>$paged
            );
                $xyz = new Wp_Query($wppst);
                 while($xyz->have_posts()){
                  $xyz->the_post();
                  $imgpath=wp_get_attachment_image_src(get_post_thumbnail_id(),'large');?>
               <div class="indcatgory">
                  <img src="<?php echo $imgpath[0] ?>"></img>
                  <h2><?php the_title();?></h2>
                  <?php the_excerpt();?>
                  <button><a href="<?php the_permalink() ?>">read more</a></button> 
               </div>
               <?php } ?>
            </div>
            <div><? wp_pagenavi(array('query' =>$xyz)) ?></div>
            <div style="margin-left: 40%; background-color: white; width: 200px;border-radius: 7px;">
               <h2>Catogries</h2>
               <? $cat=get_categories(array('taxonomy' =>'news_category')); 
                  foreach ($cat as $catvalue) { ?>
               <a href="<? echo get_category_link($catvalue->term_id); ?>">
                  <h3><? echo $catvalue->name; ?>(<? echo $catvalue->count; ?>)</h3>
               </a>
               <? }?>
            </div>
            
            <div class="indxbtnholder">
               <button><a href="#" onclick="addStuForm()">Add new player</a></button>
               <button><a href="#" onclick="addCoachForm()">Add new couch</a></button>
            </div>
         
      </div>
  </div>