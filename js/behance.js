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
