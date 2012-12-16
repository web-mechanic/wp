<?php get_header(); ?>


<?php
if(have_posts()):
while(have_posts()):

the_post();
?>
<?php the_content(); ?>
<?php
endwhile;
endif;
?>


<?php
$args = array( 'post_type' => 'works' );
$loop = new WP_Query( $args );
if ( $loop->have_posts() ) :
while($loop->have_posts()):
$loop->the_post();
?>

<?php
endwhile;
endif;
?>




<?php get_footer(); ?>




