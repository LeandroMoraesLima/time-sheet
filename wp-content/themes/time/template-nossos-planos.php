<?php 

/*
template name: Nossos planos
*/

get_header();

?>

<!--==========================
Our plans Section
============================-->
	<style>
		#our-plans:before {
			background-image: url('<?php echo IMG; ?>/logo-planos1.png');
		}
	</style>
<section id="our-plans" class="wt_section_area" style="padding-top:100px; ">
	<div id="our" class="container-fluid">
		<div class="plamos">
			<h2 class="titulo">NOSSOS PLANOS</h2>
			<p class="sub-titulo">Conheça os planos e escolha a melhor opção para monitorar e controlar a produtividade de sua empresa.</p>	
		</div>					
		<div class="plans row">
			<div class="col-md-12">
				<div class="container">
					<div class="sub row">						
						<div class="col-md-6">		
							<div class="wpb_wrapper">
								<div class="botao">
									<h4 class="mark">Marque uma vídeo conferência para saber sobre o módulo</h4>
									<a class="btn btn-theme" href="#">7 DIAS FREE</a>
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
		<div class="col row">
			<div class="col-md-6">							
				<div class="image" style="background-image: url('<?php echo IMG; ?>/buildings-city.jpg');">								
				</div>							
			</div>													
			<div class="texto col-md-6">
				<h2 class="colum">ATÉ 5 USUÁRIOS</h2>
				<p class="text">10 Gigas
					<br>Xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
					<br>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx 
					<br>xxxxxxxxxxxxxxxxxxxxx.
				</p>
				<p><span>R$250 </span>por mês ou R$ 2.500 anual</p>
				<div class="botao1">
					<a class="btn btn-primary btn-lg" href="#">XXXXXXX</a>
				</div>
			</div>
		</div>	
		<div class="coluna2">
			<div class="row">
				<div class="col-md-6">							
					<div class="texto2">
						<h2 class="colum2">DE 05 ATÉ 15 USUÁRIOS</h2>
						<p class="text2">30 Gigas
							<br>Xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
							<br>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx 
							<br>xxxxxxxxxxxxxxxxxxxxx.
						</p>
						<p><span>R$350 </span>por mês ou R$ 3.500 anual</p>
						<div class="botao2">
							<a class="btn2 btn-primary btn-lg" href="#">XXXXXXX</a>
						</div>
					</div>														
				</div>													
				<div class="img col-md-6">
					<div class="image2" style="background-image: url('<?php echo IMG; ?>/12338.jpg');">								
					</div>
				</div>
			</div>
		</div>
	</div>	
</section>		
	

<?php get_footer(); ?>