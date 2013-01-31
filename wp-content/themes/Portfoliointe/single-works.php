<?php get_header(); ?>
  <div class="mainSingle">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div class="contentwrapWork" >
          <article class="artpage">
            <header>
              <hgroup>
               <h1 class="arttitle"><span class="dotOrange">.</span> <?php the_title(); ?></h1>
               <h3 class="artinfo"><span class="author"><?php the_author(); ?></span> <span class="dateArticle">Publié le <?php the_time('d-m Y'); ?><span class="dotOrange">- </span> <?php the_time('G:i'); ?></span> </h3>
              </hgroup>
            </header>
            <div class="contentart">
              <div class="singleWork">
                <?php the_post_thumbnail('workimg'); ?>
                  <p><?php the_content();?></p>
              </div>
            </div>
          </article>
          <footer class="singleblogart">
            <div class="moresec">
              <a class="readMore" href="http://ptfwp.dreamdesgn.com/work/">Back to Full List</a>
            </div>
          </footer>
        </div>
      </div>
 <?php
   endwhile;
   endif;
  ?>
<?php get_footer(); ?>