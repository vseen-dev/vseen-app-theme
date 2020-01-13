<?php get_header(); ?>
<section id="vpm-section">
<?php while(have_posts()) : the_post(); ?>

<div class="single-project">
  <div class="project-content"><?= the_content(); ?></div>
  <h2 class="project-title"><?= the_title(); ?></h2>
  <h3 class="project-client"><?= the_excerpt(); ?></h3>
</div>

<?php endwhile; ?>
</section>
<?php get_footer(); ?>