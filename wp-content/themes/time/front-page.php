<?php get_header(); 

	if (have_posts()) :
	    while (have_posts()) : the_post();
			$imagem = get_field('hp_sliders');
?>

<!--==========================
Slider Section
============================-->
 
<div id="wt_containerWrapper" class="clearfix">
	<div id="wt_containerWrapp" class="clearfix">
		<section id="wt_section_home" class="wt_section_area" style="background-image: url('<?php echo $imagem; ?>')">
			<div id="wt_home_content">
				<div class="container">
					<div class="row">
						<div class="wt-row-container wt-row-centered">
							<div class="vc_row wpb_row vc_row-fluid"  style="padding-top: 150px;padding-bottom: 70px;">
								<div class="container">
									<div class="row text">
										<div id="wt_intro_description" class="wpb_column vc_column_container vc_col-sm-7 vc_col-md-7">
											<div class="vc_column-inner clearfix">
												<div class="wpb_wrapper wt_wpb_wrapper clearfix wt_animate wt_animate_if_almost_visible" data-animation="fadeInLeft">
													<div class="wpb_text_column wpb_content_element " >
														<div class="wpb_wrapper">
															<h1><?php echo get_field('hp_titulo'); ?></h1>
														</div>
													</div>
													<div class="wpb_text_column wpb_content_element " >
														<div class="wpb_wrapper">
															<h4><?php echo get_field('hp_texto'); ?>
															</h4>
														</div>
													</div>								
												</div> 
											</div>
										</div>										
										<div id="wt_intro_form" class="wpb_column vc_column_container vc_col-sm-5 vc_col-md-5">
											<div class="vc_column-inner clearfix">
												<div class="wpb_wrapper wt_wpb_wrapper clearfix wt_animate wt_animate_if_almost_visible" data-animation="fadeInRight">
													<div class="wpb_text_column wpb_content_element " >
														<div class="wpb_wrapper">
															<div role="form" class="wpcf7" id="wpcf7-f574-o1" lang="en-US" dir="ltr">
																<div class="screen-reader-response">
																</div>
																
																<?php echo do_shortcode( get_field('hp_formulario_1') ); ?>
																
															</div>
														</div>
													</div>
												</div>
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
	</div>
</div>

<!--==========================
Benefits Section
============================-->

	<style>
		#benefits:before {
			<?php $imagem = get_field('be_imagem'); ?>
			background-image: url('<?php echo $imagem; ?>');
		}
	</style>
	<section id="benefits" class="wt_section_area" style="padding-top:60px; ">
		<div id="vantagens-ui" class="container-fluid">
			<div class="row">
				<div class="vantagens col-md-12">
					<div class="container">
						<div class="text row">
							<div class="col-md-6">		
								<div class="row">									
									<h2 class="titulo"><?php echo get_field('be_titulo'); ?></h2>
									<?php echo get_field('be_texto'); ?>				
								</div>													
							</div>	
							<div class="col-md-6">									
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<!--==========================
faq Section
============================-->

		<?php

			// check if the repeater field has rows of data
			if( have_rows('fa_depositions') ):

		?>

<section id="faq" class="wt_section_area" style="padding-top:60px; ">
    <div class="container">
		<div class="wt_intro">
			<div class="intro_text">
				<h2 class="title"><?php echo get_field ('fa_titulo') ?></h2>
				<h3 class="custom_title"><?php echo get_field ('fa_sub_titulo') ?></h3>
			</div>
		</div>
	</div>  
    <div class="wt-row-container wt-row-centered">
	<div class="vc_row wpb_row vc_row-fluid">
		<div class="container">
			<div class="row">				
				
				<?php
					// loop through the rows of data
					while ( have_rows('fa_depositions') ) : the_row();
				?>

				<div id="faq-1-text" class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6">
					<div class="vc_column-inner clearfix">
						<div class="wpb_wrapper wt_wpb_wrapper clearfix wt_animate 
						wt_animate_if_almost_visible" data-animation="fadeInLeft">
						
							<div class="wpb_text_column wpb_content_element " >
								<div class="wpb_wrapper">
									<h4><?php echo get_sub_field ('fa_titulo_do_depoimento') ?></h4>
									<p><?php echo get_sub_field ('fa_texto_do_depoimento') ?></p>
								</div>
							</div>
						</div>	
					</div>	
				</div>			

				<?php endwhile; ?>
								
			</div>
		</div>
	</div>
</div>
</section>

		<?php 

				else:

				    echo "nao existe slider!";

			endif;
		?>

<!--==========================
pricing Section 
============================-->

		<?php

			// check if the repeater field has rows of data
			if( have_rows('pr_pricing') ):

		?>

