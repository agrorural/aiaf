<?php //ACF
	$inst_link = get_field('inst_link'); 

	$inst_tit_nom = get_field('inst_tit_nom'); 
	$inst_tit_cargo = get_field('inst_tit_cargo'); 
	$inst_tit_mail = get_field('inst_tit_mail'); 
	$inst_tit_tlf = get_field('inst_tit_tlf'); 

	$inst_alt_nom = get_field('inst_alt_nom'); 
	$inst_alt_cargo = get_field('inst_alt_cargo'); 
	$inst_alt_mail = get_field('inst_alt_mail'); 
	$inst_alt_tlf = get_field('inst_alt_tlf'); 
	//var_dump($inst_link);
?>

<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><?php if ( $inst_link ){ echo '<a href="' . $inst_link . '" rel="nofollow" target="_blank">' . get_the_title() . '</a>'; } ?></h2>
  </header>
  <div class="entry-content">
    <?php if ( $inst_tit_nom ){ ?>
	    <address>
		  <strong>Titular</strong><br>
		  <?php echo  $inst_tit_nom; ?><br />
		  <?php if ( $inst_tit_cargo ){ echo '<small>' . $inst_tit_cargo . '</small><br /><br />'; } ?>
		  <?php if ( $inst_tit_mail ){ echo '<abbr title="Correo">C: </abbr><span><a href="mailto:' . $inst_tit_mail .'">'.  $inst_tit_mail . '</a></span><br />'; } ?>
		  <?php if ( $inst_tit_tlf ){ echo '<abbr title="Teléfono">T: </abbr><span>'.  $inst_tit_tlf . '</span>'; } ?>
		</address>
	<?php } ?>
	<?php if ( $inst_alt_nom ){ ?>
	    <address>
		  <strong>Alterno</strong><br>
		  <?php echo  $inst_alt_nom; ?><br />
		  <?php if ( $inst_alt_cargo ){ echo '<small>' . $inst_alt_cargo . '</small><br /><br />'; } ?>
		  <?php if ( $inst_alt_mail ){ echo '<abbr title="Correo">C: </abbr><span><a href="mailto:' . $inst_alt_mail .'">'.  $inst_alt_mail . '</a></span><br />'; } ?>
		  <?php if ( $inst_alt_tlf ){ echo '<abbr title="Teléfono">T: </abbr><span>'.  $inst_alt_tlf . '</span>'; } ?>
		</address>
	<?php } ?>
  </div>
</article>