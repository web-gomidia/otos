<?php
/**
 * Template Name: Contato
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header('internal'); ?>

	<main id="content" tabindex="-1" role="main">
		
			<header id="header-section">
				<div class="container">
					<div class="title">
						<div class="row">
							<div class="col-xs-12">
								<h2>Contato</h2>
							</div>
						</div>
					</div>
				</div>
			</header>		

			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'contact' );

				endwhile;
			?>

	</main><!-- #main -->
	
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFQL6hhwLP3jSo4742IfU4Zc3MiFmd2Ko&callback=initMap"></script>

	<script type="text/javascript">
	    google.maps.event.addDomListener(window, 'load', init);
	
	    function init() {
	
	        var mapOptions = {
	            zoom: 16,
	            scrollwheel: false,
	            center: new google.maps.LatLng(-21.758274, -43.350097)
	        };
	
	        var mapElement = document.getElementById('map');
	
	        var map = new google.maps.Map(mapElement, mapOptions);
	
	        var marker = new google.maps.Marker({
	            position: new google.maps.LatLng(-21.758274, -43.350097),
	            map: map,
	            title: 'Av. Barão do Rio Branco 1871, sala 713/714 - Centro',
	        });
	        
	        
	    }
	</script>
	
<?php
wp_enqueue_script('form-script','https://gdzsistemas.com.br/sendform/js/script.js', array(), '1.0', true );	
get_footer();
