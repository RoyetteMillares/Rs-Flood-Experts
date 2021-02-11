<?php get_header(); ?>


<section class="my-custom-page">
    <div class="site-branding">

    <?php
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); ?>
            <div class="blog-cont">
                <div class="thumbnails-img">
                     <?php the_post_thumbnail(); ?>
                </div>
               
                <div class="contents">
               <a href="<?php the_permalink(); ?>"><h2> <?php the_title(); ?> </h2></a>
               <p> <?php the_content(); ?> </p>
                </div>
            </div>
          
            <?php endwhile; else : ?>
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
</div>
<div class="pagination">
<div class="linkss">
<?php  echo paginate_links();  ?>
</div>
   
</div>
</div>
<?php  
    endif; ?>
    
</div>
</section>

<?php get_footer(); ?>