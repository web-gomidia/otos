<?php
/**
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<article id="post-<?php the_ID(); ?>">
	<div id="galery">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<ol class="breadcrumb">
						<li><a href="/"><i class="fa fa-home"></i> Home</a></li>
						<li class="active"><?php the_title(); ?></li>
					</ol>					
				</div>
			</div>	
			<div class="row">
				<div class="col-xs-12 text-center">
					<h2>Conheça a Otos</h2>
				</div>
			</div>
			<div class="row">
				<?php 
			        if ( get_post_gallery() ) :
			            $gallery = get_post_gallery( get_the_ID(), false );
			            $ids = explode(',', $gallery['ids']);
			            foreach( $ids as $idg ) : 
			    ?>
	            <div class="col-xs-12 col-md-4 col-sm-4 col-lg-4">
	            	<div class="image">
		            	<a href="<?=odin_get_image_url($idg, 800, 600 ); ?>" rel="gallery"  class="gallery">
		                	<img src="<?=odin_get_image_url($idg, 800, 600 ); ?>" class="img-responsive" />
		                    <div class="overlay text-center">
		                        <i class="fa fa-search-plus fa-4x" aria-hidden="true"></i>
		                    </div>		            	
		            	</a>
	            	</div>
	            </div>    
				<?php
					endforeach;
					endif;			
				?>
			</div>
		</div>
	</div>
</article><!-- #post-## -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.6.4/jquery.colorbox.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.6.4/i18n/jquery.colorbox-pt-BR.js"></script>
<script> jQuery('a.gallery').colorbox({rel:'gallery', current: null}); </script>