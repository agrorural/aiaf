<?php use Roots\Sage\Titles; ?>

<div class="page-header">
	<div class="section-title">
		<div class="section-title-container">
		<?php if( in_category('Blog') ) { ?>
			<a href="<?php echo bloginfo('url') ?>/blog">Blog</a>
		<?php }else{ ?>
			<a href="<?php echo bloginfo('url') ?>/noticias">Noticias</a>
		<?php } ?>
		</div>
	</div>
  	<div class="post-title">
  		<div class="post-title-container">
	  		<header>
	      		<h1 class="entry-title"><?php the_title(); ?></h1>
	      		<?php the_excerpt(); ?>
	    	</header>
  		</div>
  	</div>
</div>
