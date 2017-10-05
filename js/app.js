setTimeout(function() {
  
  var bar = document.getElementById('wpadminbar');
  
  if (bar) {
    var nav = document.querySelector('.navBar');
    nav.style.top = 32 + 'px';
  }
  
  
}, 500);




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


jQuery(document).ready(function($) {
  
  var apiKey = 'IvM5mjGp7Yw2qzcmqkaZmXK0WYVrN9Hp';
  var userName = 'justinlfesa32c';
  var projects = ['55247327', '55247477', '55247751', '55247635'];
  var behanceUserAPI = 'http://www.behance.net/v2/users/'+userName+'/projects?callback=?&api_key='+apiKey;
  var projectName = [];
  var projectImgURL = [];
  
  $.getJSON(behanceUserAPI, function(data) {
   
    var projects = data.projects;
    var fields = projects[0].owners.fields;
    
    for (var i = 0; i < projects.length; i++) {
        var a = document.createElement('a');
        a.setAttribute('href', projects[i].url);
        a.setAttribute('target', '_blank');
        a.setAttribute('class', 'project-button');
        var divViews = document.createElement('div');
        divViews.setAttribute('class', 'project-views');
        divViews.innerHTML = "Views: " + projects[i].stats.views;
        a.innerHTML = '<p>View project on behance</p><i class="fa fa-behance" aria-hidden="true"></i>';
        var div = document.createElement('div');
        div.setAttribute('class', 'projectItem');
        var img = document.createElement('img');
        img.setAttribute('src', projects[i].covers[404])
        div.appendChild(img);
        var name = document.createElement('div');
        name.setAttribute('class', 'project-name');
        name.innerHTML = projects[i].name;
        div.appendChild(name);
        div.appendChild(divViews);
        div.appendChild(a);
        var content = document.getElementById('behance-content');
        content.appendChild(div);
     
    }
    
  });
  
  
});

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

var linkEl = document.getElementById('url');
var linkSrc = linkEl.getAttribute('href');
var img = document.getElementById('post-image');
var wWidth = window.innerWidth;
var view = document.getElementById('view');

if (wWidth >= 1250) {
  try {
  img.style.display = 'none';
  var iframe = document.createElement('iframe');
  iframe.setAttribute('width', 100 + '%');
  iframe.setAttribute('height', 582);
  iframe.setAttribute('src', linkSrc);
  view.appendChild(iframe);
  } catch(err) {
    if (err.X-Frame-Options == SAMEORIGIN) {
      img.style.display = 'block';
    }
  }
} else {
  console.log("I'm great for the job!");
}
