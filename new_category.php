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
