<?php 

get_header();

	if (have_posts()) :
	    while (have_posts()) : the_post();

?>

<!--==========================
complaint channel Section
============================-->

<section id="complaint" class="wt_section_area" style="padding-top:60px; ">
	<div id="complaint-channel" class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="container">
					<div class="text row">			
						<div class="col-md-12">		
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