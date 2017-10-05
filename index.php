<?php get_header(); ?>

<section class="header">
  <h1>Justin Fester</h1>
  <p>Web Development and Design</p>
</section>
<section class="body two-col-body">
  <main class="column posts">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
      <div class="item">
        <div class="post-img">
        <?php the_post_thumbnail('medium'); ?>
        </div>
        <div class="details">
          <h2 class="title">
            <?php the_title(); ?>
          </h2>
          <p> <?php echo get_post_meta( $id1, 'description', TRUE); ?></p>
          <a class="link button" target="_blank" href="<?php echo get_post_meta($id1, 'url', TRUE); ?>">View</a>

        </div>
      </div>
      
   <?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts or pages matched your criteria/search.' ); ?></p>
<?php endif; ?>
  </main>
  <aside class="column sidebar">
    <?php dynamic_sidebar( 'Blog Sidebar' ); ?> 
  </aside>
</section>


<?php get_footer(); ?>

