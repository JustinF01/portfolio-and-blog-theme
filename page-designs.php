<?php get_header(); ?>

 
<section class="page-header header">
 
  <?php if (have_posts()): while (have_posts()): the_post(); ?>
  
    <h1 class="the-title"><?php the_title(); ?></h1>
    <p>Here are designs and artwork that I have created over the years. These cards on this page are hosted on behance.net and can be viewed there in more detail. Make sure to share the love by liking or sharing.</p>
    
  <?php endwhile; endif; ?>
  
</section>

<section id="pageBody" class="body">
  <section class="main-container-page-behance">
    <header class="behance-header">
      <p class="fields"></p>
    </header>
    <section id="behance-content">

    </section>

  </section>
</section>





<?php get_footer(); ?>

