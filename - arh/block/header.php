<!DOCTYPE html>
<html lang="kz">
	<head>
		
		<?php include 'head.php' ?>

	</head>
	<body>

<!-- header -->
	<div class="header <?= $menu == 'nn' ? 'header_nn' : ''?>">
		<div class="bl_c">
			<div class="header_c">
				<div class="logo">
					<a href="/"><div class="logo_img"></div></a>
				</div>
				<div class="menu">
					<nav>
					    <ul>
					        <li class="menu_i"><a href="#tur">3D тур</a></li>
					        <li class="menu_i"><a href="#lesh">Лечение</a></li>
					        <li class="menu_i"><a href="#nom">Номера</a></li>
					        <li class="menu_i"><a href="#usl">Услуги</a></li>
					        <li class="menu_i"><a href="#rev">Отзывы</a></li>
					        <li class="menu_i"><a href="#about">О нас</a></li>
					        <li class="menu_i"><div class="btn obrt_zv_act">Забронировать</div></li>
					        <li class="menu_is"><a target="_blank" href="https://instagram.com/<?=$site['instagram']?>"><i class="fab fa-instagram"></i></a></li>
					        <li class="menu_is"><a target="_blank" href="https://wa.me/<?=$site['whatsapp']?>"><i class="fab fa-whatsapp"></i></a></li>
					    </ul>
					</nav>
				</div>
			</div>
		</div>
	</div>