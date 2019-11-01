<div class="galery">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <a href="/galeria"><h2>Galeria</h2></a>
            </div>
        </div>
        <div class="row">
            <?php
                wp_reset_query();
                $args = array( 'pagename' => 'galeria'); 
                query_posts($args);
                while ( have_posts() ) : the_post();
		        if ( get_post_gallery() ) :
		            $gallery = get_post_gallery( get_the_ID(), false );
		            $ids = explode(',', $gallery['ids']);
		            $i = 0;
		            foreach( $ids as $idg ) : 
		            if( $i > 2 ) break;
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
			    $i++;
				endforeach;
				endif;			
                endwhile;
                wp_reset_query();
            ?>                 
        </div>
        <div class="row">
            <div class="col-xs-12">
                <br>
                <center>
                    <a href="/galeria" class="btn btn-primary">CONHEÇA MAIS</a>
                </center>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.6.4/jquery.colorbox.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.6.4/i18n/jquery.colorbox-pt-BR.js"></script>
<script> jQuery('a.gallery').colorbox({rel:'gallery', current: null}); </script>