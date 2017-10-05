var navButton = document.querySelector('.navBtn');
var menuShowing = false;
var menu = document.querySelector('.menu');
var navBar = document.querySelector('.navBar');
var navBarHeight = navBar.clientHeight;
var hamBars = document.getElementsByClassName('bar');
var menuHeight = menu.clientHeight;


  
/********************************* NAVIGATION FUNCTIONALITY ******************************/
  
/********************************************************************************************
  
  In order to achieve the animated menu that shows on click, I added an event listener to the humburger button.
  
  I measured the height of the menu element and then set the margin to negative amount of pixels relative to the elements height. This hides it off the page.
  
  I assigned a boolean value to a variable called "menuShowing" and is used in a conditional statement and changed 
  depending on the state(true or false).
  
  I then use css transitions to get the animated feel I am looking for.
  
  For the animation of the hamburger bars, I used transform: translateY() and rotate() css rules.
  
*********************************************************************************************/
  
 var menuHeightStr = '-' + menuHeight;
 var menuHeightNum = parseInt(menuHeightStr);
  menu.style.marginTop = parseInt(menuHeightNum + "px");
  
  navButton.addEventListener('click', function() {
     if (menuShowing == false) {
       hamBars[0].style.transform = "translateY(11px) rotate(45deg)";
       hamBars[0].style.transition = "all .55s cubic-bezier(.42, -0.41, .53, 1.38)";
       hamBars[1].style.display = "none";
       hamBars[2].style.transform = "rotate(-45deg)";
       hamBars[2].style.transition = "all .55s cubic-bezier(.42, -0.41, .53, 1.38)";
       navBar.style.backgroundColor = '#2c2b2b';
       menu.style.marginTop = navBarHeight + 'px';
       if (window.innerWidth <= 1099) {
         menu.style.bottom = 0;
         menu.style.overflowY = 'scroll';
       }
       menuShowing = true;
     } else if (menuShowing) {
       hamBars[0].style.transform = "translateY(0) rotate(0deg)";
       setTimeout(function() {hamBars[1].style.display = "block";}, 400);
       hamBars[1].style.transform = "translateY(0)";
       hamBars[2].style.transform = "rotate(0deg)";
       menu.style.marginTop = "-" + 300 + '%';
       navBar.style.backgroundColor = '#242c38';
       menu.style.bottom = '';
       menu.style.overflowY = '';
       menuShowing = false;
     }
  });


// Blog item hover aniamtion




  


