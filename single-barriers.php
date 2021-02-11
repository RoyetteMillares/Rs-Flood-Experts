<?php get_header(); ?>
<?php
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); ?>
            <div class="img-single-cont">
            <div class="single-p-img">
               <?php the_post_thumbnail('thumbnail', array('class' => 'mypost-thumbnail') ); ?>
            </div>
            </div>
<!--MAIN -->
<div class="gray-cont arrow-bottom">
<div class="main-container">
<div class="site-branding">
            <div class="cont-guide-text">
           <h1> <?php the_title(); ?> </h1>
           <h2>RS The Flood Expert make your home protected</h2>
            </div>
           <div class="container">
           <div class="cont-guide-text">
              <p> <?php the_content(); ?> </p>
           </div>
            <div class="video">
            <iframe width="530" height="315" src="https://www.youtube.com/embed/WBFAuKWlr2s" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>
                  How big should your Flood Control Systems and your storage be?
            </p>
            </div>
           </div>
     <?php   endwhile;
    else :
    _e('Sorry, No Posts matched your criteria.', 'textdomain');
    endif;
?>
</div>
</div>
</div>
<!--The Most Important Flood Control System -->
<div class="main-container">
<div class="site-branding">
<div class="cont-guide-text">
<h2>The Most Important Flood Control Barrier System</h2>
</div>
<div class="container">
<div class="cont-guide-text">
    <p>Photovoltaic systems consist of the main components: P hotovoltaikmodulen ,  mounting system and inverter . In addition, you need special solar cables (string lines) for your photovoltaic system to conduct the solar power from the roof to the inverter, plug connections, cable ducts and electrical material for connection to the house network or the public electricity network.</p>
</div>
<div class="cont-guide-text">
<p>Photovoltaic systems consist of the main components: P hotovoltaikmodulen ,  mounting system and inverter . In addition, you need special solar cables (string lines) for your photovoltaic system to conduct the solar power from the roof to the inverter, plug connections, cable ducts and electrical material for connection to the house network or the public electricity network.</p>
</div>
</div>
<div class="main-container">
<div class="container">
<div class="col-4">
<div class="cont-guide-text">
    <div class="img-cont">
    <img src="https://floodcontrol.asia/fca-assets/uploads/RS-Engineering-Assessment-for-Flood-Control.jpg" alt="assessment">
    </div>
      <p>
      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
      </p>
      <div class="btn-link-cont">
      <a class="btn-link" href="">hello btn</a>
      </div>
    </div>
</div>
<div class="col-4">
<div class="cont-guide-text">
    <div class="img-cont">
    <img  src="https://floodcontrol.asia/fca-assets/uploads/RS-Technical-Inspection-1.jpg" alt="assessment">
    </div>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
      </p>
      <div class="btn-link-cont">
      <a class="btn-link" href="">hello btn</a>
      </div>
   </div>
</div>
<div class="col-4">
<div class="cont-guide-text">
    <div class="img-cont">
    <img  src="https://floodcontrol.asia/fca-assets/uploads/RS-Preliminary-Structural-Audit-2.jpg" alt="assessment"> 
    </div> 
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
      </p>
      <div class="btn-link-cont">
      <a class="btn-link" href="">hello btn</a>
      </div>
    </div>
</div>
<div class="col-4">
<div class="cont-guide-text">
    <div class="img-cont">
    <img  src=" https://floodcontrol.asia/fca-assets/uploads/RS-Installation-and-Supervision.jpg" alt="assessment">
    </div> 
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
      </p>
      <div class="btn-link-cont">
      <a class="btn-link" href="">hello btn</a>
      </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<!--How Much does a photovoltaic system costs? -->
<div class="gray-cont arrow">
<div class="main-container">
<div class="site-branding">
   <div class="cont-guide-text">
      <h2>How much does a Flood Barrier system cost?</h2>
   </div>
<div class="container">
    <div class="img-cont">
       <img src="https://floodcontrol.asia/fca-assets/uploads/1020-Demountable-Flood-Barriers-16-822x497.jpg" alt="demountable">
    </div>
    <div class="cont-guide-text">
       <p>
       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
       </p>
       <br>
         <h5>Checklist: What does a solar system cost?</h5><br>
        <?php echo do_shortcode('[check]'); ?>
    </div>
