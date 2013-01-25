<?php get_header(); ?>
  <section class="contentwrap" >
    <section class="wrapform">
    	<form id="formContact" action="<?php bloginfo('template_directory'); ?>/contactForm.php" method="post">
        <fieldset id="fieldcontact">
        	<label for="name">Name:</label>
        	<input type="text" id="name" placeholder="Jeremy Leblond" name="name" />
          <label for="email">Email:</label>
          <input type="email" id="email" placeholder="email@yourprovider.com" name="email" />	
          <label for="message">Message:</label>
          <textarea id="message" placeholder="What's on your mind?" name="message"></textarea>	
          <input id="sending" type="submit" value="Send message" />
        </fieldset>
    	</form>
      <div class="accroche" id="response"></div>
    </section>

    <div class="rightCont">
      <div class="accroche">
        <p >Vous souhaiter</p>
        <p class="large">me contacter?</span></p>
      </div>

      <ul class="socContact">
        <?php
          $loop = new WP_query(array('post_type'=>'sfeed'));                        
            if($loop->have_posts()):
            while($loop->have_posts()):
            $loop->the_post();
            $postId = get_the_ID();
        ?>
        <li class="ic_<?php echo get_post_meta($postId,'icone',true);?>"> <a href ="<?php the_content();?>" title="Mon profil">  </a> </li>
        <?php
        endwhile;
        endif;
        ?>
        </ul>
        </div>  
        
        <section class="mapCanvas">   
          <div id="googleMap" ></div> 
        </section>

<div id="panel"></div>
                      
        
    </section>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHJMtm_FEqStB-SdbYd5YSY20oBZp5ju8&sensor=true&v=3&language=fr"></script>
<script src="<?php echo get_bloginfo('template_directory') ;?>/scripts/script.js"></script>
<script type="text/javascript" src="<?php echo get_bloginfo('template_directory') ;?>/scripts/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo get_bloginfo('template_directory') ;?>/scripts/jquery.form.js"></script>
<?php get_footer(); ?>