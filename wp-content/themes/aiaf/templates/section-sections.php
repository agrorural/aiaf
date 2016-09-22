<div class="section-container">
	<div class="page-header">
		<h2>Secciones</h2>
	</div>
	<div class="items">
		<div class="item">
			<div class="item-container">
		      <a href="<?php echo bloginfo('url'); ?>/eventos"><img src="<?php echo bloginfo('template_url'); ?>/dist/images/sections__eventos.jpg" alt="" /></a>
		      <div class="item-caption">
		        <h3><a href="<?php echo bloginfo('url'); ?>/eventos">Eventos</a></h3>
		      </div>
		    </div>
		</div>
		<div class="item">
			<div class="item-container">
			<?php $post2_ID = 2; $post2 = get_post( $post2_ID ); $post2_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post2_ID ), 'gfull' ); $post2_permalink = get_permalink( $post2_ID ); //var_dump($post2); ?>
		      <a href="<?php echo $post2_permalink; ?>"><img src="<?php echo $post2_image_url[0]; ?>" alt="" /></a>
		      <div class="item-caption">
		        <h3><a href="<?php echo $post2_permalink; ?>"><?php echo $post2->post_title; ?></a></h3>
		      </div>
		    </div>
		</div>
		<div class="item">
			<div class="item-container">
			<?php $post3_ID = 332; $post3 = get_post( $post3_ID ); $post3_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post3_ID ), 'gfull' ); $post3_permalink = get_permalink( $post3_ID ); //var_dump($post3); ?>
		      <a href="<?php echo $post3_permalink; ?>"><img src="<?php echo $post3_image_url[0]; ?>" alt="" /></a>
		      <div class="item-caption">
		        <h3><a href="<?php echo $post3_permalink; ?>"><?php echo $post3->post_title; ?></a></h3>
		      </div>
		    </div>
		</div>
		<div class="item">
			<div class="item-container">
			<?php $post4_ID = 765; $post4 = get_post( $post4_ID ); $post4_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post4_ID ), 'gfull' ); $post4_permalink = get_permalink( $post4_ID ); //var_dump($post4); ?>
		      <a href="<?php echo $post4->post_excerpt; ?>" target="_blank"><img src="<?php echo $post4_image_url[0]; ?>" alt="" /></a>
		      <div class="item-caption">
		        <h3><a href="<?php echo $post4->post_excerpt; ?>" target="_blank"><?php echo $post4->post_title; ?></a></h3>
		      </div>
		    </div>
		</div>
		<div class="item">
			<div class="item-container">
			<?php $post5_ID = 763; $post5 = get_post( $post5_ID ); $post5_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post5_ID ), 'gfull' ); $post5_permalink = get_permalink( $post5_ID ); //var_dump($post5); ?>
		      <a href="<?php echo $post5_permalink; ?>"><img src="<?php echo $post5_image_url[0]; ?>" alt="" /></a>
		      <div class="item-caption">
		        <h3><a href="<?php echo $post5_permalink; ?>"><?php echo $post5->post_title; ?></a></h3>
		      </div>
		    </div>
		</div>
		<div class="item">
			<div class="item-container">
			<?php $post6_ID = 767; $post6 = get_post( $post6_ID ); $post6_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post6_ID ), 'gfull' ); $post6_permalink = get_permalink( $post6_ID ); //var_dump($post6); ?>
		      <a href="<?php echo $post6_permalink; ?>"><img src="<?php echo $post6_image_url[0]; ?>" alt="" /></a>
		      <div class="item-caption">
		        <h3><a href="<?php echo $post6_permalink; ?>"><?php echo $post6->post_title; ?></a></h3>
		      </div>
		    </div>
		</div>
	</div>
</div>