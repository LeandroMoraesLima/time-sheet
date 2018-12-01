<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TimeSheet</title>

	<?php wp_head(); ?>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo CSS; ?>/app.css?v=4">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<!--==========================
Header
============================-->

	<header id="wt_header" class="wt_resp_nav_under_767 navbar navbar-fixed-top responsive_nav clearfix" role="banner" style="top: 0px;">    	
		<div class="container">
			<div id="logo" class="navbar-header">
				<a class="navbar-brand" href="#">
					<div class="slider" style="background-image: url('<?php echo IMG; ?>/logo1.png')"></div>
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

		<div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<?php wp_nav_menu(array(
				'theme_location' => 'header',
				'menu_class' => 'menu nav navbar-nav navbar-right',
				'menu_id' => 'menu-menu-1',
				'container' => ''
			) ); ?>
		</div>

		<span class="cel" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

		<script>
			function openNav() {
				document.getElementById("mySidenav").style.width = "362px";
			}

			function closeNav() {
			    document.getElementById("mySidenav").style.width = "0";
			}
		</script> 
	</header>

