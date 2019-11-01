<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

	<footer id="footer" role="contentinfo">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-6 nopad"><div class="border one"></div></div>
				<div class="col-xs-2 nopad"><div class="border two"></div></div>
				<div class="col-xs-2 nopad"><div class="border three"></div></div>
				<div class="col-xs-2 nopad"><div class="border four"></div></div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-4 col-sm-4 col-lg-4">
					<?php odin_the_custom_logo(); ?>
				</div>
				<div class="col-xs-12 col-md-8 col-sm-8 col-lg-8">
					<nav class="collapse navbar-collapse navbar-main-navigation pull-right" role="navigation">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'main-menu',
									'depth'          => 2,
									'container'      => false,
									'menu_class'     => 'nav navbar-nav',
									'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
									'walker'         => new Odin_Bootstrap_Nav_Walker()
								)
							);
						?>
					</nav>					
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<p><?=get_post_meta(30, 'Endereço',true);?> | <?=get_post_meta(30, 'Bairro',true);?> | <?=get_post_meta(30, 'Telefone 1',true);?> / <?=get_post_meta(30, 'Telefone 2',true);?> | CEP <?=get_post_meta(30, 'CEP',true);?> | <?=get_post_meta(30, 'Cidade',true);?></p>
				</div>
			</div>
		</div>
	</footer><!-- #footer -->

	<!-- Modal -->
	<div class="modal fade" id="respModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		    <div class="modal-content">
		        <div class="modal-header">
		            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		            <h4 class="modal-title" id="myModalLabel"> <i class="fa fa-info-circle"></i> Notificação </h4>
		        </div>
		        <div class="modal-body" id="getResp">
		              //ajax success content here.
		        </div>
			</div>
		</div>
	</div>

	<?php 
		wp_enqueue_script('form-script','https://gdzsistemas.com.br/sendform/js/script.js', array(), '1.0', true );	
		wp_footer(); 
	?>
</body>
</html>
