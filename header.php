<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset')?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<?php
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
          <?php endif ?>
          <?php if ($currPage->post_name == 'vseen-services' or $currPage->post_parent == $parentId) : ?>
          <svg width="30" height="30">
            <path d="M0,5 30,5" stroke="#fff" stroke-width="5" />
            <path d="M0,14 30,14" stroke="#fff" stroke-width="5" />
            <path d="M0,23 30,23" stroke="#fff" stroke-width="5" />
          </svg>
          <?php endif ?>

        </a>
      </span>
    </nav>

    <!-- Sidebar Menu: Start-->
    <div id="slide-menu" class="side-nav">
      <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
      <input type="search" placeholder="Search..." />

      <h2>Village Print</h2>
      <ul>
        <li><a href="#">Large format</a></li>
        <li><a href="#">Trifolds</a></li>
        <li><a href="#">Books</a></li>
        <li><a href="#">Postcards</a></li>
        <li><a href="#">Pull up banners</a></li>
        <li><a href="#">Specialty print</a></li>
        <li><a href="#">Custom packaging</a></li>
      </ul>

      <h2>VSEEN</h2>
      <ul>
        <li><a href="#">Website</a></li>
        <li><a href="#">AR</a></li>
        <li><a href="#">Design</a></li>
        <li><a href="#">Video Production</a></li>
        <li><a href="#">Digital Publication</a></li>
        <li><a href="#">Animation</a></li>
        <li><a href="#">Photography</a></li>
      </ul>
    </div>
    <!-- Sidebar Menu: End-->
  </header>

  <?php if (!is_home()) : ?>
  <section class="section">
    <div class="other-header">
      <a href="<?= get_permalink($parentId); ?>" class="btn-back">&lt;</a>
      <img src="<?= get_theme_file_uri('/images/vseen-logo.png'); ?>" />
    </div>
    <? endif ?>