<?php get_header(); ?>

<div class="heading">
  <p class="service-name"><?php the_title(); ?></p>
  <hr />
</div>

<?php 
$the_title = get_the_title();
$the_query = new WP_Query(array(
  "category_name" => "$the_title",
  "post_per_page" => -1,
  "order" => "ASC"
));
?>


<div class="projects-container">
  <?php if ($the_query->have_posts()) : ?>
  <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
  <div class="project">
    <h2 class="project-title"><?= get_the_title();?></h2>
    <h3 class="client-name"><?= get_the_excerpt(); ?></h3>
    <?= get_the_post_thumbnail()?>
  </div>
  <?php endwhile; ?>
  <?php endif; wp_reset_postdata();?>
</div>
</section>

<?php get_footer(); ?>