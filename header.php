<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RS-Flood Control Expert</title>
    <?php wp_head(); ?>
    <script src="https://kit.fontawesome.com/cb1fcebade.js" crossorigin="anonymous"></script>
    <link href="//db.onlinewebfonts.com/c/2ea3b87b231d6d46708c756a0e04610e?family=GT+Pressura+Regular" rel="stylesheet" type="text/css"/>
</head>

<?php
    if( is_front_page() ):
        $my_class_yt = array('my-home-style', 'my-home');
    else:
        $my_class_yt = array('not-front-page');
    endif;
?>
<body <?php body_class($my_class_yt); ?>>
<div class="top-container">
<div class="site-branding">
<header>
    <a href="<?php echo esc_url( home_url( '/' ) );?>"><img class="logo" src="http://localhost:8888/RS-FloodControl/wp-content/themes/RS/assets/images/RS-The Flood Expert Logo.png" alt="Logo"></a>
<?php
wp_nav_menu( array(
    'theme_location' => 'primary',
    'container_class' => 'my-menu',
    'walker' => new Walker_Mymenu_Primary()
));
?>
<div class="burger">
    <div class="line1"></div>
    <div class="line2"></div>
    <div class="line3"></div>
</div>
</header>
            <div class="top-cont">
            <div class="contact">
                <div class="i-cont">
                <span class="top-span"><i class="fas fa-phone-alt"></i></span>
                </div>
                <p class="top-text">1-800-800 999</p>
                <div class="i-cont">
                <span class="top-span"><i class="fa fa-comments"></i></span>
                </div>
                <p class="top-text">Message</p>
                <div class="i-cont">
                <span class="top-span"><i class="far fa-address-book"></i></span>
                </div>
                <p class="top-text">Free Guide</p>
            </div>
            <div class="search-cont">
                    <div class="top-text-cont">
                        <p>Your Local Partner</p>
                    </div>
                    <form role="search" action="<?php echo home_url('/'); ?>">
                    <label>
                    <input type="search" class="searches" placeholder="Search" value="<?php echo get_search_query(); ?>" name="s" title="Search" />
                    </label>
                    <button type="submit" name="button" class="search-submit"><span class="i-search"><i class="fa fa-search"></i></span></button>
                    </form>
            </div>
            </div>
</div>
</div>