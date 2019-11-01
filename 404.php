<?php
/**
 * The template for displaying 404 pages (Not Found).
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
							<h2>Página não encontrada</h2>
						</div>
					</div>
				</div>
			</div>
		</header>
		<br>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<center>
						<img src="/wp-content/themes/otos/assets/images/404.jpg"/>
					</center>
				</div>
				<div class="col-xs-12">
					<center>
						<a href="/"><button class="btn-primary"><i class="fa fa-home"></i> Home</button></a>	
						<a href="/contato"><button class="btn-primary"><i class="fa fa-user"></i> Contato</button></a>	
					</center>
				</div>
			</div>
		</div>
		<br>
	</main><!-- #main -->

<?php
get_footer();