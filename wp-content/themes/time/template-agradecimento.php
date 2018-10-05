<?php 

/*
	template name: Agradecimento
*/

get_header();

	if (have_posts()) :
	    while (have_posts()) : the_post();

?>

<!--==========================
Thanks Section
============================-->

<section id="thanks" style="padding-top:39px; ">
	<div class="container-fluid">
		<div class="row">
			<div class="agradecimento">
				<div class="container">
					<div class="row">
						<div class="titulo">
							<h2><?php echo get_field('th_titulo'); ?></h2>
							<p><?php echo get_field('th_texto'); ?></p>
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