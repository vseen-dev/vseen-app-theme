<?php get_header(); ?>

<section id="vpm-section">

  <div class="vpm-header">
    <a class="heading-logo" href="<?= site_url(); ?>">
      <img src="<?= get_theme_file_uri('/images/vpm-logo.png'); ?>" />
    </a>
  </div>

  <div class="icons-container">
    <div class="icon-set">
      <div class="icon-box">
        <a href="<?= site_url('/large-print'); ?>">
          <img src="<?= get_theme_file_uri('/images/icons/vpm-icons/large-format.png'); ?>" class="icon" />
        </a>
        <p class="caption">Large Print</p>
      </div>
      <div class="icon-box">
        <a href="<?= site_url('/trifolds'); ?>">
          <img src="<?= get_theme_file_uri('/images/icons/vpm-icons/trifold.png'); ?>" class="icon" />
        </a>
        <p class="caption">
          Trifolds
        </p>
      </div>
    </div>
    <div class="icon-set">
      <div class="icon-box">
        <a href="<?= site_url('/books'); ?>">
          <img src="<?= get_theme_file_uri('/images/icons/vpm-icons/books.png'); ?>" class="icon" />
        </a>
        <p class="caption">Books</p>
      </div>
      <div class="icon-box">
        <a href="<?= site_url('/postcards'); ?>">
          <img src="<?= get_theme_file_uri('/images/icons/vpm-icons/postcard.png'); ?>" class="icon" />
        </a>
        <p class="caption">
          Postcards
        </p>
      </div>
      <div class="icon-box">
        <a href="<?= site_url('/pull-up-banners'); ?>">
          <img src="<?= get_theme_file_uri('/images/icons/vpm-icons/pull-up-banners.png'); ?>" class="icon" />
        </a>
        <p class="caption">Pull-up <br /> Banners</p>
      </div>
    </div>
    <div class="icon-set">
      <div class="icon-box">
        <a href="<?= site_url('/specialty-print'); ?>">
          <img src="<?= get_theme_file_uri('/images/icons/vpm-icons/specialty-print.png'); ?>" class="icon" />
        </a>
        <p class="caption">Specialty <br /> Print</p>
      </div>
      <div class="icon-box">
        <a href="<?= site_url('/custom-packaging'); ?>">
          <img src="<?= get_theme_file_uri('/images/icons/vpm-icons/custom-packaging.png'); ?>" class="icon" />
        </a>
        <p class="caption">Custom <br /> Packaging</p>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>