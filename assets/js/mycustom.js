    window.addEventListener('scroll', function(){
        let header = document.querySelector('header');
        header.classList.toggle('sticky', window.scrollY > 35);
    })
    var slideIndex = 1;
showSlides(slideIndex);
// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}
// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
var slideIndex = 0;
showSlides();
function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 8000);
}
/*Menu slider*/
const navSlide = () => {

  const burger = document.querySelector('.burger');
  const nav = document.querySelector('#menu-main-menu');
  burger.addEventListener('click',() => { 
    nav.classList.toggle('nav-active');
    //Burger animation
    burger.classList.toggle('toggles');
  });


}
navSlide();


(function(callback) {
  var ready = false;
  var detach = function() {
      if (document.addEventListener) {
          document.removeEventListener("DOMContentLoaded", completed);
          window.removeEventListener("load", completed);
      } else {
          document.detachEvent("onreadystatechange", completed);
          window.detachEvent("onload", completed);
      }
  };
  var completed = function() {
      if (!ready && (document.addEventListener || event.type === "load" || document.readyState === "complete")) {
          ready = true;
          detach();
          callback();
      }
  };
  if (document.readyState === "complete") {
      callback();
  } else if (document.addEventListener) {
      document.addEventListener("DOMContentLoaded", completed);
      window.addEventListener("load", completed);
  }
})
(function() {
  var id = 'pewl';
  var e = document.getElementById(id);
  e.classList.add('pewl');
  e.innerHTML = '<div class=\"pew-header pew-a pew-f pew-c pew-s pew-not-b pew-not-e\"><a class=\"pew-go\" href=\"https://www.provenexpert.com/enerix-alternative-energietechnik/?utm_source=Widget&amp;utm_medium=Widget&amp;utm_campaign=Widget\" target=\"_blank\" title=\"Contact Royette D Great!\">More Infos<span class=\"pew-moreInfo\"></a></a><img src=\"https://www.provenexpert.com/images/widget/provenexpert_logo_black.png\" width=\"173\" height=\"24\" alt=\"ProvenExpert\"><span class=\"pew-title-label\">RS - The Flood Expert ate the BARRI BARRI NO MI! </span> </div> <div class=\"pew-content pew-a pew-f pew-c pew-s pew-not-b pew-not-e pew-v2\"><div class=\"pew-left\"><div><img src=\"https://klipp.tv/wp-content/uploads/2021/02/Logo-140.jpg" alt=\"RS - The Flood Experts\"></div></div><div class=\"pew-middle\"><div><div class=\"pew-left pew-centerText\"><span></span><span>5.768 NA SATISFIED CUSTOMER</span></div><div class=\"pew-middle\"><div><div class=\"\" id=\"rating_1\"><p class=\"pew-1\">4.80 von 5</p><p class=\"pew-2\"><span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span></span></p><p class=\"pew-3\">RATINGS SAKALAM</p></div><div class=\"pew-hidden\" id=\"rating_2\"><p class=\"pew-1\">4.80 von 5</p><p class=\"pew-2\"><span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span></span></p><p class=\"pew-3\">RS </p></div><div class=\"pew-hidden\" id=\"rating_3\"><p class=\"pew-1\">5.00 von 5</p><p class=\"pew-2\"><span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span></span></p><p class=\"pew-3\">Royette Sakalam</p></div><div class=\"pew-hidden\" id=\"rating_4\"><p class=\"pew-1\">4.96 von 5</p><p class=\"pew-2\"><span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span></span></p><p class=\"pew-3\">RS</p></div><div class=\"pew-hidden\" id=\"rating_5\"><p class=\"pew-1\">5.00 von 5</p><p class=\"pew-2\"><span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span></span></p><p class=\"pew-3\">Barri Barri no mi! the PROTECTIVE BARRIER!</p></div><div class=\"pew-hidden\" id=\"rating_6\"><p class=\"pew-1\">4.50 von 5</p><p class=\"pew-2\"><span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold-grey\"></span></span></p><p class=\"pew-3\">RS Flood Experts</p></div><div class=\"pew-hidden\" id=\"rating_7\"><p class=\"pew-1\">5.00 von 5</p><p class=\"pew-2\"><span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span></span></p><p class=\"pew-3\">SEHR GUT</p></div><div class=\"pew-hidden\" id=\"rating_8\"><p class=\"pew-1\">4.00 von 5</p><p class=\"pew-2\"><span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-grey\"></span></span></p><p class=\"pew-3\">GUT</p></div><div class=\"pew-hidden\" id=\"rating_9\"><p class=\"pew-1\">5.00 von 5</p><p class=\"pew-2\"><span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span></span></p><p class=\"pew-3\">SEHR GUT</p></div><div class=\"pew-hidden\" id=\"rating_10\"><p class=\"pew-1\">4.50 von 5</p><p class=\"pew-2\"><span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold-grey\"></span></span></p><p class=\"pew-3\">SEHR GUT</p></div></div></div><div class=\"pew-right pew-centerText\"><div><div><span></span><span>Royette</span></div></div></div></div></div><div class=\"pew-right\"><div><div><div class=\"\" data-rating=\"1\"><span class=\"pew-author\">01.02.2021</span><span class=\"pew-feedback\">Malupit gumawa ng barrier kahit TSUNAMI ang bumangga di MAGIGIBA</span></div><div class=\"pew-hidden\" data-rating=\"2\"><span class=\"pew-author\">29.01.2021</span><span class=\"pew-feedback\">Lahat ng Babanga GIGIBA , Lahat kayang HIGITAN, TUMBASAN PATI HARAP NG KAPIT BAHAY NYO KAYA NYANG TAPATAN! BARRIER LANG!</span></div><div class=\"pew-hidden\" data-rating=\"3\"><span class=\"pew-author\">29.01.2021</span><span class=\"pew-feedback\">NAPANOOD KO KUNG PANO GINAWA ITO POTA ANG LUPIT AKALA KO LAST NA NYANG GAWA TO!</span></div><div class=\"pew-hidden\" data-rating=\"4\"><span class=\"pew-author\">28.01.2021</span><span class=\"pew-feedback\">LAST NA BANAT PARA SA MUKHANG MAKUNAT BARRIER NA GUMIGIBA NG BAHA TIME!!</span></div><div class=\"pew-hidden\" data-rating=\"5\"><span class=\"pew-author\">28.01.2021</span><span class=\"pew-feedback\">THE BARRIER THAT CAN STOP A BULLET FROM PENETRATING! HAHAH MAY BARRIER KANA SA BAHA MAY BULLET PROOF KAPA! </span></div><div class=\"pew-hidden\" data-rating=\"6\"><span class=\"pew-author\">27.01.2021</span><span class=\"pew-feedback\">LAHAT NG KLASENG BARRIER MERON GAMIT NAMIN ANG BARRI BARRI NO MI NAPAKALAS NA PROTECTIVE BARRIER MULTI PURPOSE! </span></div><div class=\"pew-hidden\" data-rating=\"7\"><span class=\"pew-author\">27.01.2021</span><span class=\"pew-feedback\">Pinakamalupit na barrier PAMATAY NG LAMOK! #HA ANO DAW?!</span></div><div class=\"pew-hidden\" data-rating=\"8\"><span class=\"pew-author\">27.01.2021</span><span class=\"pew-feedback\">Hays sobrang dame ng comment di ko na malagay</span></div><div class=\"pew-hidden\" data-rating=\"9\"><span class=\"pew-author\">27.01.2021</span><span class=\"pew-feedback\">Barrier Barrier No Mi By: Bartolomeo</span></div><div class=\"pew-hidden\" data-rating=\"10\"><span class=\"pew-author\">27.01.2021</span><span class=\"pew-feedback\">RS Flood Expert zzzz</span></div></div></div></div></div> <div class=\"pew-footer pew-a pew-f pew-c pew-s pew-not-b pew-not-e\"><div style=\"float:right;\"><a style=\"float:left;\" class=\"pew-go\" href=\"https://royette.netlify.app\" target=\"_blank\" title=\"Royette lang Malakas\">More Infos<span class=\"pew-moreInfo\"></a></a></div><div><span class=\"pew-bold\">Top Competencies</span><span class=\"pew-check\"></span>Malupit pa sa malupit<span class=\"pew-check\"></span>Communication<span class=\"pew-check\"></span>Professional as FACT!</div></div>';
  if (typeof pejquery == 'undefined') {
      var pe_scr = document.createElement('script');
      pe_scr.src = 'https://www.provenexpert.com/js/lib/pejquery.js';
      pe_scr.onload = pewFeedbackSlider;
      document.getElementsByTagName('body')[0].appendChild(pe_scr);
  } else {
      pewFeedbackSlider();
  }
  if (navigator.appVersion.search('MSIE 8.0') != -1) {
      var checkForJquery = function(iteration) {
          if (iteration < 50) {
              window.setTimeout(function() {
                  if (typeof pejquery == 'undefined') {
                      checkForJquery(iteration + 1);
                  } else {
                      pejquery('head').append('<link rel="stylesheet" type="text/css" href="https://www.provenexpert.com/css/widget_landing.css" media="screen,print">');
                      pejquery('body').append('<script src="https://www.provenexpert.com/js/lib/respond.js"></script>');
                      pewFeedbackSlider();
                  }
              }, 50);
          }
      };
      checkForJquery(0);
  }

  function pewFeedbackSlider() {
      var $container = pejquery('#' + id);
      var $e = $container.find('.pew-content > .pew-right > div > div');
      var $r = $container.find('.pew-content > .pew-middle .pew-middle > div');
      if ($e.length === 0) {
          return;
      }
      if ($e.find('> div').length < 2) {
          return;
      }
      var duration = 800;
      var pewAnimate = function($a, $n, $w) {
          $a.css({
              left: '0%'
          });
          $n.css({
              left: '110%'
          }).removeClass('pew-hidden');
          $n.animate({
              left: '0%'
          }, {
              duration: duration
          });
          $a.animate({
              left: '-110%'
          }, {
              duration: duration,
              complete: function() {
                  $a.addClass('pew-hidden').appendTo($w);
              }
          });
      };
      var pewSwitch = function() {
          var $a = $e.find('> div:not(.pew-hidden)');
          var $n = $a.next();
          pewAnimate($a, $n, $e);
          if ($r.length > 0) {
              pewAnimate($r.find('#rating_' + $a.data('rating')), $r.find('#rating_' + $n.data('rating')), $r);
          }
      };
      setInterval(pewSwitch, 5000);
  }

});
(function() {
  var b = document.createElement('link');
  b.type = 'text/css';
  b.rel = 'stylesheet';
  b.href = 'https://www.provenexpert.com/css/widget_landing.css';
  var s = document.getElementsByTagName('head')[0];
  s.appendChild(b, s);
})();  








