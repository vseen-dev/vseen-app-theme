<?php get_header(); ?>
<section id="vpm-section">

  <div class="vpm-header">
    <a class="heading-logo" href="<?= site_url(); ?>">
      <img src="<?= get_theme_file_uri('/images/vpm-logo.png'); ?>" />
    </a>
  </div>

  <?php while(have_posts()) : the_post(); ?>
  <?php 
    $client_name = get_post_meta(get_the_ID(), 'client_name', true);
  ?>
  <div class="single-project">
    <h2 class="project-title"><?= the_title(); ?></h2>
    <h3 class="project-client"><?= $client_name; ?></h3>
    <div class="project-content"><?= get_the_content(); ?></div>
  </div>

  <?php endwhile; ?>
</section>
<?php get_footer(); ?>