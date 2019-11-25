<?php get_header(); ?>

<div class="heading">
  <p class="service-name"><?php the_title(); ?></p>
  <hr />
</div>

<div class="projects-container">
  <div class="project">
    <h2 class="project-title">Project Title</h2>
    <h3 class="client-name">Client Name</h3>
    <img src="<?= get_theme_file_uri('/images/placeholder-img.png')?>" alt="Project Title" />
  </div>

  <div class="project">
    <h2 class="project-title">Project Title</h2>
    <h3 class="client-name">Client Name</h3>
    <img src="<?= get_theme_file_uri('/images/placeholder-img.png')?>" alt="Project Title" />
  </div>

  <div class="project">
    <h2 class="project-title">Project Title</h2>
    <h3 class="client-name">Client Name</h3>
    <img src="<?= get_theme_file_uri('/images/placeholder-img.png')?>" alt="Project Title" />
  </div>
</div>
</section>

<?php get_footer(); ?>