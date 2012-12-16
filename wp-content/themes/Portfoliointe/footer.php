<section class="footwrap">

    <section class="footerclass">

        <section class="cont">



            <h2 class="hfooter"><span class="dotOrange">.</span>Site Map</h2>



                <nav class="altnav">

                    <?php wp_nav_menu('header_menu'); ?>

                </nav>



        </section>





        <section class="cont">

            <?php $args = array( 'post_type' => 'contact');

            $loop = new WP_Query( $args );

            if(have_posts):

            while ( $loop->have_posts() ) : $loop->the_post(); ?>

                <h2 class="hfooter"><span class="dotOrange">.</span><?php the_title(); ?></h2>

                    <?php the_content();

            endwhile;

            endif; ?>           

        </section>



                        <section class="cont" id="newsletter">

                

                <section class="footform">

                            <h2 class="hfooter"><span class="dotOrange">.</span>Newsletter</h2>

                                <fieldset id="foot">

 

                                    </section>

                </section>

        <section class="cont" id="extend">



          

                <h2 class="hfooter"><span class="dotOrange">.</span>Last Tweet</h2>

                    <section class="tweetfeed">

                        <p> Hy everybody today I'll work on my blog #myblog#bingbangboum</p> 

                        <footer Id="pubdate">2 days ago</footer>

                    </section>                                           

            </section>

   







</section>


                                    <script src="<?php echo get_bloginfo('template_directory') ;?>/scripts/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>

                                    <script src="<?php echo get_bloginfo('template_directory') ;?>/scripts/vendor/jquery-1.8.1.js"></script>

                                    <script src="<?php echo get_bloginfo('template_directory') ;?>/scripts/jflow.plus.js"></script>

                                    <script src="<?php echo get_bloginfo('template_directory') ;?>/scripts/plugins.js"></script>

                                   
<script type="text/javascript">




  var _gaq = _gaq || [];

  _gaq.push(['_setAccount', 'UA-36158123-1']);

  _gaq.push(['_setDomainName', 'dreamdesgn.com']);

  _gaq.push(['_setAllowLinker', true]);

  _gaq.push(['_trackPageview']);



  (function() {

    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

  })();



</script>



                                  



                                   

                                    </body>

                                    </html>