<section id="pricing" class="wt_section_area" style="padding-top:60px; ">
   <div class="wt-row-container wt-row-centered" style="border-color: #dddddd;border-style: solid;border-width: 0px 0px 0px 0px;">
		<div class="vc_row wpb_row vc_row-fluid"  style="padding-top: 10px;padding-bottom: 77px;">
			<div class="container" style="">
				<div class="row">
					<div class="wpb_column vc_column_container vc_col-sm-12">
						<div class="vc_column-inner clearfix">
							<div class="wpb_wrapper wt_wpb_wrapper clearfix">
								<div class="wt_section_heading intro_text text-center clearfix">
									<h2><?php echo get_field('pr_titulo'); ?></h2>									
									<h3><?php echo get_field('pr_sub_titulo'); ?></h3>
									<div class="botao">
										<h4>
											<a class="btn btn-theme" href="<?php echo get_field('pr_link_do_botao'); ?>"><?php echo get_field('pr_titulo_do_botao'); ?> 
											</a>
											<?php echo get_field('pr_sub_titulo_do_botao'); ?> 
										</h4>
									</div>
								</div>
								<div class="vc_row wpb_row vc_inner vc_row-fluid pricing-table-holder">

									<?php
										// loop through the rows of data
										while ( have_rows('pr_pricing') ) : the_row();
									?>

									<div class="wpb_column vc_column_container vc_col-sm-4">
										<div class="vc_column-inner ">
											<div class="wpb_wrapper">
												<div id="wt_pricing_box_sc-27163" class="wt_pricing_box_sc wt_animate wt_animate_if_almost_visible" data-animation="fadeInDown" data-animation-delay="200">
													<div class="wt_pricing_header">
														<h3><?php echo get_sub_field ('pr_usuarios') ?></h3>
														<div class="wt_plan_price">
															<h4><?php echo get_sub_field ('pr_valor') ?><i><?php echo get_sub_field ('pr_sub_titulo_do_valor') ?></i></h4>
														</div>
													</div>
													<div class="wt_pricing_content">
														<?php echo get_sub_field ('pr_planos') ?>
													</div>
													<div class="wt_pricing_btn">

														<?php $escolha = get_sub_field('pr_escolha_o_produto'); ?>

														<form action="<?php echo get_bloginfo('url'); ?>/cart/" method="post">
															<input type="hidden" name="plano" value="<?php echo $escolha->ID; ?>">
															<input type="submit" class="btn btn-black" value="<?php echo get_sub_field ('pr_titulo_do_botao') ?>">
														</form>

													</div>
												</div>
											</div>
										</div> 
									</div>

									<?php endwhile; ?>
									
								</div>
							</div>
						</div>
						<div class="wpb_wrapper wt_wpb_wrapper clearfix">
							<div id="enviar" class="container">
								<div class="cont row">
									<div class="col-md-12">
										<div class="titulo text-center">
											<h2><?php echo get_field('pr_titulo_do_contato'); ?></h2>
										</div>
									</div>
									
									<?php echo do_shortcode( get_field('pr_formulario2') ); ?>

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

				else:

				    echo "nao existe slider!";

			endif;
		?>

<!--==========================
Clients Section
============================-->

		<?php

			// check if the repeater field has rows of data
			if( have_rows('cl_clients') ):

		?>

<section id="clients" class="wt_section_area" style="">
	<div class="wt-row-container wt-row-centered" style="border-color: #dddddd;border-style: solid;border-width: 1px 0px 0px 0px;">
		<div class="vc_row wpb_row vc_row-fluid"  style="padding-top: 80px;padding-bottom: 90px;">
			<div class="container">
				<div class="row">
					<div class="wpb_column vc_column_container vc_col-sm-12">
						<div class="vc_column-inner clearfix">
							<div class="wpb_wrapper wt_wpb_wrapper clearfix">
								<div class="wt_section_heading intro_text">
									<h2><?php echo get_field('cl_titulo'); ?></h2>
									<h3><?php echo get_field('cl_sub_titulo'); ?></h3>									
									<div class="wt_clearboth"></div>
								</div>
								<div class="column col-md-12">
									<div class="container">
										<div class="row">

											<?php
												// loop through the rows of data
												while ( have_rows('cl_clients') ) : the_row();
													$imagem = get_sub_field('cl_imagem');
											?>

											<div class="columnlogo col-md-2">
												<div class="logos" style="background-image: url('<?php echo $imagem; ?>')">
													<img class="img" src="<?php echo IMG; ?>/logo_clientes.png">
												</div>
											</div>

											<?php endwhile; ?>

										</div>
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

<!--==========================
Slider down Section
============================-->

<section id="slider-down" class="slider">
	<div class="wt-row-container wt-row-centered wt_skin_light" style="background-image: url('<?php echo IMG; ?>/TimeSheet_img.png');">
		<div id="wt_section_heading" class="vc_row wpb_row vc_row-fluid text-center"  style="padding-top: 100px;padding-bottom: 100px;">
			<div class="container">
				<div class="row">
					<div class="wpb_column vc_column_container vc_col-sm-12">
						<div class="vc_column-inner clearfix">
							<div class="wpb_wrapper wt_wpb_wrapper clearfix">
								<div class="wt_section_heading intro_text wt_animate wt_animate_if_visible" data-animation="fadeIn">
									<h2 class="titulo"><?php echo get_field('sd_titulo'); ?></h2>
									<h3 class="text"><?php echo get_field('sd_sub_titulo'); ?></h3>
								</div>
								<div class="wpb_raw_code wpb_content_element wpb_raw_html" >
									<div class="wpb_wrapper">
										<a class="btn btn-primary btn-lg" href="<?php echo get_field('sd_link_do_botao'); ?>"><?php echo get_field('sd_titulo_do_botao'); ?></a>
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

				else:

				    echo "nao existe slider!";

			endif;
		?>	

<?php 
		endwhile;
	endif; 

get_footer(); ?>