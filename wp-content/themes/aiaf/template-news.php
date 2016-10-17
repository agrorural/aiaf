<?php
/**
 * Template Name: Tema de Noticias
 */
?>
<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&category__not_in=21&paged='. get_query_var('paged')); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

<?php 
if (function_exists( 'wp_pagenavi' )){
	wp_pagenavi();
}else{
	the_posts_navigation(); 
}
?>