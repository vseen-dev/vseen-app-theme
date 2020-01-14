<?php get_header(); ?>
<section id="vseen-section">

  <div class="vseen-header">
    <a class="heading-logo" href="<?= site_url(); ?>">
      <img src="<?= get_theme_file_uri('/images/vseen-logo.png'); ?>" />
    </a>
  </div>
  <?php while(have_posts()) : the_post(); ?>

  <div class="single-project">
    <h2 class="project-title"><?= the_title(); ?></h2>
    <h3 class="project-client"><?= get_the_excerpt(); ?></h3>
    <div class="project-content"><?= get_the_content(); ?></div>
  </div>

  <?php endwhile; ?>
</section>
<?php get_footer(); ?>