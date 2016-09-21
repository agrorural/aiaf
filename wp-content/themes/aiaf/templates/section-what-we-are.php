<div class="section-container">
	<div class="page-header">
		<h2>Qué hacemos</h2>
	</div>
	<div class="items">
		<div class="item">
			<div class="item-container">
			<?php $post1_ID = 776; $post1 = get_post( $post1_ID ); $post1_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post1_ID ), 'gfull' ); $post1_permalink = get_permalink( $post1_ID ); //var_dump($post1); ?>
		      <a href="<?php echo $post1_permalink; ?>"><img src="<?php echo $post1_image_url[0]; ?>" alt="" /></a>
		      <div class="item-caption">
		        <h3><a href="<?php echo $post1_permalink; ?>"><?php echo $post1->post_title; ?></a></h3>
		        <?php echo ( $post1->post_excerpt ); ?>
		      </div>
		    </div>
		</div>
		<div class="item">
			<div class="item-container">
		      <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/dist/images/comision_iso--gray.png" alt="" /></a>
		      <div class="item-caption">
		        <h3><a href="#">Comisión <br />Agricultura Familiar</a></h3>
		        <p>Lorem ipsum dolor sit amet, consectetur dolor sit amet, consectetur adipiscing elit. Integer...</p>
		      </div>
		    </div>
		</div>
		<div class="item">
			<div class="item-container">
		      <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/dist/images/norma_iso--gray.png" alt="" /></a>
		      <div class="item-caption">
		        <h3><a href="#">Normatividad <br />y Bibliografía</a></h3>
		        <p>Lorem ipsum dolor sit amet, consectetur dolor sit amet, consectetur adipiscing elit. Integer...</p>
		      </div>
		    </div>
		</div>
	</div>
</div>