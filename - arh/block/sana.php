<!--  -->
	<div class="bl_c pt60">
		<div class="sanator">
			<div class="head_c txt_c">
				<h2>Все виды санаторий</h2>
				<p>Выберите санаторий, который лучше всего Вам подходит или закажите консультацию</p>
			</div>
			<div class="sanator_c">

				<?php 
					$sql = DB::query("select * from sana ORDER BY rand()");
			        while($ana = mysqli_fetch_array($sql)){
						echo '<div class="sanator_item">
								<div class="sanator_ic">
									<a href="/page.php?'.$ana[id].'" target="_blank"><div class="sanator_img">
										<img class="lazy" data-src="/ass/img/sana/'.$ana[fon].'">
									</div></a>
									<div class="sanator_sena">
										<div class="sanator_se">
											от '.$ana[sena].' тг
										</div>
									</div>
									<div class="sanator_name">
										<p>
											'.$ana[name].'
										</p>
									</div>
									<div class="sanator_zabr">
										<div class="btn obrt_zv_act">Забронировать</div>
									</div>
									<div class="sanator_podr">
										<a href="/page.php?'.$ana[id].'" target="_blank"><div class="sanator_podr2">Подробнее..</div></a>
									</div>
								</div>
							</div>';
					}
				?>

			</div>
		</div>
	</div>