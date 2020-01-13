<?php /* Template Name: VSEEN Projects */

$the_title = get_the_title();
$paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

consoleLog($paged, "Paged: ");

$queryArgs = array(
  "post_type" => "vseen",
  "category_name" => "$the_title",
  "posts_per_page" => 3,
  "paged" => $paged,
  "order" => "ASC"
);

$the_query = new WP_Query($queryArgs);
?>

<?php get_header(); ?>

<section id="vseen-section">

  <div class="vseen-header">
    <a class="heading-logo" href="<?= site_url(); ?>">
      <img src="<?= get_theme_file_uri('/images/vseen-logo.png'); ?>" />
    </a>
    <div class="heading">
      <p class="service-name"><?php the_title(); ?></p>
      <hr />
    </div>
  </div>

  <div class="projects-container">
    <?php if ($the_query->have_posts()) : ?>
    <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
    <div class="project">
      <h2 class="project-title"><?= get_the_title();?></h2>
      <h3 class="client-name"><?= get_the_excerpt(); ?></h3>
      <a href="<?php the_permalink(); ?>"><?= get_the_post_thumbnail() ?></a>
    </div>
    <?php endwhile; 
    $paginateArgs = array(
      'total' => $the_query->max_num_pages,
      'paged' => $paged,
      'prev_text' => __('Back', 'textdomain'),
      'next_text' => __('Next', 'textdomain'),
      'type' => 'list'
    );
    $paginationLinks = paginate_links($paginateArgs);
    echo str_replace("<ul class='page-numbers'>", "<ul class='pagination'>", $paginationLinks); 
  ?>
    <?php endif; wp_reset_postdata(); ?>
  </div>
</section>

<?php get_footer(); ?>