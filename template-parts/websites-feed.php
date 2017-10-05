<section class="site-feed">
<h1>Websites & Pages</h1>
 <div class="siteFeed">
   <?php 
    $args = array(
                  'post_type' => 'website',
                  'posts_per_page' => 6
                ); 
    $query = new WP_Query($args);
    ?>

    <?php if($query->have_posts()): while($query->have_posts()): $query->the_post(); ?>
      <div class="site-post">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('medium'); ?>
          <h2><?php the_title(); ?></h2>
        </a>
      </div>
    <?php endwhile; endif; wp_reset_postdata(); ?>
  </div>
</section>