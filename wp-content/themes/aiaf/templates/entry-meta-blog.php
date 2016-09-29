<?php 
	global $post; 

	$author_id = $post->post_author;

	$autor_url = get_author_posts_url( $author_id );
	//var_dump(get_avatar($author_id));


?>
<p class="byline author vcard"><?php echo get_avatar($author_id, 32); ?> <?= __('By', 'sage'); ?> <a href="<?php echo $autor_url; ?>" rel="author" class="fn"><?php the_author_meta( 'display_name', $author_id ); ?></a></p>
<time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>