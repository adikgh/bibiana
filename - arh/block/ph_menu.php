<div class="ph_menu">
	<a href="/"><div class="phm_it <?= $menu == 'home' ? 'phm_ita' : ''?>">
		<i class="fal fa-house-flood"></i>
		<span>Главная</span>
	</div></a>
	<a href="/3dtur.php"><div class="phm_it <?= $menu == '3d' ? 'phm_ita' : ''?>">
		<i class="fal fa-building"></i>
		<span>3D тур</span>
	</div></a>
	<a href="/catalog.php"><div class="phm_it <?= $menu == 'catalog' ? 'phm_ita' : ''?>">
		<i class="fal fa-bars"></i>
		<span>Каталог</span>
	</div></a>
	<a href="tel:<?=$site['phone']?>"><div class="phm_it">
		<i class="fal fa-phone-alt"></i>
		<span>Звонок</span>
	</div></a>
</div>