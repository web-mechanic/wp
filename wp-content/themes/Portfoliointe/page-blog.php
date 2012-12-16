 <?php remove_filter('the_content','wpautop');
 remove_filter('the_excerpt','wpautop');
get_header();
?>
 <section class="contentwrap" >
            <section class="leftblog">
<?php $args = array( 'post_type' => 'blogart', 'posts_per_page' => 7 );
$loop = new WP_Query( $args );
if($loop->have_posts()):
while ( $loop->have_posts() ) : $loop->the_post(); ?>

                <article class="articles">                   


                    <header >
                        <h2 class="titleblog"><span class="dottitre">.</span><a href="<?php the_permalink(); ?>" title="Click to read more about it"><?php the_title(); ?></a></h2>
                        <h3 class="artinfo"> <span class="author" ><?php the_author(); ?></span> 
                            <span class="dateArticle">Publié le <time><?php the_time('d-m Y'); ?> <span class="dotOrange">- </span> <?php the_time('G:i'); ?></time></span> 
                        </h3>
                    </header>

                    <section class="contentblog">
                        <section><?php the_post_thumbnail('blogimg'); ?></section>

                        <p>
                            <?php the_excerpt();?>
                        </p>
                    </section>

                    <footer>
                       <span class="comment"><a href="#">Commenter</a> | <a href="#">0 Commentaires</a></span> 
                       <a rel="nofollow" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php echo urlencode(get_the_title($id)); ?>" title="Share this post on Facebook">Share on Facebook</a>
                    </footer>

   
                </article> 


                 <?php endwhile;
                 endif; ?>
                    
              
              
            </section>

            <section class="rightblog">

                <section class="search">
                    
                    <form action="#" method="get">
                        <h2> <span class="dotOrange">.</span>Search</h2>
<input class="blogsearch" type="text" placeholder="Typography" >
<input class="sendingbut" type="submit" value="Go!" />
                    </form>


                    
                </section>
                <section class="tag">
                         <h2> <span class="dotOrange">.</span> Tags </h2>
                    <span class="tagclass"> <?php wp_tag_cloud( array( 'taxonomy'=> 'tags', 'format'=>'list' ) );?> </span>
                   
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
                             <li> <a href="#"> <img src="../img/sponsor.png" width="275" height="275"></a> </li>
                              <li> <a href="#"> <img src="../img/sponsor.png" width="275" height="275"></a> </li>
                               <li> <a href="#"> <img src="../img/sponsor.png" width="275" height="275"></a> </li>
                         </ul>
                </section>
            </section>
        </section>

        <?php
            get_footer();?>