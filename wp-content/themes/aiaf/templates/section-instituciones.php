<div class="section-container">
	<div class="page-header">
		<h2>Instituciones Integrantes</h2>
	</div>
<?php
// teh args
$args  = array(
	'post_type' => 'Institucion',
	'order'		=> 'ASC',
	'orderby' => 'title',
    'posts_per_page'=> -1
);

// the query
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->
	<div id="sl__inst" class="owl-carousel">
		<!-- the loop -->
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="item">
				<?php $inst_link = get_field('inst_link'); //var_dump($inst_link); ?> 
				<a href="<?php if ( $inst_link ) { echo $inst_link; } else  { echo '#'; } ?>" title="<?php the_title(); ?>">
					<?php if ( has_post_thumbnail() ) {
    					the_post_thumbnail();
					}else {
					    echo '<img src="' . get_bloginfo( 'template_directory' ) 
					        . '/dist/images/inst__default.jpg" />';
					} ?>
				</a>
			</div>
		<?php endwhile; ?>
		<!-- end of the loop -->
	</div>
	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


	
	
			
</div>