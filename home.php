<?php get_header(); ?>

<section class="blogHeader header">
  <h1>My Notes</h1>
  <p>This blog publishes articles and tutorials on web technology. The tools and resources one can make use of to develop web real estate.</p>
</section>
<section id="blogBody" class="body two-col-body">
  <main class="column posts">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
      <?php
        $imgUrl = get_the_post_thumbnail_url($post, 'full' );
      ?>
      <div class="item">
        <div class="post-img">
        <?php the_post_thumbnail('medium'); ?>
        </div>
        <div class="details">
          <h2 class="title">
            <?php the_title(); ?>
          </h2>
          <p><?php the_excerpt(); ?></p>
          <a class="link button" href="<?php the_permalink(); ?>">View article</a>

        </div>
      </div>
      
    <?php endwhile; endif; wp_reset_postdata(); ?>
  </main>
  <aside id="blogSidebar" class="column sidebar">
    <?php dynamic_sidebar( 'Blog Sidebar' ); ?> 
  </aside>
   <?php if (have_posts()): while (have_posts()): the_post(); ?>
    <div class="navigation"><p><?php posts_nav_link(); ?></p></div>
   <?php endwhile; endif; wp_reset_postdata(); ?>
</section>





<?php get_footer(); ?>

