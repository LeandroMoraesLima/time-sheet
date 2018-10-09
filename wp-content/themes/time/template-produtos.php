<?php 

/*
template name: Produtos
*/

get_header();


	if (have_posts()) :
	    while (have_posts()) : the_post();
			// check if the repeater field has rows of data
			$imagem = get_field('pd_imagem');
			$logo = get_field('pd_logo');
			
?>

<!--==========================
products Section
============================-->

<section id="other-products" class="wt_section_area" style="padding-top:100px; padding-bottom: 150px; ">
	<div id="other" class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="container">
					<h2 class="titulo-product"><?php echo get_field('pd_titulo'); ?></h2>
					<div class="row">
						<div class="img col-md-6">							
							<div class="image" style="background-image: url('<?php echo $imagem; ?>');">								
							</div>							
						</div>													
						<div class="text col-md-6">
							<div class="logo" style="background-image: url('<?php echo $logo; ?>');">								
							</div>
							<h4><?php echo get_field('pd_sub_titulo'); ?></h4>
							<p><?php echo get_field('pd_texto'); ?></p>			
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