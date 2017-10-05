jQuery(document).ready(function($) {
  
  var hero = $('.hero');
  var heroHeading = $('.wel');
  var intro1 = $('.intro');
  var heroHeight = hero.height();
  
  //setting the height of the main heading with margin top according to the height of the container.
  intro1.css({
    marginTop: heroHeight / 4
  });
  
  //parallax the hero section
  $(window).scroll(function() {
    var wScroll = $(this).scrollTop;
    if (wScroll <= heroHeight) { 
    intro1.css({
      transform: 'translateX(' + wScroll * 2 + '%)'
    });
    
    }
  });
  
});