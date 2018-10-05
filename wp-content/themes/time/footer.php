<?php 

	if (have_posts()) :
	    while (have_posts()) : the_post();

?>


<!--==========================
Footer Section
============================-->

<div id="wt_footerWrapper" class="clearfix">
	<footer id="wt_footer" class="clearfix">
		<div class="container">
			<div class="row">
				<div class="wt_footer_col col-sm-6 col-md-4 wt_animate wt_animate_if_visible" data-animation="fadeInDown" data-animation-delay="150">
					<section id="nav_menu-2" class="widget">
						<div class="menu-footer-menu-container">
							<div class="col-md-6">
								<h4 class="mapa">Mapa do site</h4>

							<?php wp_nav_menu(array(
								'theme_location' => 'footer',
								'menu_class' => 'menu',
								'menu_id' => 'menu-footer-menu',
								'container' => ''
							) ); ?>

							</div>
							<div class="col-md-6"> 

								<?php wp_nav_menu(array(
								'theme_location' => 'footer2',
								'menu_class' => 'menu',
								'menu_id' => 'menu-footer-menu',
								'container' => ''
							) ); ?>
								
							</div> 
						</div>
					</section>					
				</div>
				<div class="wt_footer_col col-sm-6 col-md-4 wt_animate wt_animate_if_visible" data-animation="fadeInDown" data-animation-delay="300">
					<section id="social_font_aw-2" class="widget widget_social_font_awesome">
						<div class="wt_social_networks_sc">
							<ul class="wt_icon_40 wt_icon_type_1 wt_circle">
								<li class="logos" data-alt="Facebook">
									<a href="" class="facebook" rel="nofollow" title="Facebook" target="_blank">
										<span class="dashicons dashicons-facebook"></span>
									</a>
								</li>
								<li class="logos" data-alt="twitter">
									<a href="" class="twitter" rel="nofollow" title="twitter" target="_blank">
										<span class="dashicons dashicons-twitter"></span>
									</a>
								</li>
								<li class="logos" data-alt="Google">
									<a href="" class="google" rel="nofollow" title="Google" target="_blank">
										<span class="dashicons dashicons-twitter"></span>
										</i>
									</a>
								</li>
								<li class="logos" data-alt="Linkedin">
									<a href="" class="linkedin" rel="nofollow" title="Linkedin" target="_blank">
										<span class="dashicons dashicons-facebook"></span>
									</a>
								</li>
							</ul>
						</div>
					</section>
					<section id="text-4" class="widget widget_text">
						<div class="textwidget text-center">
							<p class="wt_copyright">2018-Todos os direitos reservados</p>
						</div>
					</section>
				</div>
				<div class="wt_footer_col col-sm-12 col-md-4 wt_animate wt_animate_if_visible" data-animation="fadeInDown" data-animation-delay="450">
					<section id="mc4wp_form_widget-2" class="widget widget_mc4wp_form_widget">
						<script type="text/javascript">
							(function() {
								if (!window.mc4wp) {
									window.mc4wp = {
										listeners: [],
										forms    : {
											on: function (event, callback) {
												window.mc4wp.listeners.push({
													event   : event,
													callback: callback
												});
											}
										}
									}
								}
							})();
						</script>
						<!-- MailChimp for WordPress v4.1.5 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
						<form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-559" method="post" data-id="559" data-name="newsletter" >
							<div class="mc4wp-form-fields">
								<p>
									<input class="form-control" type="email" id="mc4wp_email" name="email" required />
									<input class="mc4wp_submit" type="submit" value="INSCREVA-SE" />
								</p>
								<div style="display: none;">
									<input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" />
								</div>
								<input type="hidden" name="_mc4wp_timestamp" value="1537469505" />
								<input type="hidden" name="_mc4wp_form_id" value="559" />
								<input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" />
							</div>
							<div class="mc4wp-response"></div>
						</form>
						<!-- / MailChimp for WordPress Plugin -->
						</section>
						<section id="text-5" class="widget widget_text">
							<div class="textwidget">
								<p class="wt_subscribe">Assine nossa newsletter e se mantenha sempre informado</p>
							</div>
						</section>
					</div>
				</div>
			<!-- End row -->
			</div>
		<!-- End container -->
		</div>
	<!-- End footerWrapper -->
	</footer>
<!-- End footer -->
</div>

<!--==========================
Footer Black Section
============================-->

<section id="black">
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="titulo">
					<span>Desenvolvido por</span> 
					<a href="#">Camelo Digital</a>
				</div>
			</div>
		</div>
	</div>	
</section>


<?php 
		endwhile;
	endif; 

get_footer(); ?>

BEGIN JIVOSITE CODE {literal}
<script type='text/javascript'>
(function(){ var widget_id = 'v7n4J0uqZ0';var d=document;var w=window;function l(){var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
</script>
{/literal} END JIVOSITE CODE

  </body>
	
</html>