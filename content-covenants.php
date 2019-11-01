<?php
/**
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<article id="post-<?php the_ID(); ?>">
	<div id="covenants">
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
	                $args = array( 'category_name' => 'convenios','order'=>'ASC', 'orderby'=>'title','posts_per_page'=>-1); 
	                query_posts($args);
	                while ( have_posts() ) : the_post();
	            ?>
	            <div class="col-xs-6 col-md-2 col-sm-2 col-lg-2">
	            	<div class="covenant">
	            		<?=odin_thumbnail( '', '', get_the_title(),true, 'img-thumbnail'); ?>
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
