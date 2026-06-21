<?php
/*
Template Name: Attractions Listing
*/
get_header(); ?>
<main class="main">
  <h1>Uganda Attractions</h1>
  <div class="attraction-grid">
  <?php
    $q = new WP_Query(array('post_type'=>'attraction','posts_per_page'=>-1));
    while($q->have_posts()): $q->the_post(); ?>
      <div class="attraction-card">
        <a href="<?php the_permalink(); ?>"><?php if(has_post_thumbnail()) the_post_thumbnail('medium'); ?></a>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p><?php the_excerpt(); ?></p>
      </div>
  <?php endwhile; wp_reset_postdata(); ?>
  </div>
</main>
<?php get_footer(); ?>
