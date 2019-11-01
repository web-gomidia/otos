<?php
/**
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<article id="post-<?php the_ID(); ?>">
	<div id="body">
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
	            <?php
	               wp_reset_query();
	                $args = array( 'category_name' => 'corpo-clinico','order'=>'DESC', 'orderby'=>'date','posts_per_page'=>-1); 
	                query_posts($args);
	                while ( have_posts() ) : the_post();
	            ?>
	            <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
					<div class="row">
						<div class="col-xs-12">
							<div class="image">
			            		<?=odin_thumbnail( 480, 320, get_the_title(),true); ?>
			            	</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 text-center">
							<h3><?php the_title(); ?></h3>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 text-center">
							<h4>CRM - <?=get_post_meta(get_the_ID(), 'CRM',true);?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div class="col-xs-6 nopad"><div class="border one"></div></div>
							<div class="col-xs-2 nopad"><div class="border two"></div></div>
							<div class="col-xs-2 nopad"><div class="border three"></div></div>
							<div class="col-xs-2 nopad"><div class="border four"></div></div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<?php the_content(); ?>
						</div>
					</div>
	            </div>
	            <?php
	                endwhile;
	                wp_reset_query();
	            ?> 	            
			</div>
		</div>
	</div>
</article><!-- #post-## -->
