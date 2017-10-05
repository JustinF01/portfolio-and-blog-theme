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
