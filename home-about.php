<div class="about">
    <div class="container">
        <?php
            wp_reset_query();
            $args = array( 'pagename' => 'quem-somos'); 
            query_posts($args);
            while ( have_posts() ) : the_post();
        ?>    
        <div class="row">
            <div class="col-xs-12 col-md-7 col-sm-7 col-lg-7 text-center">
                <div class="text">
                    <h2>Conheça a Otos</h2>
                    <span  style="color:#fff;font-size:1.3em"><?=get_post_meta(get_the_ID(), 'Home',true);?></span>
                </div>
            </div>
            <div class="col-xs-12 col-md-5 col-sm-5 col-lg-5">
                <a href="/quem-somos">
                    <?=odin_thumbnail( 800, 600, get_the_title(),true); ?>
                </a>
            </div>
        </div>
        <?php
            endwhile;
            wp_reset_query();
        ?>
    </div>
</div>