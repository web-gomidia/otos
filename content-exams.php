<?php
/**
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<article id="post-<?php the_ID(); ?>">
	<div id="exams">
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
				<div class="col-xs-12 col-md-4 col-sm-4 col-lg-4">
					<?=odin_thumbnail( 800, 600, get_the_title(),true); ?>
				</div>
				<div class="col-xs-12 col-md-8 col-sm-8 col-lg-8">
					<div class="panel-group" id="accordion">
						<?php
							$args = array( 'category_name' => 'exames','order'=>'ASC', 'orderby'=>'post_title','posts_per_page'=>-1); 
							query_posts( $args );
							$i=1;
							while ( have_posts() ) : the_post();
							if($i==1){$cls='in'; $cls2='minus';}else{$cls=''; $cls2='plus';}
						?>
						<div class="panel panel-default">
							<a data-toggle="collapse" data-parent="#accordion" href="#c-<?php the_ID();?>" data-collapse="collapse-<?=$i;?>">              
								<div class="panel-heading panel-footer">
									<i class="fa fa-<?=$cls2?> pull-right"></i>
									<h4><?php the_title();?></h4>
								</div>
							</a>
							<div id="c-<?php the_ID();?>" class="panel-collapse collapse cpadding <?=$cls?>">
								<?php the_content();?>
							</div>
						</div>
						<?php
							$i++;
							endwhile;
							wp_reset_query();
						?>
					</div>					
				</div>
			</div>
		</div>
	</div>	
</article><!-- #post-## -->

<script>
	jQuery('.collapse').on('shown.bs.collapse', function(){
	jQuery(this).parent().find(".fa-plus").removeClass("fa-plus").addClass("fa-minus");
	}).on('hidden.bs.collapse', function(){
	jQuery(this).parent().find(".fa-minus").removeClass("fa-minus").addClass("fa-plus");
	});	
</script>
