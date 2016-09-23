<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <header id="spot" class="home-spot" data-stellar-background-ratio="0.5"  data-stellar-vertical-offset="150">
    	<?php the_custom_logo(); ?>
    	<a id="top" class="scroll-to" href="#s1"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
    </header>
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <section id="s1" class="section what-we-are">
      <?php get_template_part('templates/section', 'what-we-are'); ?>
      <div class="scroll">
        <a class="scroll-to" href="#s2"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
      </div>
    </section>
    <section class="separator section"  data-stellar-background-ratio="0.5"></section>
    <section id="s2" class="section sections">
      <?php get_template_part('templates/section', 'sections'); ?>
      <div class="scroll">
        <a class="scroll-to" href="#s3"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
      </div>
    </section>
    <section id="s3" class="section social" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="300">
      <?php get_template_part('templates/section', 'social'); ?>
    <div class="scroll">
      <a class="scroll-to" href="#s4"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
    </div>
    </section>
    <section id="s4" class="section instituciones">
      <?php get_template_part('templates/section', 'instituciones'); ?>
    <div class="scroll">
      <a class="scroll-to" href="#bottom"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
    </div>
    </section>
    <section class="separator section"  data-stellar-background-ratio="0.5"></section>
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
