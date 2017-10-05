<?php get_header(); ?>
 
<section class="single-webHeader header">
   <?php if (have_posts()): while (have_posts()): the_post(); ?>
     <h1 class="the-title"><?php the_title(); ?></h1>
   <?php endwhile; endif; wp_reset_postdata();?>
</section>
<section id="single-website-body" class="body">
 <div class="view" id="view">
   <?php if (have_posts()): while(have_posts()): the_post(); ?>

     <?php //$imgURL = get_the_post_thumbnail_url($post, 'full' ); ?>

     <div class="post-image" id="post-image">
       <?php the_post_thumbnail('full'); ?>
     </div>

   <?php endwhile; endif; wp_reset_postdata(); ?>
 </div>
</section>

<div class="post-info">
 
  <?php if (have_posts()): while(have_posts()): the_post(); ?>

    <?php $id = get_the_ID(); ?>

    <p><?php the_content(); ?></p>

    <a id="url" class="url" href="<?php echo get_post_meta( $id, 'url', TRUE); ?>" target="_blank">View the site</a>

  <?php endwhile; endif; ?>
     
</div>
<div class="previous">
 <i class="fa fa-arrow-left" aria-hidden="true"></i>
  <?php previous_post_link(); ?>
</div>
<div class="next">
  <?php next_post_link(); ?>
  <i class="fa fa-arrow-right" aria-hidden="true"></i>
</div>

<?php get_footer(); ?>

