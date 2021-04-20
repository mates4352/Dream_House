<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?> ../dist/assets/fonts/fonts.css"></link>
	<?php wp_head();?>
	<title><?php echo bloginfo(description);?></title>
</head>

<body>

	<!-- header -->
	<header class="header">
	<div class="container header__row">
		<div class="header__wrapper">
			<div class="burger">
				<span></span>
			</div>
			
		<a href="<?php bloginfo('url');?>">
			<svg class="header__logo logo" width="62" height="28" viewBox="0 0 62 28">
				<use xlink:href=" <?php echo IMAGES_DIR;?>/svg/sprite.svg#logo"></use>
			</svg>
		</a>

			<nav class="header__menu">
				<ul class="header__list">
					<li class="header__item">
						<a class="header__link" href="#" >Design Gallery</a>
					</li>

					<li class="header__item">
						<a class="header__link" href="#" >List of Architect</a>
					</li>

					<li class="header__item">
						<a class="header__link" href="#" >Articles</a>
					</li>

					<li class="header__item">
						<a class="header__link" href="#" >How it Works</a>
					</li>

				</ul>
			</nav>
		</div>

		<div class="header__buttons">
			<svg class="header__Search" width="18" height="18" viewBox="0 0 18 18">
				<use xlink:href=" <?php echo IMAGES_DIR;?>svg/sprite.svg#Search"></use>
			</svg>
			<button class="header__btn btn">Sign In</button>
			<button class="btn">Sign Up</button>
		</div>

	</div>
	</div>
</header>