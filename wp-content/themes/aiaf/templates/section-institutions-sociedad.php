<?php 
// args
$args = array(
	'post_type' => 'institucion',
	'order'		=> 'ASC',
	'orderby'	=>	'title',
	'tax_query' => array(
		array(
			'taxonomy' => 'tipo',
			'field'    => 'slug',
			'terms'    => array( 'sociedad-civil' ),
		)
	),
	'posts_per_page' => -1
);

// the query
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>
	<div class="institutions-type">
		<div class="institutions-type-title">
			<h3>Directorio Sociedad Civil</h3>
		</div>
		<div class="institutions-type-container">
			<!-- pagination here -->
			<!-- the loop -->
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<?php get_template_part('templates/content', 'institution'); ?>
			<?php endwhile; ?>
			<!-- end of the loop -->

			<!-- pagination here -->
		</div>
	</div>
	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>