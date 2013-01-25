<div class="footwrap">
    <div class="footerclass">
        <div class="cont">
            
                <nav class="altnav">
                    <h2 class="hfooter"><span class="dotOrange">.</span>Site Map</h2>
                    <?php wp_nav_menu('header_menu'); ?>
                </nav>
        </div>
        <div class="cont">
            <?php $args = array( 'post_type' => 'contact');
            $loop = new WP_Query( $args );
            if(have_posts):
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <h2 class="hfooter"><span class="dotOrange">.</span><?php the_title(); ?></h2>
                    <?php the_content();
            endwhile;
            endif; ?> 
        </div>
        <div class="cont" id="newsletter">
            <div class="footform">
                <h2 class="hfooter"><span class="dotOrange">.</span>Newsletter</h2>

            </div>
        </div>

        <div class="cont" id="extend">
            <h2 class="hfooter"><span class="dotOrange">.</span>Last Tweet</h2>

                    <div class="tweetfeed">

                        <p> Hy everybody today I'll work on my blog #myblog#bingbangboum</p> 

                        <footer Id="pubdate">2 days ago</footer>

                    </div>                                           

            </div>
            </div>
        </div>





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
