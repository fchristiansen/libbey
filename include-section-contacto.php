<section class="contacto">
	<div id="contacto" class="banderita-contacto"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<img class="img-fluid d-block mx-auto titulo-contacto" src="<?php bloginfo('template_url'); ?>/assets/img/tit-contacto.png" alt="">
			</div>
			<div class="col-sm-6">
				<!--<form id="contacto">
				  	<div class="form-group">
				    	<input type="text" class="form-control" id="nombre" aria-describedby="nombre" placeholder="nombre y apellido*">
				  	</div>
				  	<div class="form-group">
				    	<input type="email" class="form-control" id="email" aria-describedby="email" placeholder="email*">
				  	</div>
				  	<div class="form-group">
				    	<textarea class="form-control" id="mensaje" rows="3" placeholder="mensaje*"></textarea>
	  				</div>
	  				<div class="text-center">
				  		<button type="submit" class="btn btn-primary btn-negro-lg">enviar</button>
	  				</div>
				</form>-->
				<?php echo do_shortcode( '[contact-form-7 id="174" title="Formulario de contacto 1" html_id="contacto"]' ); ?>
			</div>
			<!-- <div class="col-sm-12">
				<img class="img-fluid mapa-chile-h" src="<?php bloginfo('template_url'); ?>/assets/img/mapa-chile-h.png" alt="mapa chile">
				<img class="img-fluid mapa-chile-v" src="<?php bloginfo('template_url'); ?>/assets/img/mapa-chile.png" alt="mapa chile">
			</div> -->

			<section class="ubicanos">
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="bg-negro">
				<img class="img-fluid center" src="<?php bloginfo('template_url'); ?>/assets/img/tit-ubicanos.png" alt="">
			</div>
		</div>
		<div class="col-md-8">
			<div class="row">
				<?php
				   $args = array (
				       'post_type' => 'logos_tiendas',
				       'posts_per_page'=> -1
				     );
				     $the_query = new WP_Query ($args);
				 ?>
				  <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="col-sm-3 text-center">
					<a class="box-logo d-block" href="<?php echo get('enlace_url_sitio'); ?>" target="_blank">
						<img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
					</a>
				</div>
				<?php endwhile; else: ?>
				<?php endif; ?>
				<?php wp_reset_postdata()?>

			</div>
		</div>
	</div>
</div>
</section>

			<div class="col-sm-6 hidden-xs">
				<img class="img-fluid mapa-l" src="<?php bloginfo('template_url'); ?>/assets/img/mapal.png" alt="mapa chile">
			</div>
			<div class="col-sm-6 hidden-xs">
				<img class="img-fluid mapa-r" src="<?php bloginfo('template_url'); ?>/assets/img/mapar.png" alt="mapa chile">
			</div>

			<div class="col-sm-12 visible-xs">
				<img class="img-fluid mapa-chile-v" src="<?php bloginfo('template_url'); ?>/assets/img/mapa-chile.png" alt="mapa chile">
			</div>

		</div>

	</div>
</section>
