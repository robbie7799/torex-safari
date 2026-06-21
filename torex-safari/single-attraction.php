<?php
// Single template for attraction CPT
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <main class="main">
    <article class="attraction-single">
      <h1><?php the_title(); ?></h1>
      <?php if ( has_post_thumbnail() ) : ?>
        <div class="attraction-thumb"><?php the_post_thumbnail('large'); ?></div>
      <?php endif; ?>
      <div class="attraction-content"><?php the_content(); ?></div>
      <p><strong>Region:</strong> <?php echo get_the_term_list(get_the_ID(),'region','',', '); ?></p>
      <?php if ( function_exists('torex_brand_links') ) torex_brand_links(); ?>
    </article>
  </main>
<?php endwhile; endif; get_footer(); ?>
