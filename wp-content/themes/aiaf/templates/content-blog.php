<?php if ( has_post_thumbnail( $post->ID ) ){ ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false ); ?>
<article <?php post_class(); ?>  style="background: url('<?php echo $image[0]; ?>')  no-repeat top left; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
<?php } else { ?>
<article <?php post_class(); ?>>
<?php } ?>
	<header class="post-author">
		<?php get_template_part('templates/entry-meta-author'); ?>
	</header>
	<header class="post-focus">
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</header>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>
	<footer class="post-meta">
		<div class="post-date">
			<?php get_template_part('templates/entry-meta-date'); ?>
		</div>
		<div class="post-comments">
			<a href="<?php comments_link(); ?>"><i class="fa fa-comments-o"></i> Comentarios</a> <?php comments_number('0', '1', '%'); ?>
		</div>
	</footer>
</article>
