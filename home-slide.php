<div class="slide-home">
    <div id="FirstCarousel" class="carousel slide" data-ride="carousel">
    
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php
               wp_reset_query();
                $args = array( 'category_name' => 'slide','order'=>'DESC', 'orderby'=>'date','posts_per_page'=>4); 
                query_posts($args);
                $i=1;
                while ( have_posts() ) : the_post();
                $i==1 ? $action = ' active' : $action = '';
                $link = get_post_meta(get_the_ID(), 'Link Slide',true);
                if ($link) {
            ?>             
                <div class="item<?=$action?>">
                    <a href="<?=$link?>" target="_blank">
                        <?=odin_thumbnail( '', '', get_the_title(),true); ?>
                        <div class="carousel-caption">
                            <div class="content-slide">
                                <?php the_content(); ?>
                            </div>
                        </div>                
                    </a>                 
                </div>  
            <?php } else { ?>
                <div class="item<?=$action?>">
                    <?=odin_thumbnail( '', '', get_the_title(),true); ?>
                    <div class="carousel-caption">
                        <div class="content-slide">
                            <?php the_content(); ?>
                        </div>
                    </div>                
                </div>    
            <?php
                }
                $i++;
                endwhile;
                wp_reset_query();
            ?>      
        </div>
		<ol class="carousel-indicators">
			<li data-target="#FirstCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#FirstCarousel" data-slide-to="1"></li>
			<li data-target="#FirstCarousel" data-slide-to="2"></li>
		</ol>        
    </div>
</div>