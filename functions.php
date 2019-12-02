<?php

function vseen_files() {
  wp_enqueue_script( 'vseen_main_scripts', get_theme_file_uri('/js/scripts.js'), NULL, microtime(), true);
  wp_enqueue_style('normalize_css', '//cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css');
  wp_enqueue_style('vseen_main_styles', get_stylesheet_uri(), NULL, microtime());
}

add_action('wp_enqueue_scripts', 'vseen_files');

function vseen_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'vseen_features');

// * Debugger, log values to browser console
function consoleLog($output, $description="DATA: ", $withScriptTags=true) {
  $jsCode = "console.log('$description'," . json_encode($output, JSON_HEX_TAG) . ");";

  if ($withScriptTags) {
    $jsCode = "<script>" . $jsCode . "</script>";
  }

  echo $jsCode;
}
?>