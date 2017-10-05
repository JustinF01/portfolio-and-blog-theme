jQuery(document).ready(function($) {
  
  var title = $('.the-title');
  var intro = $('.intro');
  $(window).on('scroll', function() {
    
    var st = $(this).scrollTop();
      title.css({
        opacity: 1 - st/200
      });
      intro.css({
        opacity: 1 - st/200
      });
    
    });
});
