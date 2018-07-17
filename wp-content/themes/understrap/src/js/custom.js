(function($) {

  $(window).scroll(function() {
    $(".hero-text,#multiple2").css("opacity", 1 - $(window).scrollTop() / 350);
    //250 is fade pixels
  });

  var scroll = new SmoothScroll('a[href*="#"]');

  var $owlMain = $('.owl-carousel').owlCarousel({
    items: 1,
    //loop: true,
    navigation: true,
    // autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    navText: [
      "<i class='left'></i>",
      "<i class='right'></i>"
    ]
  });

  $('.explore-button').click(function(e) {
    $('#section-3').fadeOut('slow', function() {
      $('.owl-custom').css('display', 'block');
      $owlMain.trigger('refresh.owl.carousel').fadeIn('fast');
    });
    e.preventDefault();
  });

})(jQuery);