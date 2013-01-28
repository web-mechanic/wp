<?php if ( have_comments() ) : ?>  
<h4><?php printf( _n( 'Il y a un commentaire', 'Il y a %1$s Commentaires', get_comments_number() ),number_format_i18n( get_comments_number() ) );  
?></h4>  


<?php foreach ($comments as $comment) { ?>  
<div class="comment">  
    <a name="comment-<?php comment_ID(); ?>"></a>  
    <?php echo get_avatar( $comment->comment_author_email, $size = '40'); ?>  
    <div class="comment-right">  
        <span class="comment-author"><a href="<?php comment_author_url(); ?>"><?php comment_author(); ?></a></span> <span class="comment-date">le <?php comment_date(); ?></span>  
        <p><?php echo $comment->comment_content; ?></p>  
    </div>  
    <div class="spacer"></div>  
</div><!-- comment -->  
<?php } ?>   
<?php else: ?>  
<h4>Il n'y a pas de commentaire</h4>  
<?php endif; ?>  

<?php if ( ! comments_open() ) : ?>  
    <h4>Les commentaires sont fermés</h4>  
<?php else: ?>  
<h4>Laisser un commentaire</h4>  
<a name="comments"></a>  
            <form action="<?php bloginfo('url'); ?>/wp-comments-post.php" method="post" id="commentform">  
                <input type='hidden' name='comment_post_ID' value='<?php echo $post->ID; ?>' id='comment_post_ID' />  
                <input type="text" value="Name" name="author" onfocus="if(this.value == this.defaultValue) this.value = ''"><label>Nom</label><br />  
                <input type="text" value="Email" name="email" onfocus="if(this.value == this.defaultValue) this.value = ''"><label>E-mail</label><br />  
                <input type="text" value="" name="url"><label>Site web (optionnel)</label><br />  
                <textarea rows="7" cols="60" name="comment"></textarea><br />  
                <input class="readMore" type="submit" value="Commenter!" />  
            </form>  
<?php endif; ?>  