<?php get_header(); ?>

 
<section class="page-header header">
 
  <?php if (have_posts()): while (have_posts()): the_post(); ?>
  
    <h1 class="the-title"><?php the_title(); ?></h1>
    <p>Complete the simple form below and I will get back to you as soon as possible to discuss your web development needs in more detail. You can also contact me directly via phone or email.</p>
    
  <?php endwhile; endif; ?>
  
</section>

<section class="body two-col-body" id="contactBody">
  <main class="contactBody">
   <h2>Get In Touch</h2>
   <p>Complete the form and I will get back to you.</p>
    <?php if (have_posts()): while (have_posts()): the_post(); ?>

     <div class="page-img">
       <?php the_post_thumbnail('large'); ?>
     </div>
     <div class="page-content">
       <?php the_content(); ?>
     </div>

   <?php endwhile; endif; ?>
 </main>
 <aside class="sidebar">
   <?php dynamic_sidebar('Contact Sidebar'); ?>
 </aside>
</section>





<?php get_footer(); ?>

