 <?php remove_filter('the_content','wpautop');
 remove_filter('the_excerpt','wpautop');
get_header();
?>
 <section class="contentwrap" >

            <section class="leftblog"  itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting" >
<?php $args = array( 'post_type' => 'blogart', 'posts_per_page' => 7 );
$loop = new WP_Query( $args );
if($loop->have_posts()):
while ( $loop->have_posts() ) : $loop->the_post();
    $postId = get_the_ID();
                        $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($postId->ID), 'full');
                        $url = $thumb['0'];
                        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
 ?>

                <article class="articles" itemscope='' itemtype='http://schema.org/Article'>                   


                    <header >
                        <h2 class="titleblog"><span class="dottitre">.</span><a href="<?php the_permalink(); ?>" title="Click to read more about it"><?php the_title(); ?></a></h2>
                        <h3 class="artinfo"> <span class="author"  itemprop='author' itemscope='' itemtype='http://schema.org/Person' itemprop='name'><?php the_author(); ?></span> 
                            <span class="dateArticle">Publié le <time><?php the_time('d-m Y'); ?> <span class="dotOrange">- </span> <?php the_time('G:i'); ?></time></span> 
                        </h3>
                    </header>

                    <section class="contentblog" itemprop='articleBody'>
                        <section><a class="fancybox" href="<?php echo $url;?>"><?php the_post_thumbnail('blogimg'); ?></a></section>

                        <p>
                            <?php the_excerpt();?>
                        </p>
                    </section>
         
                    <footer>
                       <span class="comment"><a href="#">Commenter</a> | <a href="#"><?php comments_number('0 commentaire','1 commentaire', '% commentaires');?></a></span> 
                       <a rel="nofollow" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php echo urlencode(get_the_title($id)); ?>" title="Share this post on Facebook">Share on Facebook</a>
                    </footer>

   
                </article> 


                 <?php endwhile;
                 endif; ?>
                    
              
              
            </section>

            <section class="rightblog">

                  
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
                
                
            </section>
        </section>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory') ;?>/scripts/script.js"></script>
<script src="<?php echo get_bloginfo('template_directory') ;?>/scripts/jquery.fancybox.pack.js"></script>



        <?php
            get_footer();?>