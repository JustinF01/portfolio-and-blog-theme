<?php
 /*
  Template Name: Website page
 */
?>
<?php get_header(); ?>

 <?php
   $args = array(
             'post_type' => 'website'
           ); 
  $the_query = new WP_Query($args);
 ?>

<section class="header">
 
  <h1>Websites & Pages</h1>
  <p>Here you will find examples of websites and other web resources I have created,  such as landing pages and web applications.</p>
 
</section>
<section class="body two-col-body" id="websites-body">

  <main class="column posts">
    <?php if ($the_query->have_posts()): while ($the_query->have_posts()): $the_query->the_post(); ?>
      <?php
        $imgUrl = get_the_post_thumbnail_url($post, 'full' );
        $id1 = get_the_ID();
      ?>
      <div class="item">
        <div class="post-img">
        <?php the_post_thumbnail('medium'); ?>
        </div>
        <div class="details">
          <h2 class="title">
            <?php the_title(); ?>
          </h2>
          <p> <?php the_excerpt(); ?></p>
          <a class="link button" target="_blank" href="<?php the_permalink(); ?>">View</a>

        </div>
      </div>
      
    <?php endwhile; endif; wp_reset_postdata(); ?>
  </main>
  <aside class="column sidebar">
    <?php dynamic_sidebar( 'Website Sidebar' ); ?> 
  </aside>
</section>





<?php get_footer(); ?>

