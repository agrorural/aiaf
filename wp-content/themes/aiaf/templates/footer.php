<footer class="content-info">
  <div class="section-container">
    <div class="contact-info">
    	<div class="page-header">
    		<h2>Contacto</h2>
    	</div>
    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dapibus lacus leo, id tincidunt tortor facilisis non. </p>
    	<p><a href="#"><img src="<?php echo bloginfo('template_directory'); ?>/dist/images/logo_iso__footer.png" alt=""></a></p>
    	<address>
    		Av. Salaverry 1388,<br /> Lima 11, PE<br /><br />

			Contacto<br />
			<a href="mailto:info@sierrayselvaalta.gob.pe">info@sierrayselvaalta.gob.pe</a>
    	</address>
    	<ul class="social-list">
    		<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
    		<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
    		<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
    		<li><a href="#"><i class="fa fa-youtube-square"></i></a></li>
    		<li><a href="#"><i class="fa fa-wordpress"></i></a></li>
    	</ul>
    </div>
    <div class="contact-form">
    	<form>
    	  <div class="form-group">
		   	<label for="exampleInputText">Nombre Completo</label>
		    <input type="text" class="form-control" id="exampleInputText" placeholder="Nombre Completo">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Asunto</label>
			  <select class="form-control">
				  <option>Seleccione</option>
			  </select>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Mensaje</label>
		  	<textarea class="form-control" rows="10"></textarea>
		  </div>
		  <button type="submit" class="">Enviar <i class="fa fa-send"></i></button>
		</form>
    </div>
  </div>
  	<?php if( is_home() ) {?>
		<div class="scroll">
			<a id="bottom" class="scroll-to" href="#spot"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span></a>
		</div>
	<?php } ?>
	<?php dynamic_sidebar('sidebar-footer'); ?>
</footer>
