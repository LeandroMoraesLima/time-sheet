<?php 

/*
template name: Nossos planos
*/

get_header();
	
	if (have_posts()) :
	    while (have_posts()) : the_post();
			$imagem = get_field('ou_imagem');

			
?>

<!--==========================
Our plans Section
============================-->
	<style>
		#our-plans:before {
			background-image: url('<?php echo $imagem; ?>');
		}
	</style>
<section id="our-plans" class="wt_section_area" style="padding-top:100px; ">
	<div id="our" class="container-fluid"> 	
		<div class="plamos">
			<h2 class="titulo"><?php echo get_field('ou_titulo'); ?></h2>
			<p class="sub-titulo"><?php echo get_field('ou_sub_titulo'); ?></p>	
		</div>					
		<div class="plans row">
			<div class="col-md-12">
				<div class="container">
					<div class="sub row">						
						<div class="col-md-6">		
							<div class="wpb_wrapper">
								<div class="botao">
									<h4 class="mark"><?php echo get_field('ou_texto'); ?></h4>
									<a class="btn btn-theme" href="<?php echo get_field('ou_link_do_botao'); ?>"><?php echo get_field('ou_titulo_do_botao'); ?></a>
								</div>										
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

<section id="coluna" class="usuario">			
	<div class="container">

		<?php if(  have_rows('ou_nossos_planos')):
   			$i = 0; ?>

   			<?php
				// loop through the rows of data
				while ( have_rows('ou_nossos_planos') ) : the_row();
					// var_dump(get_sub_field ('ot_imagem'));	
					$imagem = get_sub_field('ou_imagem');

					if( $i % 2 == 0 ):
					
			?>	

		<div class="col row">
			<div class="col-md-6">							
				<div class="image" style="background-image: url('<?php echo $imagem; ?>');">								
				</div>							
			</div>													
			<div class="texto col-md-6">
				<h2 class="colum"><?php echo get_sub_field('ou_titulo_dos_planos'); ?></h2>
				<p class="text"><?php echo get_sub_field('ou_sub_titulo_dos_planos'); ?></p>
				<p><span><?php echo get_sub_field('ou_valor_dos_planos'); ?> </span><?php echo get_sub_field('ou_texto'); ?></p>
				<div class="botao1">

					<?php 

					
					$escolha = get_sub_field('escolha_o_produto');
					
					?>

					<form action="<?php echo get_bloginfo('url'); ?>/cart/" method="post">
						<input type="hidden" name="plano" value="<?php echo $escolha->ID; ?>">
						<input type="submit"  class="btn btn-primary btn-lg" value="<?php echo get_sub_field('ou_titulo_do_botao'); ?>">
					</form>

				</div>
			</div>
		</div>			

		<?php else: ?>

		<div class="coluna2">
			<div class="row">
				<div class="col-md-6">							
					<div class="texto2">
						<h2 class="colum2"><?php echo get_sub_field('ou_titulo_dos_planos'); ?></h2>
						


						<?php if ( $i == 3 ): ?>

 						<div class="coluna3">								
							<div class="texto3">								
								<p class="text3"><?php echo get_sub_field('ou_sub_titulo_dos_planos'); ?></p>

							  	<?php echo do_shortcode( get_sub_field('ou_formulario_nossos_planos') ); ?>
							</div>
						</div>
		
						<?php else:  ?>

						<p class="text2"><p class="text"><?php echo get_sub_field('ou_sub_titulo_dos_planos'); ?></p>
						<p><span><?php echo get_sub_field('ou_valor_dos_planos'); ?> </span><?php echo get_sub_field('ou_texto'); ?></p>
						<div class="botao2">

							<?php 

					
							$escolha = get_sub_field('escolha_o_produto');
							
							?>
		
							
							<form action="<?php echo get_bloginfo('url'); ?>/cart/" method="post">
								<input type="hidden" name="plano" value="<?php echo $escolha->ID; ?>">
								<input type="submit"  class="btn2 btn-primary btn-lg" value="<?php echo get_sub_field('ou_titulo_do_botao'); ?>">
							</form>


						</div>
							
						<?php endif ?>




					</div>														
				</div>													
				<div class="img col-md-6">
					<div class="image2" style="background-image: url('<?php echo $imagem; ?>');">								
					</div>
				</div>
			</div>
		</div>

		<!-- 
	 -->
		<?php  endif; ?>
		
		<?php $i++; ?>

		<?php endwhile; ?>

		<?php  endif; ?>

	</div>	
</section>		
	

<?php 
		endwhile;
	endif; 

get_footer(); ?>