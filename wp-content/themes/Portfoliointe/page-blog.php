<?php remove_filter('the_content','wpautop');
remove_filter('the_excerpt','wpautop');
get_header();
?>
<div class="contentwrap" >
    <section class="leftblog">

        <h1 class="hiddentitle">Fil du blog</h1>
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
                <hgroup>
                <h2 class="titleblog"><span class="dottitre">.</span><a href="<?php the_permalink(); ?>" title="Click to read more about it"><?php the_title(); ?></a></h2>
                <h3 class="artinfo"> <span class="author"  itemprop='author' itemscope='' itemtype='http://schema.org/Person'><?php the_author(); ?></span> 
                    <span class="dateArticle">Publié le<?php the_time('d-m Y'); ?> <span class="dotOrange">- </span> <?php the_time('G:i'); ?></span> 
                </h3>
                </hgroup>
            </header>
            <div class="contentblog" itemprop='articleBody'>
                <div><a class="fancybox" href="<?php echo $url;?>"><?php the_post_thumbnail('blogimg'); ?></a></div>
                <p>
                    <?php the_excerpt();?>
                </p>
            </div>         

               
  
        </article> 
        <?php endwhile;
        endif; ?>             
    </section>

        </div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory') ;?>/scripts/script.js"></script>
<script src="<?php echo get_bloginfo('template_directory') ;?>/scripts/jquery.fancybox.pack.js"></script>



        <?php
            get_footer();?>