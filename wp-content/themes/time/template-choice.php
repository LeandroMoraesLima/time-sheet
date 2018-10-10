<?php 

/*
Template Name: Escolha
*/
get_header();

	if (have_posts()) :
	    while (have_posts()) : the_post();

?>

<!--==========================
choice Section
============================-->

<section id="choice" class="wt_section_area">
	<div id="choice-channel" class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="container">
					<h2 class="titulo"><?php the_title(); ?></h2>
					<div class="text row">
						<div class="col-md-6">		
							<div class="row">						
								<div class="wpb_wrapper">									
									<?php echo get_field('esquerda'); ?>
								</div>
							</div>													
						</div>	
						<div class="col-md-6">		
							<div class="row column-reverse">						
								<div class="wpb_wrapper">

									<?php echo get_field('direita'); ?>
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

/*