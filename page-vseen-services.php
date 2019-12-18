<?php get_header(); ?>

<div class="icons-container">
  <div class="icon-set">
    <div class="icon-box">
      <a href="<?= site_url('/website'); ?>">
        <img src="<?= get_theme_file_uri('/images/icons/vseen-icons/website.png'); ?>" class="icon" />
      </a>
      <p class="caption">Website</p>
    </div>
    <div class="icon-box">
      <a href="<?= site_url('/video-production'); ?>">
        <img src="<?= get_theme_file_uri('/images/icons/vseen-icons/video-production.png'); ?>" class="icon" />
      </a>
      <p class="caption">
        Video <br />
        Production
      </p>
    </div>
  </div>
  <div class="icon-set">
    <div class="icon-box">
      <a href="<?= site_url('/ar'); ?>">
        <img src="<?= get_theme_file_uri('/images/icons/vseen-icons/ar.png'); ?>" class="icon" />
      </a>
      <p class="caption">AR</p>
    </div>
    <div class="icon-box">
      <a href="<?= site_url('/digital-publication'); ?>">
        <img src="<?= get_theme_file_uri('/images/icons/vseen-icons/digital-production.png'); ?>" class="icon" />
      </a>
      <p class="caption">
        Digital <br />
        Publication
      </p>
    </div>
    <div class="icon-box">
      <a href="<?= site_url('/photography'); ?>">
        <img src="<?= get_theme_file_uri('/images/icons/vseen-icons/photography.png'); ?>" class="icon" />
      </a>
      <p class="caption">Photography</p>
    </div>
  </div>
  <div class="icon-set">
    <div class="icon-box">
      <a href="<?= site_url('/design'); ?>">
        <img src="<?= get_theme_file_uri('/images/icons/vseen-icons/design.png'); ?>" class="icon" />
      </a>
      <p class="caption">Design</p>
    </div>
    <div class="icon-box">
      <a href="<?= site_url('/animation'); ?>">
        <img src="<?= get_theme_file_uri('/images/icons/vseen-icons/animation.png'); ?>" class="icon" />
      </a>
      <p class="caption">Animation</p>
    </div>
  </div>
</div>

<?php get_footer(); ?>