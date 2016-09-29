<?php
/**
 * Template Name: Tema de Galería de Fotos
 */
?>

<?php
	$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; 

	$args = array(
		'post_type' => 'post',
		'category__not_in' => 21,
		'tax_query' => array(
			array(
				'taxonomy' => 'post_format',
				'field'    => 'slug',
				'terms'    => array( 'post-format-gallery' ),
			)
		),
		'posts_per_page' => 12,
		'paged' => $paged

	);
?>


<?php 
// the query
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

		<!-- the loop -->
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<?php get_template_part('templates/content', get_post_format()); ?>
		<?php endwhile; ?>
		<!-- end of the loop -->
	</div>
	
	<?php the_posts_navigation(); ?>
	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
