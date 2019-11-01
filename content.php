<?php
/**
 * The default template for displaying content.
 *
 * Used for both single and index/archive/author/catagory/search/tag.
 *
 * @package Odin
 * @since 2.2.0
 */
 $cat = get_the_category();
?>

<article id="post-<?php the_ID(); ?>">
	<div id="text">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<ol class="breadcrumb">
						<li><a href="/"><i class="fa fa-home"></i> Home</a></li>
						<li><a href="/<?=$cat[0]->slug?>"><?=$cat[0]->name?></a></li>
						<li class="active"><?php the_title(); ?></li>
					</ol> 					
				</div>
			</div>		
			<div class="row">
				<div class="col-xs-12">
					<div class="text">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</article><!-- #post-## -->
