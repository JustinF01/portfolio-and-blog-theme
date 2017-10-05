<?php
$themeDirectoryPath = get_stylesheet_directory_uri();
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-82383236-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments)};
      gtag('js', new Date());
    
      gtag('config', 'UA-82383236-2');
    </script>
  <meta charset="<?php blogInfo('charset'); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php wp_title(); ?></title>
  <meta name="description" content="This blog provides articles and tutorials on how to develop web resources and web documents" />
  <meta name="keywords" content="HTML5, CSS, Javascript, Wordpress, web development, web design, how to, tutorials, code, design, responsive design" />
  <meta name="google-site-verification" content="QnOPK5ckvBjaYW2d6TgAv-zaS4sJqH1dl6OZHNY-NzU" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href="<?php echo $themeDirectoryPath; ?>/imgs/justinfester-logo-favicon.png">
  <?php wp_head(); ?>
</head>

<body>
  <div class="menu">
    <?php wp_nav_menu(array(
            'menu' => 'Primary Menu',
            'menu_class' => 'navLinksList',
          )); 
    ?>
<!--
    <ul class="navLinksList">
      <a href="#" class="navLinks">
        <li>
          <h3>About me</h3>
        </li>
      </a>
      <a href="#" class="navLinks">
        <li>
          <h3>The blog</h3>
        </li>
      </a>
      <a href="#" class="navLinks">
        <li>
          <h3>Behance portfolio</h3>
        </li>
      </a>
      <a href="#" class="navLinks">
        <li>
          <h3>Websites</h3>
        </li>
      </a>
      <a href="#" class="navLinks">
        <li>
          <h3>Contact me</h3>
        </li>
      </a>
    </ul>
-->
   <hr style="max-width: 1200px;margin: 1.5rem auto 0;color: #E5462E;" />
   <div class="nav-widgets">
     <div class="widget-area">
       <div class="full-logo">
         <img src="<?php echo $themeDirectoryPath.'../imgs/justinfester-logo-full.png' ?>" alt="Justin Fester | Web Developer" />
       </div>
     </div>
     <div class="widget-area">
       <h2>Get in touch</h2>
       <p>Leave your details and I will get back to you.</p>
       <?php dynamic_sidebar('Nav Contact'); ?>
     </div>
   </div>
    <ul class="socialLinks">
    <li>
      <a href="https://www.facebook.com/justindesignstudio/" target="_blank">
        <i class="fa fa-facebook" aria-hidden="true"></i>
      </a>
    </li>
    <li>
      <a href="https://www.behance.net/justinlfesa32c" target="_blank">
        <i class="fa fa-behance" aria-hidden="true"></i>
      </a>
    </li>
    <li>
      <a href="https://twitter.com/Justin_Fester" target="_blank">
        <i class="fa fa-twitter" aria-hidden="true"></i>
      </a>
    </li>
    <li>
      <a href="https://www.linkedin.com/in/justin-fester-1466283a/" target="_blank">
        <i class="fa fa-linkedin" aria-hidden="true"></i>
      </a>
    </li>
    <li>
      <a href="https://codepen.io/justinfes01/" target="_blank">
        <i class="fa fa-codepen" aria-hidden="true"></i>
      </a>
    </li>
  </ul>
  </div>
  <nav class="navBar">
    <div class="logo">
      <a href="<?php echo blogInfo('url') ?>">
        <img src="<?php echo $themeDirectoryPath; ?>/imgs/justinfester-logo-white.png" alt="Justin fester front end developer" />
      </a>
    </div>
    <div class="navBtn">
      <div class="bar bar-one"></div>
      <div class="bar bar-two"></div>
      <div class="bar bar-three"></div>
    </div>
  </nav>
  
