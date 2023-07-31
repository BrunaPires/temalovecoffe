<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="imagens/icon.png" type="image/x-icon">
    <title>Love Coffee</title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
    <section class="menu-area">
			<div class="container">
				<div class="row">
					
					<nav class="main-menu">
					<section class="logo col-md-2 col-12"><img src="/wp-content/themes/themabrubru/assets/logo.png" alt="" width="100"></section>
						<?php 
						
						wp_nav_menu( 
							array( 
								'theme_location' => 'my_main_menu' 
							) 
						); 
						?>
					</nav>					
				</div>
			</div>
		</section>   
    </header>

    <main>