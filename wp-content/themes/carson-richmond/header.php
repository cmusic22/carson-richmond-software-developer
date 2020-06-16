<!Doctype html>
<html>
	
	<head>
		<?php wp_head();?>
		<link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">
	</head>

<body <?php body_class();?>  >
	<div class="container-fluid"> <!--container open, close in footer.php-->
		<header class="sticky-top">
			
			<nav class="navbar navbar-expand-lg ">
				<a class="navbar-brand brand" href="/">Carson Richmond</a>
				<?php wp_nav_menu(
					array(
						'theme_location' => 'top-menu',
						'menu_class' => 'navbar-nav mynavbar'    )
				);?>
			</nav>
		</header>