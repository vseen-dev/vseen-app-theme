<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset')?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<?php
global $post;
$currentSlug = $post->post_name;
$parentId = wp_get_post_parent_id(get_the_ID());
$currPage = get_queried_object();
?>

<body <?php body_class(); ?>>
  <header>
    <nav class="navbar">
      <span class="open-slide" onclick="openSlideMenu()">
        <a href="#">
          <?php if ($currPage->post_name == 'vpm-services' or $currPage->post_parent == $parentId) : ?>
          <svg width="30" height="30">
            <path d="M0,5 30,5" stroke="#000" stroke-width="5" />
            <path d="M0,14 30,14" stroke="#000" stroke-width="5" />
            <path d="M0,23 30,23" stroke="#000" stroke-width="5" />
          </svg>
          <?php endif; ?>
          <?php if ($currPage->post_name == 'vseen-services' or $currPage->post_parent == $parentId) : ?>
          <svg width="30" height="30">
            <path d="M0,5 30,5" stroke="#fff" stroke-width="5" />
            <path d="M0,14 30,14" stroke="#fff" stroke-width="5" />
            <path d="M0,23 30,23" stroke="#fff" stroke-width="5" />
          </svg>
          <?php endif; ?>
        </a>
      </span>
    </nav>

    <!-- Sidebar Menu: Start-->
    <div id="slide-menu" class="side-nav">
      <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
      <input type="search" placeholder="Search..." />

      <h2>VSEEN</h2>
      <ul>
        <li><a href="<?= site_url('/website'); ?>">Website</a></li>
        <li><a href="<?= site_url('/ar'); ?>">AR</a></li>
        <li><a href="<?= site_url('/design'); ?>">Design</a></li>
        <li><a href="<?= site_url('/video-production'); ?>">Video Production</a></li>
        <li><a href="<?= site_url('/digital-publication'); ?>">Digital Publication</a></li>
        <li><a href="<?= site_url('/animation'); ?>">Animation</a></li>
        <li><a href="<?= site_url('/photography'); ?>">Photography</a></li>
      </ul>

      <h2>Village Print</h2>
      <ul>
        <!-- //! ADD LINKS LATER -->
        <li><a href="#">Large format</a></li>
        <li><a href="#">Trifolds</a></li>
        <li><a href="#">Books</a></li>
        <li><a href="#">Postcards</a></li>
        <li><a href="#">Pull up banners</a></li>
        <li><a href="#">Specialty print</a></li>
        <li><a href="#">Custom packaging</a></li>
      </ul>
    </div>
    <!-- Sidebar Menu: End-->
  </header>

  <?php if (!is_front_page()) : ?>
  <section id="vseen-section">
    <div class="vseen-header">
      <?php if ($currentSlug === 'vseen-services') : ?>
      <a class="btn-back" href="<?= site_url(); ?>">&lt;</a>
      <?php elseif ($parentId !== 0 and $currentSlug !== 'vseen-services' and $currentSlug !== 'home') : consoleLog('Parent does not equal 0'); ?>
      <a class="btn-back" href="<?= get_permalink($parentId); ?>">&lt;</a>
      <?php else : consoleLog('Parent equals 0'); ?>
      <a class="btn-back" href="<?= wp_get_referer(); ?>">&lt;</a>
      <?php endif; ?>
      <a class="heading-logo" href="<?= site_url(); ?>">
        <img src="<?= get_theme_file_uri('/images/vseen-logo.png'); ?>" />
      </a>
    </div>
    <?php endif; ?>