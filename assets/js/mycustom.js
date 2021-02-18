    window.addEventListener('scroll', function(){
        const header = document.querySelector('header');
        header.classList.toggle('sticky', window.scrollY > 35);
    })
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
  if (slideIndex > slides.length) 
  {slideIndex = 1}
  else{
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 8000);
  }
}
/*Proven Expert*/




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
  

const clickBox = () => {
  const productBox = document.querySelector('#product-boxOne');
  const show = document.querySelector('.product-content');
  

  productBox.addEventListener('click', () => {

    show.classList.add('show');
  });
}
clickBox();

/*Close Product Content*/


const closeContent = ()  => {
/*Selectors*/
    const close = document.querySelector('.product-close');
    const show = document.querySelector('.product-content');
    close.addEventListener('click', () => {
    show.classList.remove('show');
    });
}
closeContent();



/*Product Image Slider*/

let thumbnails = document.getElementsByClassName('thumbnails');

let activeImages = document.getElementsByClassName('active');

for (let i = 0; i < thumbnails.length; i++){
    thumbnails[i].addEventListener('mouseover', function(){
        console.log(activeImages)
        
        if (activeImages.length > 0){
                activeImages[0].classList.remove('active')
        }
        this.classList.add('active')
        document.getElementById('featured').src = this.src
    });
}












(function() {
    var id = 'pewl';
    var e = document.getElementById(id);
    e.classList.add('pewl');
    e.innerHTML = '<div class=\"pew-header pew-a pew-f pew-c pew-not-s pew-not-b pew-not-e\"><a class=\"pew-go\" href=\"https://www.provenexpert.com/enerix-alternative-energietechnik/?utm_source=Widget&amp;utm_medium=Widget&amp;utm_campaign=Widget\" target=\"_blank\" title=\"RS lang sakalam\">More Infos<span class=\"pew-moreInfo\"></a></a><img src=\"https://www.provenexpert.com/images/widget/provenexpert_logo_black.png\" width=\"173\" height=\"24\" alt=\"ProvenExpert\"><span class=\"pew-title-label\">RS lang sakalam</span> </div> <div class=\"pew-content pew-a pew-f pew-c pew-not-s pew-not-b pew-not-e pew-v1\"><div class=\"pew-left\"><div><img src=\"http://localhost:8888/RS-FloodControl/wp-content/themes/RS/assets/images/RS-The Flood Expert Logo.png\" alt=\"RS The Flood Control Expert\"></div></div><div class=\"pew-middle\"><div><div class=\"pew-left pew-centerText\"><p class=\"pew-1\">4.75 out of 5</p><p class=\"pew-2\"><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold\"></span><span class=\"pew-star pew-gold-grey\"></span></span></p><p class=\"pew-3\">Certified FactBoy!</p><p class=\"pew-4\">5.928 Stars</p></div><div class=\"pew-middle pew-centerText\"><span class=\"pew-recImage\"></span><p class=\"pew-1\">99%</p><p class=\"pew-2\">Approved</p></div><div class=\"pew-right\"><div><div><div class=\"pew-check\"></div><p>Customer Service<span>VERY GOOD (4.80)</span></p></div></div><div><div><div class=\"pew-check\"></div><p>Price/Performance<span>VERY GOOD (4.53)</span></p></div></div></div></div></div><div class=\"pew-right\"><div><div><div class=\"\" data-rating=\"1\"><span class=\"pew-author\">17.02.2021</span><span class=\"pew-feedback\">5 OUT OF 5 START</span></div><div class=\"pew-hidden\" data-rating=\"2\"><span class=\"pew-author\">17.02.2021</span><span class=\"pew-feedback\">Pinakamalakas pa sa malupit humagupit</span></div><div class=\"pew-hidden\" data-rating=\"3\"><span class=\"pew-author\">17.02.2021</span><span class=\"pew-feedback\">Kahit TSUNAMI KAYANG PIGILAN</span></div><div class=\"pew-hidden\" data-rating=\"4\"><span class=\"pew-author\">16.02.2021</span><span class=\"pew-feedback\">Lahat ng bumangga sa barrier gumiba</span></div><div class=\"pew-hidden\" data-rating=\"5\"><span class=\"pew-author\">16.02.2021</span><span class=\"pew-feedback\">Barrier na sing kapal ng mukha ng kapitbahay nyo hahaha</span></div><div class=\"pew-hidden\" data-rating=\"6\"><span class=\"pew-author\">16.02.2021</span><span class=\"pew-feedback\">The Barrier that you need</span></div><div class=\"pew-hidden\" data-rating=\"7\"><span class=\"pew-author\">16.02.2021</span><span class=\"pew-feedback\">5 Star para sa malakas hahahaha</span></div><div class=\"pew-hidden\" data-rating=\"8\"><span class=\"pew-author\">16.02.2021</span><span class=\"pew-feedback\">Barrier barrier no mi!</span></div><div class=\"pew-hidden\" data-rating=\"9\"><span class=\"pew-author\">16.02.2021</span><span class=\"pew-feedback\">By Bartolomeo the cannibal</span></div><div class=\"pew-hidden\" data-rating=\"10\"><span class=\"pew-author\">16.02.2021</span><span class=\"pew-feedback\">Bari Bari no mi!</span></div></div></div></div></div> <div class=\"pew-footer pew-a pew-f pew-c pew-not-s pew-not-b pew-not-e\"><div style=\"float:right;\"><a style=\"float:left;\" class=\"pew-go\" href=\"https://www.provenexpert.com/enerix-alternative-energietechnik/?utm_source=Widget&amp;utm_medium=Widget&amp;utm_campaign=Widget\" target=\"_blank\" title=\"More Infos\">More Infos<span class=\"pew-moreInfo\"></a></a></div><div><span class=\"pew-bold\">Top-Competencies</span><span class=\"pew-check\"></span>Communication<span class=\"pew-check\"></span>Customer Loyalty<span class=\"pew-check\"></span>Professionalism</div></div>';
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
