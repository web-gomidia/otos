<?php
/**
 * The Template for displaying all single posts.
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
								<h2><?php the_title(); ?></h2>
							</div>
						</div>
					</div>
				</div>
			</header>			
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

				endwhile;
			?>
		</main><!-- #main -->

<?php
get_footer();
