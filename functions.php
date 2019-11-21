<?php

function vseen_files() {
  wp_enqueue_style('vseen_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'vseen_files');

// * Debugger, log values to browser console
function consoleLog($output, $description="DATA: ", $withScriptTags=true) {
  $jsCode = "console.log('$description'," . json_encode($output, JSON_HEX_TAG) . ");";

  if ($withScriptTags) {
    $jsCode = "<script>" . $jsCode . "</script>";
  }

  echo $jsCode;
}
?>