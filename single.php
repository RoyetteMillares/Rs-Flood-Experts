<?php get_header(); ?>


<section class="my-custom-page">
<div class="site-branding">
<h1>My Single Page.php</h1>
<?php
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); ?>
               <?php the_title('<h2 class="h2" style="text-align: center;">', '</h2>'); ?>
            <div class="img-cont">
            <div class="single-p-img">
               <?php the_post_thumbnail('medium'); ?>
            </div>
            </div>
               <?php the_content('<h1>', '</h1>'); ?>
     <?php   endwhile;
    else :
    _e('Sorry, No Posts matched your criteria.', 'textdomain');
    endif;
?>
 <?php 
    if ( comments_open() ){
        comments_template( );
    }else{
        echo '<h5 class="text-comments">"Sorry I cannot Write right now" </h5> ';
    }
?>
</div>
</section>
<?php get_footer(); ?>