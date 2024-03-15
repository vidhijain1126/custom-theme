   <? get_header(); 
   //Template Name: contact?>  
  <div class="container1">
    <div class="content">
      <div class="left-side">
        
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one"><? the_field('address',10) ?></div>
        </div>

        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+91 <? the_field('phone_number_',10) ?></div>
          <div class="text-two">+91 <? the_field('phone_number_2',10) ?></div>
        </div>

        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one"><? the_field('email',10) ?></div>
        </div>

      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <? the_excerpt();
         the_content()?>   
    </div>
  </div>
</div>
<? get_footer(); ?>