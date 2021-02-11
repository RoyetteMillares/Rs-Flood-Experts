<footer>

        <div class="site-branding">
        <div class="container">
    <div class="ftr-widgets-advantages-three">
        <div class="text">
                <h3>
                    RS-Flood Control Expert
                </h3>
                <p>
                Let RS Flood Experts give you the best advice to protect your properties, houses, and commercial buildings.
                Find out how our Flood Experts can solve your flood problem!
                </p>
            <div class="center-items">
                <span class="star"><i class="fas fa-star"></i></span>
                <span class="star"><i class="fas fa-star"></i></span>
                <span class="star"><i class="fas fa-star"></i></span>
                <span class="star"><i class="fas fa-star"></i></span>
                <span class="star"><i class="fas fa-star-half-alt"></i></span>
            </div>
            <a href="" style="color:#fff; text-align:center;"><p>
                5699 reviews on ProvenExpert.com
            </p>
            </a>
            <hr style="margin: 10px;">
            <div class="social-row">
                <span class="social-ftr"><i class="fab fa-facebook"></i></span>
                <span class="social-ftr"><i class="fab fa-youtube-square"></i></span>
                <span class="social-ftr"><i class="fab fa-whatsapp-square"></i></span>
                <span class="social-ftr"><i class="fab fa-twitter-square"></i></span>
                <span class="social-ftr"><i class="fab fa-instagram-square"></i></span>
            </div>
            <hr style="margin: 10px;">
            <div class="center-items">
                <img width="150px" height="150px" src="https://floodcontrol.asia/fca-assets/uploads/Layer-52-1.png" alt="German Quality">
            </div>
        </div>
    </div>
    <div class="ftr-widgets-advantages-three">
                <div class="text">
                    <h3>
                        Flood Control News
                    </h3>
        <?php
$lastposts = get_posts( array(
    'posts_per_page' => 5
) );
 
if ( $lastposts ) {
    foreach ( $lastposts as $post ) :
        setup_postdata( $post ); ?>
        <p>  <a style="color: #fff; text-decoration:none;" href="<?php the_permalink(); ?>"> > <?php the_title(); ?>  </a></p>
        
        <hr style="margin: 10px;">
    <?php
    endforeach; 
    wp_reset_postdata();
}
?>
    </div>
    </div>
    <div class="ftr-widgets-advantages-three"> 
                <div class="text">
                    <h3>
                        Flood Barriers Products </h3>

<div class="strong">               
<strong>Home</strong>
            </div>
<?php
$latestbarriers = get_posts(array(
    'post_per_page' => 5,
    'post_type' => 'barriers',
    'category_name' => 'home',
));
if ( $latestbarriers ){
    foreach ( $latestbarriers as $post ) :
        setup_postdata( $post ); ?>
     
    <p>  <a style="color: #fff; text-decoration:none;" href="<?php the_permalink(); ?>"> > <?php the_title(); ?>  </a></p>
        <?php
            endforeach;
wp_reset_postdata();
}           
?>
<div class="strong">
<strong>Commercial Establishments</strong>
</div>
<?php
$commercial = get_posts(array(
    'post_per_page' => 5,
    'post_type' => 'barriers',
    'category_name' => 'commercial-establishments',
));
if ( $commercial ){
    foreach ( $commercial as $post ) :
        setup_postdata( $post ); ?>
     
    <p>  <a style="color: #fff; text-decoration:none;" href="<?php the_permalink(); ?>"> > <?php the_title(); ?>  </a></p>
        <?php
            endforeach;
wp_reset_postdata();
}           
?>
<div class="strong">
<strong>Government Facilities</strong>
</div>
<?php 
    $government = get_posts(array(
        'post_type' => 'barriers',
        'post_per_page' => 5,
        'category_name' => 'government-facilities',
    ));
if ( $government ){
    foreach ( $government as $post ) :
        setup_postdata ($post ); ?>

        <p><a style="color:#fff; text-decoration:none; " href="<?php the_permalink(); ?>"> > <?php the_title();?></a></p>
    <?php
    endforeach;
    wp_reset_postdata();
}
?>
<div class="strong">
<strong>Industrial Infrastructures</strong>
</div>
<?php
 $industrial = get_posts(array (
        'post_type' => 'barriers',
        'post_per_page' => 5,
        'category_name' => 'industrial-and-infrastructures'
 ));
 if ( $industrial ){
     foreach ($industrial as $post ) :
        setup_postdata( $post ); ?>
<p><a style="color:#fff; text-decoration:none;" href="<?php the_permalink(); ?>"> > <?php the_title(); ?></a></p>
 <?php
    endforeach;
    wp_reset_postdata();
}
?>
</div>
</div>
        </div>
        </div>
<div class="ftr-copyright">
    <div class="ftr-cont-color">
<div class="site-branding">
        <div class="container-ftr">
            <ul class="ftr-sub-ul">
                <li>Newsletter</li>
                <li>Imprint</li>
                <li>Data Protection</li>
                <li>Log In</li>
            </ul>
        </div>
    </div>
</div>
</div>
</footer>
<script src="https://kit.fontawesome.com/cb1fcebade.js" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
</body>
</html>