<!-- footer -->
	<div class="footer">
		<div class="bl_c">
		<div class="footer_c">
			<div class="footer_i">
				<div class="footer_it">
					<div class="footer_img">
						<img class="lazy" data-src="/ass/img/logo/logo-footer-2.png">
					</div>

					<div class="footer_posl">
						Все права защищены Ⓒ 2020 - Санаторий Босага, г. Сарыағаш
					</div>
				</div>
			</div>
			<div class="footer_i">
				<div class="footer_it">
					<div class="footer_hd">
						МЕНЮ
					</div>
					<div class="footer_ik">
						<ul>
							<li><a href="#tur">3D тур</a></li>
					        <li><a href="#lesh">Лечение</a></li>
					        <li><a href="#usl">Услуги</a></li>
					        <li><a href="#rev">Отзывы</a></li>
					        <li><a href="#about">О нас</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer_i">
				<div class="footer_it">
					<div class="footer_hd">
						НОМЕРА
					</div>
					<div class="footer_ik">
						<ul>
							<li><a href="#stn">Стандарт</a></li>
							<li><a href="#plk">Полу люкс</a></li>
							<li><a href="#lk">Люкс</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>


<!-- gprog -->
	<div class="gprog">
		
	</div>


<!-- pl js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
	<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>


<!-- js -->
	<script src="/ass/norm/norm.js"></script>
	<script src="/ass/js/main.js"></script>

	</body>
</html>


<!-- Прямая званок -->
	<div class="bl_zvn">
		<a href="tel:<?=$site['phone']?>"><i class="fal fa-phone-alt"></i></a>
	</div>

<!-- Кнопка на верх -->
	<div class="bl_top">
		<a href="#home"><i class="fal fa-arrow-alt-up"></i></i></a>
	</div>

<!-- spl okn -->
	<div class="bl_spl obrt_zv dsp_n">
		<div class="bl_spl_zk obrt_zv_zak"></div>

		<div class="bl_splc">

			<div class="head_c txt_c">
				<h4>Забронировать месту</h4>
			</div>

			<div class="bron_cont bron_wh">
				<div class="form_i frm1">
					<input type="text" placeholder="Имя">
				</div>
				<div class="form_i frm2">
					<input type="text" class="phone" placeholder="Телефон">
				</div>
				<div class="form_i">
					<div class="btn btn_cl btn_otzl">Отправить</div>
				</div>
			</div>

			<div class="bl_spl_zkl obrt_zv_zak">
				<i class="fal fa-times"></i>
			</div>
		</div>
	</div>

	<div class="otp_sec">
		<div class="otp_ss">
			<div class="a" style="--n: 5;">
			  <div class="dot" style="--i: 0;"></div>
			  <div class="dot" style="--i: 1;"></div>
			  <div class="dot" style="--i: 2;"></div>
			  <div class="dot" style="--i: 3;"></div>
			  <div class="dot" style="--i: 4;"></div>
			</div>
		</div>
		<div class="otp_jj">
			<i class="far fa-check-circle"></i>
			<p>Успешно отправлено!</p>
		</div>
		<div class="otp_er">
			<i class="fas fa-exclamation-triangle"></i>
			<p>Ошибка!</p>
		</div>
	</div>



<?php include 'ph_menu.php' ?>