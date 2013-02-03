 <?php remove_filter('the_content','wpautop');
 remove_filter('the_excerpt','wpautop');
get_header();
?>
<div class="contentwrap" >
  <div class="leftblog">
    <section class="domaine">
      <h2 class="choose"> <span class="dotOrange">.</span>Alors plutôt print ou plutôt web?</h2>
        <div class="workclass"> <?php wp_tag_cloud( array( 'taxonomy'=> 'techniques', 'format'=>'list' ) );?> </div>
    </section>                
    <?php $args = array( 'post_type' => 'works', 'posts_per_page' => 7 );
    $loop = new WP_Query( $args );
    if($loop->have_posts()):
    while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <article class="articles" role="article" itemscope="" itemtype="http://schema.org/CreativeWork">
        <header >
          <hgroup>
          <h1 itemprop="name" class="titleblog"><span class="dottitre">.</span><a href="<?php the_permalink(); ?>" title="Click to read more about it"><?php the_title(); ?></a></h1>
          <h3 class="artinfo"> <span class="author" ><?php the_author(); ?></span> 
          <span class="dateArticle">Publié le <?php the_time('d-m Y'); ?> <span class="dotOrange">- </span> <?php the_time('G:i'); ?></span> 
          </h3>
          </hgroup>
        </header>
        <div class="contentwork">
        <?php the_post_thumbnail('workimg'); ?>
        <p><?php the_excerpt();?></p>
        </div>                    
      </article> 
    <?php 
    endwhile;
    endif; ?>
  </div>
</div>
<?php get_footer();?>