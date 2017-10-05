<?php get_header(); ?>
 
<section class="single-blogHeader header">
   <?php if (have_posts()): while (have_posts()): the_post(); ?>
     <h1 class="the-title"><?php the_title(); ?></h1>
   <?php endwhile; endif; wp_reset_postData();?>
</section>
<section id="postBody" class="body">
 <?php if (have_posts()): while(have_posts()): the_post(); ?>
   <div class="post-img">
     <?php the_post_thumbnail('large'); ?>
   </div>
   <div class="post-content">
     <?php the_content(); ?>
   </div>
 <?php endwhile; endif; ?>
 
</section>
<div class="previous">
 <i class="fa fa-arrow-left" aria-hidden="true"></i>
  <?php previous_post_link(); ?>
</div>
<div class="next">
  <?php next_post_link(); ?>
  <i class="fa fa-arrow-right" aria-hidden="true"></i>
</div>




<?php get_footer(); ?>