</div>
</div>
</div>
</div>
<!--Guidess-->
<?php echo do_shortcode('[guides]'); ?>
<!--Difference between a solar system and a photovoltaic system -->
<div class="gray-cont arrow-bottom">
<div class="main-container">
  <div class="site-branding">
    <h2>Difference between a solar system and RS Flood Control System</h2>
    <div class="container">
      <div class="img-cont">
      <img src="https://floodcontrol.asia/fca-assets/uploads/RS-Demountable-Flood-Barrier.jpg" alt="Demountable Flood Barrier">
      </div>
      <div class="cont-guide-text">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
        </p>
      </div>
    </div>
  </div>
</div>
</div>
<!--How does a rs flood control system work-->
<div class="main-container">
  <div class="site-branding">
    <h2>How does a Flood Control System works</h2>
    <div class="container">
      <div class="img-cont">
        <img src="https://floodcontrol.asia/fca-assets/uploads/1010-Demountable-Flood-Barriers-14.jpg" width="549" height="311" alt="Brochure">
      </div>
      <div class="cont-guide-text">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      </div>
    </div>
  </div>
</div>
<!--How long does it take to assemble a house photovoltaic system -->
<div class="gray-cont arrow-bottom">
<div class="main-container">
  <div class="site-branding">
    <h2>How long does it take to assemble a house photovoltaic system?</h2>
    <div class="container">
      <p style="padding-right: 30px;">
      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
      </p>
    <div class="image-cont">
      <img src="https://floodcontrol.asia/fca-assets/uploads/Flood-Control-Asia-RS-Royce-Motors-Assembling-barriers.jpg" width="549" height="311" alt="rolls royce">
      <p>Image: Installation of the flood control system
      TIP: If no empty conduits were planned during the building of the house, the string lines are routed down the facade, parallel to the downpipe in an "almost" invisible cable duct. 
The inverter is usually installed in the basement, as the ambient temperature is lower here and the device is therefore better cooled. </p>
  </div>
    </div>
    </div>
</div>
</div>
<!--Which roof pitch and orientation is best for a flood control barrier system-->
<div class="main-container">
  <div class="site-branding">
    <h2>Which roof pitch and orientation is best for a flood control barrier system</h2>
    <div class="container">
      <p style="padding-right: 30px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <div class="image-cont">
        <img src="https://floodcontrol.asia/fca-assets/uploads/fm-global-webinar-featured-image.jpg" alt="webinar" width="549" height="311">
      </div>
    </div>
  </div>
</div>
<!-- How big should my demountable system be-->
<div class="main-container">
  <div class="site-branding">
    <div class="container">
        <div class="ftr-widgets-advantages-three">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <a class="btn-link-cont" href="#">To the photovoltaic calculator</a>
        </div>
        <div class="ftr-widgets-advantages-three">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <div class="img-cont">
        <img src="https://floodcontrol.asia/fca-assets/uploads/RS-Media-Subpage-From-The-Press_Online-Media-Graphics-klipp-tv.jpg" alt="klipp.tv">
        </div>
        </div>
        <div class="ftr-widgets-advantages-three">
          <p><strong>RS Flood Control Barrierss</strong> Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
    </div>
  </div>
</div>
<!--RS Flood Control Barrier System-->
<div class="main-container">
<div class="site-branding">
  <h2>RS Flood Control Barrier System</h2>
  <div class="container">
  <div class="image-cont">
      <img wdith="400" height="400" src="https://www.enerix.de/fileadmin/_processed_/4/9/csm_sonnenBatterie_8_2_seite_schwarz_60be0af749.png" alt="zxczxc">
      <p>TIP  with which you can determine your future self-consumption and a reasonable storage capacity. Measure the consumption between 6:00 a.m. and 6:00 p.m. or between 6:00 p.m. and 6:00 a.m. for about a week and calculate your day and night consumption as a percentage. </p>
  </div>
  <div class="cont-guide-text">
    <p>
    Since the feed-in tariff , which is regulated in Germany by the Renewable Energy Sources Act (EGG) , is only around 12 cents, while typical household electricity is an average of 28 cents, most solar systems are equipped with a solar power storage system. Due to the high self-consumption of up to 80 percent and the associated high savings, a power storage system pays off.
    Whether a power storage system makes sense for your individual situation and which storage capacity you need depends on your individual consumption behavior.
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    </p><br>
    <h5>Checklist: power storage yes or no?</h5>
    <?php echo do_shortcode('[check]'); ?>
  </div>
  </div>
</div>
</div>
<!--GREEN TWO!-->

<div class="guide-container arrow-guide">
  <div class="site-branding">
    <div class="container">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <div class="img-cont">
        <img style="margin-left:30px;" src="https://floodcontrol.asia/fca-assets/uploads/Capt-RS-Video.png" alt="About-uS">
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>