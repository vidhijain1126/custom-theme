    <?php
      get_header();
      $imgpath=wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
    ?>
    <div class="contmain"> 
        <aside>
            <!-- <div class="mn"> -->
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