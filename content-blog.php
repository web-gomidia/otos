<?php
/**
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<article id="post-<?php the_ID(); ?>">
	<div id="blog">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<ol class="breadcrumb">
						<li><a href="/"><i class="fa fa-home"></i> Home</a></li>
						<li class="active"><?php the_title(); ?></li>
					</ol>					
				</div>
			</div>			
            <?php
               wp_reset_query();
                $args = array( 'category_name' => 'blog','order'=>'DESC', 'orderby'=>'date','posts_per_page'=>-1); 
                query_posts($args);
                while ( have_posts() ) : the_post();
            ?>
            <div class="notice">
	            <div class="row">
	                <div class="col-xs-12 col-md-4 col-sm-4 col-lg-4">
	                	<a href="<?php the_permalink(); ?>">
	            	    	<?=odin_thumbnail( 360, 240, get_the_title(),true, 'img-thumbnail'); ?>
	            	    </a>
	            	</div>
	            	<div class="col-xs-12 col-md-8 col-sm-8 col-lg-8">
	            		<a href="<?php the_permalink(); ?>">
	                		<h4><strong><?php the_title(); ?></strong></h4>
	                	</a>
	                	<p><i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_modified_date('j, F Y'); ?></p>
	                	<?php the_excerpt(); ?>
	                	<a href="<?php the_permalink(); ?>" class="btn btn-primary pull-right">LEIA MAIS</a>
	            	</div>
	            </div>
            </div>
            <?php
                endwhile;
                wp_reset_query();
            ?>        
		</div>
	</div>

</article><!-- #post-## -->
