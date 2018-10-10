<?php 

/*
template name: Outros produtos
*/

get_header();


	if (have_posts()) :
	    while (have_posts()) : the_post();
			// check if the repeater field has rows of data
			if( have_rows('ot_outros_produtos') ):				

?>

<!--==========================
other-products Section
============================-->

<section id="other-products" class="wt_section_area" style="padding-top:100px; ">
	<div id="other" class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="container">
					<h2 class="titulo"><?php echo get_field('ot_titulo'); ?></h2>
					<p><?php echo get_field('ot_sub_titulo'); ?></p>

					<?php
						// loop through the rows of data
						while ( have_rows('ot_outros_produtos') ) : the_row();
							// var_dump(get_sub_field ('ot_imagem'));
							$imagem = get_sub_field('ot_imagem');
							$logo = get_sub_field('ot_logo');
							if( $i % 2 == 0 ):
					?>

					<div class="row">
						<div class="img col-md-6">							
							<div class="image" style="background-image: url('<?php echo $imagem; ?>');">								
							</div>							
						</div>													
						<div class="text col-md-6">
							<div class="logo" style="background-image: url('<?php echo $logo; ?>');">								
							</div>
							<h4><?php echo get_sub_field('ot_titulo_do_cliente'); ?></h4>
							<p><?php echo get_sub_field('ot_texto_do_cliente'); ?></p>
							<div class="botao">
								<a class="btn btn-primary btn-lg" href="<?php echo get_sub_field('ot_link_do_botao'); ?>"><?php echo get_sub_field('ot_titulo_do_botao'); ?></a>
							</div>
						</div>
					</div>	

					<?php else: ?>

					<div class="other2">
						<div class="row column-revese">
							<div class="img2 col-md-6">							
								<div class="logo2" style="background-image: url('<?php echo $logo; ?>');">								
								</div>
								<p><?php echo get_sub_field('ot_texto_do_cliente'); ?></p>
								<div class="botao2">
									<a class="btn btn-primary btn-lg" href="<?php echo get_sub_field('ot_link_do_botao'); ?>"><?php echo get_sub_field('ot_titulo_do_botao'); ?></a>
								</div>								
							</div>													
							<div class="text2 col-md-6">
								<div class="image2" style="background-image: url('<?php echo $imagem; ?>');">								
								</div>
							</div>							
						</div>
					</div>

					<?php  endif; ?>

					<?php $i++; ?>

					<?php endwhile; ?>

					<?php  endif; ?>

				</div>
			</div>
		</div>
	</div>
</section>


<?php 
		endwhile;
	endif; 

get_footer(); ?>