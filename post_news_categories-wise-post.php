      <?php
         //Template Name: post & news catogries
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
            
               <h1 style="background-color: pink;"> Post Section </h1>
               <?php
                  $cat=get_terms(['taxonomy'=>'category','parent'=>0]);
                  foreach ($cat as $value) { ?>
                     
               <div>
                  <a href="<? echo get_category_link($value->term_id);?>">
                     <h3><? echo $value->name; ?> </h3>
                  </a>
               </div>
               <div class="indcatgorys-container">
               <? $abc=array('post_type'=>'post',
                  'post_status'=>'publish',
                  'tax_query'=>array(
                     array('taxonomy' => 'category',
                        'field' => 'term_id',
                        'terms' => $value->term_id)
                  ),
                  ); 
                  $qry=new Wp_Query($abc);
                  while($qry->have_posts()){
                  $qry->the_post();
                  ?>
               <div class="indcatgory">
                  <?php the_post_thumbnail() ?>
                  <h2><?php the_title();?></h2>
                  <?php the_excerpt();?>
                  <button><a href="<?php the_permalink() ?>">read more</a></button> 
               </div>
               <? } ?>
            </div>
               <? } ?>
            

            <h1 style="background-color: pink;"> News Section </h1>
               <?php
                  $cat=get_terms(['taxonomy'=>'news_category','parent'=>0]);
                  foreach ($cat as $value) { ?>
                     
               <div>
                  <a href="<? echo get_category_link($value->term_id);?>">
                     <h3><? echo $value->name; ?> </h3>
                  </a>
               </div>
               <div class="indcatgorys-container">
               <? $abc=array('post_type'=>'news',
                  'post_status'=>'publish',
                  'tax_query'=>array(
                     array('taxonomy' => 'news_category',
                        'field' => 'term_id',
                        'terms' => $value->term_id)
                  ),
                  ); 
                  $qry=new Wp_Query($abc);
                  while($qry->have_posts()){
                  $qry->the_post();
                  ?>
               <div class="indcatgory">
                  <?php the_post_thumbnail() ?>
                  <h2><?php the_title();?></h2>
                  <?php the_excerpt();?>
                  <button><a href="<?php the_permalink() ?>">read more</a></button> 
               </div>
               <? } ?>
            </div>
               <? } ?>
            </div>
            </div>
   <?php
      get_footer();
      ?>
