<div class="footwrap">
    <div class="footerclass">
        <div class="cont">
            
                <nav class="altnav">
                    <h2 class="hfooter">Site Map</h2>
                    <?php wp_nav_menu('header_menu'); ?>
                </nav>
        </div>
        <div class="cont">
            <?php $args = array( 'post_type' => 'contact');
            $loop = new WP_Query( $args );
            if(have_posts):
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <h2 class="hfooter"><?php the_title(); ?></h2>
                    <?php the_content();
            endwhile;
            endif; ?> 
        </div>
        <div class="cont" id="newsletter">
            <div class="footform">
                <h2 class="hfooter">Newsletter</h2>

                <form action="http://dreamdesgn.us6.list-manage.com/subscribe/post?u=e70478803abc992d0692e8af1&amp;id=34bf400dd9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <label for="mce-EMAIL">
    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    </label>
    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="readMore">
</form>

            </div>
        </div>

        <div class="cont" id="extend">
            <h2 class="hfooter">Last Tweet</h2>

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
