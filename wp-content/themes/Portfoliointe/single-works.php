<?php get_header(); ?>
<?php get_header(); ?>
<div class="main single">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
   <section class="contentwrap" >
            
           <article class="artpage">
               <header>
                   <hgroup>
               <h2><?php the_title(); ?></h2>
               <h3 class="artinfo"><span class="author"><?php the_author(); ?></span> <span class="dateArticle">Publié le <time><?php the_time('d-m Y'); ?><span class="dotOrange">- </span> <?php the_time('G:i'); ?></time></span> </h3>
                   </hgroup>
               </header>
               
               <section class="contentart">
          
                        <section class="contentwork">


                          <?php the_post_thumbnail('Blogimg'); ?>

                        <p>
                            <?php the_content();?>
                        </p>
                    </section>
                          <footer>
                     
                        <span class="comment"><a href="#">Commenter</a> | <a href="#">0 Commentaires</a></span> 
                    </footer>

               </section>

           </article>
        </section>

          <?php
            endwhile;
            endif;
          ?>

<?php get_footer(); ?>