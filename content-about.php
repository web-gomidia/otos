<?php
/**
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<article id="post-<?php the_ID(); ?>">
	<div id="text">
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
				<div class="col-xs-12">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-4 nopad"><div class="border one"></div></div>
				<div class="col-xs-3 nopad"><div class="border two"></div></div>
				<div class="col-xs-5">
					<?=odin_thumbnail( 800, 600, get_the_title(),true); ?>
				</div>
			</div>
		</div>
	</div>
</article><!-- #post-## -->
