<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; ';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

function add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

add_action( 'init', __NAMESPACE__ . '\\add_excerpts_to_pages' );

function aiaf_theme_setup() {
    add_image_size( 'news-thumb', 300, 285, true ); // (cropped)
}

add_action( 'after_setup_theme', __NAMESPACE__ . '\\aiaf_theme_setup' );


add_action('wp_footer', __NAMESPACE__ . '\\analyticstracking');
function analyticstracking() { ?>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85532203-1', 'auto');
  ga('send', 'pageview');

</script>
<?php } ?>