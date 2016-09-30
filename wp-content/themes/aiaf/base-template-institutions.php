<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>  data-spy="scroll" data-target="#institutionsNav">
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <?php get_template_part('templates/masshead'); ?>
    <div class="wrap container" role="document">
      <div class="content row">
        <?php if (Setup\display_sidebar()) : ?>
          <aside class="sidebar">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
        <main class="main">
          <nav class="navbar navbar-default navbar-static" id="institutionsNav">
            <div class="container-fluid">
              <div class="navbar-header">
                <button class="collapsed navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-scrollspy">
                  <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
                </button> 
                <a href="#" class="navbar-brand">Instituciones por tipo</a> 
              </div> 
              <div class="collapse navbar-collapse navbar-scrollspy">
                <ul class="nav navbar-nav">
                  <li class="">
                    <a href="#ministerios">Ministerios</a>
                  </li> 
                  <li class="">
                    <a href="#dependencias">Dependencias Públicas</a>
                  </li>
                  <li class="">
                    <a href="#sociedad">Sociedad Civil</a>
                  </li> 
                </ul> 
              </div> 
            </div> 
          </nav>

          <?php get_template_part('templates/section', 'institutions'); ?>
        </main><!-- /.main -->
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
