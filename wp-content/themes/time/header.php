<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TimeSheet</title>

	<?php wp_head(); ?>
	
	<link rel="stylesheet" href="<?php echo CSS; ?>/app.css?v=2">

</head>
<body>

<!--==========================
Header
============================-->

	<header id="wt_header" class="wt_resp_nav_under_767 navbar navbar-fixed-top responsive_nav clearfix" role="banner" style="top: 0px;">    	
		<div class="container">
			<div id="logo" class="navbar-header">
				<a class="navbar-brand" href="#">
					<div class="slider" style="background-image: url('<?php echo IMG; ?>/logo.png')"></div>
				</a>	
			</div>		

			<!-- Navigation -->
			<nav id="nav" class="wt_nav_top collapse navbar-collapse" role="navigation" data-select-name="-- Main Menu --">   
				<?php wp_nav_menu(array(
					'theme_location' => 'header',
					'menu_class' => 'menu nav navbar-nav navbar-right',
					'menu_id' => 'menu-menu-1',
					'container' => ''
				) ); ?>
				
			</nav>
		</div> 	
		<!-- End container -->    
	</header>

