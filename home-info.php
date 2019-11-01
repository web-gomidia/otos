<div class="infos">
    <div class="container">
        <div class="row">
            <?php
                wp_reset_query();
                $args = array( 'post_type' => 'page', 'post__in' => array( 23, 25, 65 ), 'order'=>'ASC' );
                query_posts($args);
                while ( have_posts() ) : the_post();
            ?>
            <div class="col-xs-12 col-md-4 col-sm-4 col-lg-4">
              <a href="<?php the_permalink(); ?>">
                <div class="info">
                  <img src="<?=get_post_meta(get_the_ID(), 'Icon',true);?>" class="img-responsive"/>
                  <div class="title">
                    <h3><?php the_title(); ?></h3>
                  </div>
                </div>
              </a>  
            </div>
            <?php
                endwhile;
                wp_reset_query();
            ?>            
        </div>
    </div>
</div>