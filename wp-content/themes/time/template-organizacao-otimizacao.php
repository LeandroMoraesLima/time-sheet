<?php 

/*
	template name: Quem somos
*/

get_header();

	if (have_posts()) :
	    while (have_posts()) : the_post();
			
?>

<!--====================================
Organization and optimization Section
=====================================-->

<section id="Organization-optimization" class="wt_section_area" style="padding-top:110px; ">
	<div id="Organization" class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="container">
					<h2 class="titulo"><?php echo get_field('or_titulo'); ?></h2>	

					<?php if(  have_rows('or_campo')):
   						$i = 0; ?>

					<?php
						// loop through the rows of data
						while ( have_rows('or_campo') ) : the_row();
							// var_dump(get_sub_field ('ot_imagem'));	
							$imagem = get_sub_field('or_imagem');

						if( get_row_layout() == 'or_texto_a_esquerda' ):
					?>	


					<div class="row">
						<div class="text col-md-6">										
							<h3><?php echo get_sub_field('or_sub_titulo'); ?></h3>	
							<p><?php echo get_sub_field('or_texto'); ?></p>		
																
						</div>													
						<div class="image col-md-6">
							<div class="img" style="background-image: url('<?php echo $imagem; ?>');">								
							</div>
						</div>
					</div>

					<?php  elseif( get_row_layout() == 'or_texto_a_direita' ): ?> 
						<?php $imagem = get_sub_field('or_imagem'); ?>

					<div class="Organization2">
						<div class="row column-reverse">
							<div class="image2 col-md-6">							
								<div class="img2" style="background-image: url('<?php echo $imagem; ?>');">								
								</div>							
							</div>													
							<div class="text2 col-md-6">
								<p class="campo"><?php echo get_sub_field('or_texto'); ?></p>
							</div>
						</div>	
					</div>

					<?php else: ?>

					<div class="sub-texto">
						<p class="texto"><?php echo get_sub_field('or_texto'); ?></p>
					</div>

					<?php  endif; ?>

					<?php endwhile; ?>

					<?php  endif; ?>

				</div>
			</div>
		</div>
	</div>
	<?php $imagem = get_field('or_imagem_slider_inferior'); ?>
	<div class="wt-row-container wt-row-centered wt_skin_light" style="background-image: url('<?php echo $imagem; ?>');">
		<div id="wt_section_heading" class="vc_row wpb_row vc_row-fluid text-center"  style="padding-top: 100px;padding-bottom: 100px;">
			<div class="container">
				<div class="row">
					<div class="wpb_column vc_column_container vc_col-sm-12">
						<div class="vc_column-inner clearfix">
							<div class="wpb_wrapper wt_wpb_wrapper clearfix">
								<div class="wt_section_heading intro_text wt_animate wt_animate_if_visible" data-animation="fadeIn">
									<h2 class="titulo"><?php echo get_field('or_titulo_slider_inferior'); ?></h2>
									<h3 class="text"><?php echo get_field('or_sub_titulo_slider_inferior'); ?></h3>
								</div>
								<div class="wpb_raw_code wpb_content_element wpb_raw_html" >
									<div class="wpb_wrapper">
										<a class="btn btn-primary btn-lg" href="<?php echo get_field('or_link_do_botao'); ?>"><?php echo get_field('or_titulo_do_botao'); ?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php 
		endwhile;
	endif; 

get_footer(); ?>