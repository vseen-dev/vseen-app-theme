<?php get_header(); ?>

<?php while(have_posts()) : the_post(); ?>

<h2 style="color: #fff;"><?= the_title(); ?></h2>
<p style="color: #fff;"><?= the_content(); ?></p>

<?php endwhile; ?>
<?php get_footer(); ?>