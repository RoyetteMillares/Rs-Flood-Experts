<?php get_header(); ?>

<div class="page-thumbnail-for-page">
<div class="site-branding">
    <div class="container">
        <div class="text-cont">
            <h1>News</h1>
        </div>
        <div class="page-breadcrumbs">
        
        </div>
    </div>
</div>
</div>
<div class="gradient"></div>
<div class="main-container">

<div class="row">
<div class="sidebar-cont">
<?php get_sidebar(); ?>
<div class="pagination">
<div class="linkss">
<?php  echo paginate_links();  ?>
</div>
   
</div>
</div>
<div class="article">
<?php
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); ?>
            <div class="blog-cont">
                <div class="thumbnails-img">
                     <?php the_post_thumbnail('small-thumbnail'); ?>
                </div>
                <div class="contents">
               <a href="<?php the_permalink(); ?>"><h2> <?php the_title(); ?> </h2></a>
               <p> <?php the_content(); ?> </p>
                </div>
            </div>
            <div class="date-cont">
            <span><i class="fa fa-calendar"></i></span> <small><?php the_time('F j, Y'); ?> Posted by: <span><i class="fas fa-user"></i></span> <?php the_author(); ?></small>
            </div>
<?php
  endwhile;?>
</div>

<?php
    else :
    _e('Sorry, No Posts matched your criteria.', 'textdomain');
    endif;
?>

</div>

</div>


<?php get_footer(); ?> 
