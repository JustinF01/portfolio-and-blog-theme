<section class="blog-feed">
<h1>Latest Notes</h1>
 <div class="feed">
   <?php 
    $args = array(
                  'posts_per_page' => 3
                ); 
    $query = new WP_Query($args);
    ?>

    <?php if($query->have_posts()): while($query->have_posts()): $query->the_post(); ?>
      <div class="post">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('medium'); ?>
          <h2><?php the_title(); ?></h2>
        </a>
      </div>
    <?php endwhile; endif; wp_reset_postdata(); ?>
  </div>
</section>