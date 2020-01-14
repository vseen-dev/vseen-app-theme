<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset')?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<?php
global $post;
global $wp;
$currPage = get_queried_object();
$currentUrl = home_url(add_query_arg(array(), $wp->request));
$pageName = $post->post_name;
$parentId = wp_get_post_parent_id(get_the_ID());
$parentSlug = get_permalink($parentId);

$referer = wp_get_referer();
consoleLog($referer, 'Referer: ');

consoleLog($post, 'Global Post: ');
consoleLog($currPage, 'Current Page: ');
consoleLog($currentUrl, 'Current Url: ');
consoleLog($pageName, 'Page Name: ');
consoleLog($parentSlug, 'Parent Slug: ');
consoleLog($parentId, 'Parent ID: ');

?>

<body <?php body_class(); ?>>
  <header>

    <?php if(is_front_page()) :?>
    <nav class="navbar" style="display: block">
      <?php else : ?>
      <nav class="navbar">
        <?php endif; ?>

        <?php if (!is_front_page()) : //! start ?>

        <?php if ($pageName === 'vseen-services' and $parentId === 0) : ?>
        <a class="btn-back white" href="<?= site_url(); ?>">&lt;</a>
        <?php elseif ($pageName === 'vpm-services' and $parentId === 0) : ?>
        <a class="btn-back black" href="<?= site_url(); ?>">&lt;</a>
        <?php endif; ?>

        <?php if (strpos($currentUrl, 'vseen-services') !== false and $parentId !== 0) : ?>
        <a class="btn-back white" href="<?= wp_get_referer(); ?>">&lt;</a>
        <?php elseif (strpos($currentUrl, 'vpm-services') !== false and $parentId !== 0) : ?>
        <a class="btn-back black" href="<?= wp_get_referer(); ?>">&lt;</a>
        <?php endif; ?>

        <?php if (strpos($currentUrl, 'vseen-project') !== false) : ?>
        <a class="btn-back white" href="<?= wp_get_referer(); ?>">&lt;</a>
        <?php elseif (strpos($currentUrl, 'vpm-project') !== false) : ?>
        <a class="btn-back black" href="<?= wp_get_referer(); ?>">&lt;</a>
        <?php endif; ?>

        <?php endif; //! end ?>

        <?php if (is_front_page()) :?>
        <span id="open-slide" class="open-slide float-right">
          <a href="#">
            <svg width="30" height="30">
              <path d="M0,5 30,5" stroke="#fff" stroke-width="2" />
              <path d="M0,14 30,14" stroke="#fff" stroke-width="2" />
              <path d="M0,23 30,23" stroke="#fff" stroke-width="2" />
            </svg>
          </a>
        </span>
        <?php elseif (strpos($currentUrl, 'vpm-services') !== false or strpos($currentUrl, 'vpm-project') !== false) : ?>
        <span id="open-slide" class="open-slide">
          <a href="#">
            <svg width="30" height="30">
              <path d="M0,5 30,5" stroke="#000" stroke-width="2" />
              <path d="M0,14 30,14" stroke="#000" stroke-width="2" />
              <path d="M0,23 30,23" stroke="#000" stroke-width="2" />
            </svg>
          </a>
        </span>
        <?php elseif (strpos($currentUrl, 'vseen-services') !== false or strpos($currentUrl, 'vseen-project') !== false) : ?>
        <span id="open-slide" class="open-slide">
          <a href="#">
            <svg width="30" height="30">
              <path d="M0,5 30,5" stroke="#fff" stroke-width="2" />
              <path d="M0,14 30,14" stroke="#fff" stroke-width="2" />
              <path d="M0,23 30,23" stroke="#fff" stroke-width="2" />
            </svg>
          </a>
        </span>
        <?php endif; ?>

      </nav>

      <!-- Sidebar Menu: Start-->
      <div id="slide-menu" class="side-nav">
        <a id="close-slide" class="close-slide" href="#">&times;</a>
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
          <li><a href="<?= site_url('/large-print'); ?>">Large Print</a></li>
          <li><a href="<?= site_url('/trifolds'); ?>">Trifolds</a></li>
          <li><a href="<?= site_url('/books'); ?>">Books</a></li>
          <li><a href="<?= site_url('/postcards'); ?>">Postcards</a></li>
          <li><a href="<?= site_url('/pull-up-banners'); ?>">Pull-up Banners</a></li>
          <li><a href="<?= site_url('/specialty-print'); ?>">Specialty Print</a></li>
          <li><a href="<?= site_url('/custom-packaging'); ?>">Custom Packaging</a></li>
        </ul>
      </div>
      <!-- Sidebar Menu: End-->
  </header>