<article <?php post_class('news'); ?>>
  <div class="entry-container">
  	<?php if ( has_post_thumbnail() ) { ?>
    	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false ); ?>
    	<header class="entry-left" style="">
    		<div class="entry-left-container" style="background: url('<?php echo $image[0]; ?>')  no-repeat top left; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
    			
    		</div>
    	</header>
	<?php }?>

  <div class="entry-body ">
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="post-meta">
		<div class="post-date">
			<?php get_template_part('templates/entry-meta-date'); ?>
		</div>
		<div class="post-comments">
			<a href="<?php comments_link(); ?>"><i class="fa fa-comments-o"></i> Comentarios</a> <?php comments_number('0', '1', '%'); ?>
		</div>
	</div>
  </div>
  </div>
</article>
