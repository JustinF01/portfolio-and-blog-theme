<?php get_header(); ?>

 
<section class="page-header header">
 
  <?php if (have_posts()): while (have_posts()): the_post(); ?>
  
    <h1 class="the-title"><?php the_title(); ?></h1>
    
  <?php endwhile; endif; ?>
  
</section>

<section id="pageBody" class="body">
  <div class="innerBody">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>

     <div class="page-img">
       <?php the_post_thumbnail('large'); ?>
     </div>
     <div class="page-content">
       <?php the_content(); ?>
     </div>

   <?php endwhile; endif; ?>
 </div>
</section>





<?php get_footer(); ?>

