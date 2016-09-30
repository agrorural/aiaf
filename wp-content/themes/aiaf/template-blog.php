<?php
/**
 * Template Name: Tema de Blog
 */
?>
<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&category__in=21&paged='. get_query_var('paged')); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'blog'); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>
