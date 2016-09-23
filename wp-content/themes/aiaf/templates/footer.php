<footer class="content-info">
  <div class="section-container">
    <div class="contact-info">
    	<?php $post1_ID = 767; $post1 = get_post( $post1_ID ); $post1_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post1_ID ), 'gfull' ); $post1_permalink = get_permalink( $post1_ID ); //var_dump($post1); ?>
    	<div class="page-header">
    		<h2><a href="<?php echo $post1_permalink; ?>"><?php echo $post1->post_title; ?></a></h2>
    	</div>
    	<?php echo '<p>' . $post1->post_excerpt . '</p>'; ?>

    	<?php if ( is_active_sidebar( 'sidebar-contact' ) ) : ?>
			<?php dynamic_sidebar( 'sidebar-contact' ); ?>
		<?php endif; ?>
		
    </div>
    <div class="contact-form">
		<?php gravity_form( 1, false, false, false, '', false ); ?>
    </div>
  </div>
  	<?php if( is_home() ) {?>
		<div class="scroll">
			<a id="bottom" class="scroll-to" href="#spot"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span></a>
		</div>
	<?php } ?>
	<?php dynamic_sidebar('sidebar-footer'); ?>
</footer>
