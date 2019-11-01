<?php
/**
 * Template Name: Agendamentos
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

	<main id="content" tabindex="-1" role="main">
			<header id="header-section">
				<div class="container">
					<div class="title">
						<div class="row">
							<div class="col-xs-12">
								<h2>Agendamento de consulta</h2>
							</div>
						</div>
					</div>
				</div>
			</header>

			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'scheduling' );

				endwhile;
			?>

	</main><!-- #main -->

<?php
get_footer();
