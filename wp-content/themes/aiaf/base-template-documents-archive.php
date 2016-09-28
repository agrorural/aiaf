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
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="wrap container" role="document">
      <div class="content row">
      	<?php if (Setup\display_sidebar()) : ?>
          <aside class="sidebar">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
        <main class="main">
          <?php include Wrapper\template_path(); ?>
          <?php 
          	$doc_clas = get_field('doc_clas');
          	//var_dump($doc_clas);
          ?>

			<?php
			// the args
			$args = array(
			    'post_type' => 'documento',
			    'post_status' => 'publish',
			    'tax_query' => array(
					'relation' => 'AND',
					array(
						'taxonomy' => 'clasificacion',
						'field'    => 'term_id',
						'terms'    => $doc_clas,
					),
				),
			);

			// the query
			$the_query = new WP_Query( $args ); ?>

			<?php if ( $the_query->have_posts() ) : ?>
			
			<!-- pagination here -->
			<table class="table table-striped table-condensed table-bordered table-responsive">
				<thead>
					<tr>
						<th>Norma</th>
						<th>Número</th>
						<th>Año</th>
					</tr>
				</thead>
				<tbody>
					<!-- the loop -->
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<?php 
							$doc_numero = get_field('doc_numero');
							$doc_link = get_field('doc_link');
							//var_dump($doc_link['url']);
						?>
						<tr>
							<th>
								<a href="<?php echo $doc_link['url']; ?>"><?php the_title(); ?></a>
								<ul>
									<li><a href="<?php echo $doc_link['url']; ?>" download>Descargar</a></li>
								</ul>
							</th>
							<td><?php if ( $doc_numero ){ echo $doc_numero; } ?></td>
							<td><?php echo get_the_date('Y'); ?></td>
						</tr>
					<?php endwhile; ?>
					<!-- end of the loop -->
				</tbody>
			</table>
			<!-- pagination here -->

			<?php wp_reset_postdata(); ?>

			<?php else : ?>
			<p>No ha seleccionado ninguna clasificación de decumento.</p>
			<?php endif; ?>
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
