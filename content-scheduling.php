<?php
/**
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<article id="post-<?php the_ID(); ?>">
	<div id="sheduling">
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
					<div class="text">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="hidden-xs col-xs-2"></div>
				<div class="col-xs-12 col-md-8 col-md-8 col-lg-8">
					<form action="#" method="post" class="form" id="shedule" name="shedule">
					    <input type="hidden" name="captcha" id="cod_captcha" value="" class="captcha" />
					    <input type="hidden" name="c_utmz" id="c_utmz" value="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> - <?php echo esc_url( home_url( '/contato' ) ); ?>" />
					    <input type="hidden" value="shedule" name="format">
					    <input value="otos" name="emp" type="hidden">
					    <input value="send" name="action" type="hidden">
					    <input value="contato@otos.com.br" name="from_email" type="hidden">
					    <input value="Otos" name="from_name" type="hidden">
					    <input value="http://otos.com.br" name="site_url" type="hidden">
					    <input value="" name="anexo" type="hidden">
					
					    <div class="col-lg-12 col-sm-12 col-md-12">
					        <div class="form-group">
					            <label for="name" class="control-label">Nome:</label>
					            <div class="input-group"> 
					                <input type="text" class="form-control requerid" id="name" name="name" aria-invalid="false" aria-required="true" value="" requerid="requerid"> 
					                <span class="input-group-addon active btn-primary"><i class="fa fa-user"></i></span>                   
					            </div>
					        </div>
					    </div>
					
					    <div class="col-lg-7 col-sm-7 col-md-7">
					        <div class="form-group">
					            <label for="name" class="control-label">E-mail:</label>
					            <div class="input-group"> 
					                <input type="email" class="form-control requerid" id="email" name="email" aria-invalid="false" aria-required="true" value="" requerid="requerid"> 
					                <span class="input-group-addon active btn-primary"><i class="fa fa-envelope"></i></span>                   
					            </div>
					        </div>
					    </div>
					
					    <div class="col-lg-5 col-sm-5 col-md-5">
					        <div class="form-group">
					            <label for="name" class="control-label">Telefone:</label>
					            <div class="input-group"> 
					                <input type="text" class="form-control requerid" id="phone" name="phone" value="" requerid="requerid">
					                <span class="input-group-addon active btn-primary"><i class="fa fa-phone"></i></span>                  
					            </div>
					        </div>
					    </div>
					    
					    <div class="col-lg-12 col-sm-12 col-md-12">
					        <div class="form-group">
					            <label for="exams" class="control-label">Convênios:</label>
					            <div class="input-group"> 
						            <select class="form-control requerid" id="covenants" name="covenants" aria-invalid="false" aria-required="true" value="" requerid="requerid">
							            <option value="0" selected="selected">-- Selecione --</option>  
							            <?php
							               wp_reset_query();
							                $args = array( 'category_name' => 'convenios','order'=>'ASC', 'orderby'=>'title','posts_per_page'=>-1); 
							                query_posts($args);
							                while ( have_posts() ) : the_post();
							            ?>
	 										<option value="<?php the_title(); ?>"><?php the_title(); ?></option>  
							            <?php
							                endwhile;
							                wp_reset_query();
							            ?> 					            
						            </select>
					                <span class="input-group-addon active btn-primary"><i class="fa fa-info-circle"></i></span>                   
					            </div>
					        </div>
					    </div>					    
					    <div class="col-lg-12 col-sm-12 col-md-12">
					        <div class="form-group">
					            <label for="name" class="control-label">Mensagem:</label>
					            <div class="input-group"> 
					                <textarea class="form-control required" rows="5" cols="60" name="message" id="message"></textarea>
					                <span class="input-group-addon active btn-primary"><i class="fa fa-comment"></i></span>                    
					            </div>
					        </div>
					    </div>
					
					    <div class="col-lg-4 col-sm-4 col-md-4">
					        <div class="captcha"></div>
					        <center>
					            <a href="javascript: void(0);" class="reload-captcha label label-primary">RECARREGAR</a>
					        </center>
					        <br>
					    </div>    
					
					    <div class="col-lg-8 col-sm-8 col-md-8">
					        <div class="form-group">
					            <input type="text" class="form-control" name="captcha2" value="<?php echo $_SESSION['captcha']?>" id="captcha2" placeholder="Insira o código da imagem ao lado" />
					        </div>
					    </div>
					    
					    <div class="col-lg-12 col-sm-12 col-md-12">
					        <center>
					            <button class="btn btn-primary" id="sendmail" data-form="shedule">ENVIAR CONTATO</button><br><br>
					        </center>
					    </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</article><!-- #post-## -->
