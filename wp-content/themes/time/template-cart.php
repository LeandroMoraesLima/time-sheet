<?php 

/*
Template Name: cart
*/
get_header();

	if (have_posts()) :
	    while (have_posts()) : the_post();

?>

<!--==========================
Cart Section
============================-->

<section id="cart" class="wt_section_area" style="padding-top:100px; ">
	<div id="cart-channel" class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="container">
					<div class="text row justify-content-center">			
						<div class="col-md-8 col-md-offset-2">		
							<div class="row">						
								<div class="wpb_wrapper">
									<h2 class="titulo">
										<?php the_title(); ?>	
									</h2>
									<?php the_content(); ?>	
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