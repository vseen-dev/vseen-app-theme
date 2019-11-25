<?php get_header(); ?>

<!--Section-->
<div class="icons-container">
  <div class="icon-set">
    <div class="icon-box">
      <img src="<?= get_theme_file_uri('/images/icons/vseen-icons/website.png'); ?>" class="icon" />
      <p class="caption">Website</p>
    </div>
    <div class="icon-box">
      <a href="<?= get_permalink(15)?>">
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
      <img src="<?= get_theme_file_uri('/images/icons/vseen-icons/ar.png'); ?>" class="icon" />
      <p class="caption">AR</p>
    </div>
    <div class="icon-box">
      <img src="<?= get_theme_file_uri('/images/icons/vseen-icons/digital-production.png'); ?>" class="icon" />
      <p class="caption">
        Digital <br />
        Production
      </p>
    </div>
    <div class="icon-box">
      <img src="<?= get_theme_file_uri('/images/icons/vseen-icons/photography.png'); ?>" class="icon" />
      <p class="caption">Photography</p>
    </div>
  </div>
  <div class="icon-set">
    <div class="icon-box">
      <img src="<?= get_theme_file_uri('/images/icons/vseen-icons/design.png'); ?>" class="icon" />
      <p class="caption">Design</p>
    </div>
    <div class="icon-box">
      <img src="<?= get_theme_file_uri('/images/icons/vseen-icons/animation.png'); ?>" class="icon" />
      <p class="caption">Animation</p>
    </div>
  </div>
</div>
</div>

<?php get_footer(); ?>