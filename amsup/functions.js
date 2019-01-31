AOS.init();
/*preloader*/
$(function(){
  setTimeout(function(){
    $('.preloader').fadeOut('slow', function() {
      $(this).remove();
    });
   }, 1500);
});
/*fancybox*/
	$('[data-fancybox="gallery"]').fancybox({
		defaultType: "image",
		animationEffect: "zoom-in-out",
});
/*scrol-to-top*/
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
/*owl-carousel*/
	 var owl = $('.owl-carousel');
  owl.owlCarousel({
      items:4,
      loop:true,
      margin:10,
      nav:false,
      autoplay:true,
      autoplayTimeout:1500,
      autoplayHoverPause:true,
      responsive:{
          0:{
              items:2
          },
          600:{
              items:3
          },
          1000:{
              items:4
          }
      }
  });
  $('.play').on('click',function(){
      owl.trigger('play.owl.autoplay',[4000])
  })
  $('.stop').on('click',function(){
      owl.trigger('stop.owl.autoplay')
  })
/*Navbar*/
        $(document).ready(menu);
    function menu() {
      $('.navbar-toggler, #overlay-nav').on('click', function() {
        $('.navbar-toggler').toggleClass('active');
        $('#top, #middle, #bottom').toggleClass('active');
        $('#overlay-nav').toggleClass('active');
      });
    }
/*topo-top*/
    	(function($) {
    var $window = $(window),
        $html = $('#topo-top');

    function resize() {
        if ($window.width() < 514) {
            return $html.addClass('text-center');
        }

        $html.removeClass('text-center');
    }

    $window
        .resize(resize)
        .trigger('resize');
})(jQuery);

    	(function($) {
    var $window = $(window),
        $html = $('#topo-top-2');

    function resize() {
        if ($window.width() < 514) {
            return $html.addClass('text-center');
        }

        $html.removeClass('text-center');
    }

    $window
        .resize(resize)
        .trigger('resize');
})(jQuery);
