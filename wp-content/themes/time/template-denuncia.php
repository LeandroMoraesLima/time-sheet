<?php 

/*
	template name: Canal de denúncia
*/

get_header();

	if (have_posts()) :
	    while (have_posts()) : the_post();
			$imagem = get_field('cc_imagem');

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
						<div class="col-md-6">		
							<div class="row">						
								<div class="wpb_wrapper">
									<h2 class="titulo"><?php echo get_field('cc_titulo'); ?></h2>
									<p><?php echo get_field('cc_texto'); ?><a href="<?php echo get_field('cc_link_do_botao'); ?>"><?php echo get_field('cc_titulo_do_botao'); ?> </a></p>
								</div>
							</div>													
						</div>	
						<div class="col-md-6">									
							<div class="image" style="background-image: url('<?php echo $imagem; ?>');"></div>
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