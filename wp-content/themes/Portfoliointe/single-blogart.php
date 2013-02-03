<?php remove_filter('the_content','wpautop'); ?>
<?php get_header(); ?>
  <div class="main single">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="blogContentwrap" >            
        <article class="artpage">
          <header>
            <hgroup>
              <h2 class="titleblog"><span class="dottitre">.</span><?php the_title(); ?></h2>
              <h4 class="artinfo"><span class="author"><?php the_author(); ?></span> <span class="dateArticle">Publié le <?php the_time('d-m-Y'); ?> <span class="dotOrange">- </span> <?php the_time('G:i'); ?></span> </h4>
            </hgroup>
          </header>               
        <div class="contentart">          
          <section class="hereisthearticle">
             <?php the_post_thumbnail('workimg'); ?>
              <div class="txtart"><?php the_content(); ?></div>
          </section>
        </div>
        <footer class="singleblogart">
          <div class="moresec">
            <a class="readMore" href="http://ptfwp.dreamdesgn.com/blog/">Back to Full List</a>
              <a rel="nofollow" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php echo urlencode(get_the_title($id)); ?>" title="Share this post on Facebook">Share on Facebook</a> 
              <div class="commentSpace">
                <?php comments_template();?>
              </div>
          </div>      
        </footer>
        </article>
      </div>
  <?php
    endwhile;
    endif;
  ?>
  </div>
<?php get_footer(); ?>