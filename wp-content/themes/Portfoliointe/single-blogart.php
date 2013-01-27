<?php get_header(); ?>
  <div class="main single">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <section class="contentwrap" >
            
           <article class="artpage">
               <header>
                   <hgroup>
               <h2 class="titleblog"><span class="dottitre">.</span><?php the_title(); ?></h2>
               <h3 class="artinfo"><span class="author"><?php the_author(); ?></span> <span class="dateArticle">Publié le <?php the_time('d-m-Y'); ?> <span class="dotOrange">- </span> <?php the_time('G:i'); ?></span> </h3>
                   </hgroup>
               </header>
               
               <section class="contentart">
          
                        <section class="hereisthearticle">
             <?php the_post_thumbnail('featured'); ?>
         <p class="txtart"><?php the_content(); ?></p>
                    </section>
                    </section>
                          <footer class="singleblogart">
                            <section class="moresec">
                              <a class="readMore" href="http://ptfwp.dreamdesgn.com/blog/">Back to Full List</a>
                           
                            <footer>
          

          </footer>
        <section class="commentSpace">
        <?php comments_template();?>
        </section>
          


                             </section>
      
                          </footer>

             </article>
    </section>

          <?php
            endwhile;
            endif;
          ?>

<?php get_footer(); ?>