<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header id="header" role="banner">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-8 nopad"><div class="border one"></div></div>
				<div class="col-xs-2 nopad"><div class="border two"></div></div>
				<div class="col-xs-2 nopad"><div class="border three"></div></div>
			</div>
		</div>		
		<div class="container">
			<div class="row">
				<div class="col-xs-9 col-md-4 col-sm-4 col-lg-4">
					<?php odin_the_custom_logo(); ?>
				</div>		
				<div class="col-xs-12 col-md-8 col-sm-8 col-lg-8">
					<div class="menu">
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
			</div>
		</div>
	</header>
