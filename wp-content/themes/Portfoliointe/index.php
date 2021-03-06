 <?php get_header();?>


<?php
   $home_paged = (get_query_var('paged'));
   $arguments = array(
    'post_type' => 'accroche',
    'post_status' => 'publish',
    'paged' => $home_paged
   );
   query_posts($arguments);
   get_template_part( 'loop', 'index' );
   ?>
   <div role="main">
    <section>
        <h1 class="hiddentitle">Accroche du site</h1>
            <?php $args = array( 'post_type' => 'accroche', 'posts_per_page' => 1 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
            the_content();
            endwhile; ?>
    </section>

    <section id="jflowperso">

        <h1 class="hiddentitle">Slider de présentation des derniers travaux</h1>
            <div id="sliderContainer">
                
                <div id="mySlides">
                <?php
                $loop = new WP_query(array('post_type'=>'slider'));                    
                if($loop->have_posts()):
                while($loop->have_posts()):
                $loop->the_post();
                ?>
                    <div id="slide<?php the_ID();?>" class="slide"> <?php the_post_thumbnail(); ?>"   
                        <div class="slideContent">
                           <!--  <a href="http://ptfwp.dreamdesgn.com/work/" title="Allez voir ce travail et tous les autres&nbsp;!"> -->
                                <h2><?php the_title();?></h2>
                                <p><?php the_excerpt();?></p>
                            <!-- </a> -->
                        </div>
                    </div>
                    
                <?php
                endwhile;
                endif;
                ?>            
            </div>

            <div id="myController">
                
                <span class="jFlowControl"></span>
                <span class="jFlowControl"></span>
                <span class="jFlowControl"></span>
                <span class="jFlowControl"></span>
            </div>
            <div class="jFlowPrev"></div>
            <div class="jFlowNext"></div>
        </div>   
        
    </section>

    <section class="sociallinks">
        <h1 class="hiddentitle">Liens vers les réseaux sociaux</h1>
        <ul>
            <?php
			$loop = new WP_query(array('post_type'=>'sfeed'));					
			if($loop->have_posts()):
			while($loop->have_posts()):
			$loop->the_post();
			$postId = get_the_ID();
			?>
                <li class="ic_<?php echo get_post_meta($postId,'icone',true);?>"> <a href ="<?php the_content();?>" title="Mon profil"> </a> </li>
            <?php
			endwhile;
			endif;
			?>
        </ul>
    </section>    

    <section class=" lastArticles">
        <h1 class="hiddentitle">Les derniers articles</h1>
            <?php $args = array( 'post_type' => 'blogart', 'posts_per_page' => 3 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
            $postId = get_the_ID();
                                $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($postId->ID), 'full');
                                $url = $thumb['0'];
                                $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
                                
            ?>
    
            <article itemscope='' itemtype='http://schema.org/Article'>
                <hgroup>
                    <h2 class="arttitle"><span class="dottitre">.</span><a href="<?php the_permalink(); ?>" title="Click to read more about it"><?php the_title(); ?></a></h2>
                    <h3 class="artinfo author">Publié par <?php the_author(); ?> le <?php the_time('d-m-Y'); ?></h3>
                </hgroup>
                <div class="articontent" itemprop='articleBody'>
                    
                    <a class="fancybox" href="<?php echo $url;?>"><?php the_post_thumbnail('taille-perso'); ?></a>

                  
                    <p class="txtart"><?php the_excerpt(); ?></p>       
                </div>
            </article>        
            <?php endwhile; ?>
            </section>
    </div>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory') ;?>/scripts/jflow.plus.js"></script>
    <script src="<?php echo get_bloginfo('template_directory') ;?>/scripts/script.js"></script>
<?php get_footer(); 