 <?php remove_filter('the_content','wpautop');
 remove_filter('the_excerpt','wpautop');
get_header();
?>
<section class="contentwrap" >
  <div class="leftblog">
    <section class="domaine">
      <h2 class="choose"> <span class="dotOrange">.</span> Quel domaine vous intéresse? </h2>
        <div class="workclass"> <?php wp_tag_cloud( array( 'taxonomy'=> 'techniques', 'format'=>'list' ) );?> </div>
    </section>                
    <?php $args = array( 'post_type' => 'works', 'posts_per_page' => 7 );
    $loop = new WP_Query( $args );
    if($loop->have_posts()):
    while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <article class="articles">
        <header >
          <hgroup>
          <h3 class="titleblog"><span class="dottitre">.</span><a href="<?php the_permalink(); ?>" title="Click to read more about it"><?php the_title(); ?></a></h3>
          <h3 class="artinfo"> <span class="author" ><?php the_author(); ?></span> 
          <span class="dateArticle">Publié le <?php the_time('d-m Y'); ?> <span class="dotOrange">- </span> <?php the_time('G:i'); ?></span> 
          </h3>
          </hgroup>
        </header>
        <div class="contentwork">
        <?php the_post_thumbnail('Blogimg'); ?>
        <p><?php the_excerpt();?></p>
        </div>                    
      </article> 
    <?php 
    endwhile;
    endif; ?>
  </div>
  <div class="rightblog">
    <section class="search">     
      <h2> <span class="dotOrange">.</span>Search</h2>
          <?php get_search_form(); ?>
<!-- <input class="blogsearch" type="text" placeholder="Typography" >
<input class="sendingbut" type="submit" value="Go!" /> -->
    </section>
    <section >
      <h2> <span class="dotOrange">.</span> Be Social </h2>
      <ul class="socialblog">
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
    </section>
    <section class="advertisement">
      <h2> <span class="dotOrange">.</span> advertisement </h2>
      <ul class="sponslist">
        <li> <a href="#"> <img src="../img/sponsor.png" alt="Liens publicitaire du sponsor X" width="275" height="275"></a> </li>
        <li> <a href="#"> <img src="../img/sponsor.png" alt="Liens publicitaire du sponsor X" width="275" height="275"></a> </li>
        <li> <a href="#"> <img src="../img/sponsor.png" alt="Liens publicitaire du sponsor X" width="275" height="275"></a> </li>
      </ul>
    </section>
  </div>
</section>
<?php get_footer();?>