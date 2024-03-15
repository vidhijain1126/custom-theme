   </head>
   <?php get_header(); ?>
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
               <? $paged=get_query_var('paged')?get_query_var('paged'):1; ?>
               <?php $wppst=array('post_type'=>'post',
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
            <? wp_pagenavi(array('query' =>$xyz)) ?>
            <div style="margin-left: 40%; background-color: white; width: 200px;border-radius: 7px;">
               <h2>Catogries</h2>
               <? $cat=get_categories(array('taxonomy' =>'category')); 
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
      <div id="coachForm" class="indxmodal">
         <div class="indxmodal-content">
            <span class="close" onclick="closeCoachForm()">&times;</span>
            <form action="coach_form.php" method="post" class="formdesign">
               <label for="tname1">Name:</label>
               <input type="text" id="tname1" name="tname" required>
               <label for="sport">Sports:</label>
               <select id="sport" name="sports" required>
                  <option value="default">Select Sports</option>
                  <option value="Basketball">Basketball</option>
                  <option value="Cricket">Cricket</option>
                  <option value="Running">Running</option>
                  <option value="Badminton">Badminton</option>
                  <option value="Karate">Karate</option>
               </select>
               <label for="mail">Mail:</label> <input type="email" id="email" name="email" required>
               <label for="phone_no">Phone No.:</label> <input type="tel" id="tphone" name="tphone" required>
               <label for="exprience">Exprience:</label> <input type="number" id="experience" name="experience"
                  required>
               <label for="address">Address:</label>
               <textarea id="taddress" name="taddress" required></textarea>
               <input type="submit" name="submit" value="Submit">
            </form>
         </div>
      </div>
      <div id="studentForm" class="indxmodal">
         <div class="indxmodal-content">
            <span class="close" onclick="closeStuForm()">&times;</span>
            <form action="stu_form.php" method="post" class="formdesign">
               <label for="tname">Name:</label> <input type="text" id="name" name="name" required>
               <label for="sports">Sports:</label>
               <select id="sports" name="sports" required>
                  <option value="default">Select Sports</option>
                  <option value="Basketball">Basketball</option>
                  <option value="Cricket">Cricket</option>
                  <option value="Running">Running</option>
                  <option value="Badminton">Badminton</option>
                  <option value="Karate">Karate</option>
               </select>
               <label for="slot">slot :</label>
               <select id="slot" name="slot" required>
                  <option value="default">Select Slot</option>
                  <option value="4PM - 5PM">4PM - 5PM</option>
                  <option value="5PM -6PM">5PM -6PM</option>
               </select>
               <label for="coach">Coach :</label> <input type="text" id="coach" name="coach" required>
               <label for="parents">Parents :</label> <input type="text" id="parents" name="parents" required>
               <label for="phone_no">Phone No.:</label> <input type="tel" id="phone" name="phone" required>
               <label for="dob">Date of Birth:</label> <input type="date" id="dob" name="dob" required>
               <label for="address">Address:</label><input type="text" id="address" name="address" required>
               <label for="fees">Fees:</label><input type="number" id="fees" name="fees" required>
               <input type="submit" name="submit" value="Submit">
            </form>
         </div>
      </div>
   </body>
   <?php get_footer() ?>
</html>