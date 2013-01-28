<?php get_header(); ?>
  <div class="mainSingle">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <section class="contentwrapWork" >
          <article class="artpage">
            <header>
              <hgroup>
               <h2 class="arttitle"><span class="dotOrange">.</span> <?php the_title(); ?></h2>
               <h3 class="artinfo"><span class="author"><?php the_author(); ?></span> <span class="dateArticle">Publié le <time><?php the_time('d-m Y'); ?><span class="dotOrange">- </span> <?php the_time('G:i'); ?></time></span> </h3>
              </hgroup>
            </header>
            <section class="contentart">
              <section class="contentwork">
                <?php the_post_thumbnail('Blogimg'); ?>
                  <p><?php the_content();?></p>
              </section>
            </section>
          </article>

                                   <footer class="singleblogart">
                            <section class="moresec">
                              <a class="readMore" href="http://ptfwp.dreamdesgn.com/work/">Back to Full List</a>
                           
                            <footer>


        </section>
 </div>
 <?php
   endwhile;
   endif;
  ?>
<?php get_footer(); ?>