jQuery(document).ready(function($) {
  $(window).on('scroll', function() {
    var ws = $(window).scrollTop();
    
//    if (ws >= 320) {
//    $('.post').addClass('animated fadeIn');
//    }
    
    if (ws >= 320) {
    $('.site-post').addClass('animated fadeIn');
    }
    
  });
});

