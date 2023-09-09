<?php include 'inc/core.php';
	
	$done = false;

	$qwerty = DB::query("select * from sana");
    while($ana = mysqli_fetch_array($qwerty)){
    	if(isset($_GET[$ana['id']]))
	    {
	        $name = $ana['name'];
	        $fon = $ana['fon'];
	        $sena = $ana['sena'];
	        $info = $ana['info'];
	        $price = $ana['price'];
	        $images = explode(",", $ana['images']);
	        $done = true;
	    }
	}

	if (!$done) {
		header('location: /sana.php');
	}

	$menu = 'nn';
?>
<?php include 'block/header.php'; ?>

<!-- slider -->
	<div class="bacg_san" style="background: url('/ass/img/sana/<?=$fon?>');background-size: cover;">
		<div class="bacg_center">
			<div class="bacg_fon">
				<h1 class="name_san"><?=$name?></h1>
				<div class="sana_san disb_zab">
					от <?=$sena?> тг
				</div>
			</div>
		</div>
	</div>



<!--  -->
	<div class="pol_opi">
		<div class="bl_c">
			<div class="pol_lenta">
				<div class="slider">
					<div class="swiper-container">
					    <div class="swiper-wrapper">
					    	<?php 
								foreach ($images as &$value) {
								    echo '
							   			<div class="swiper-slide">
											<img src="/ass/img/sana/'.$name.'/'.$value.'">
					    				</div>
								    ';
								}
					    	?>
					    </div>
					    <!-- Add Arrows -->
					    <div class="swiper-button-next"></div>
					    <div class="swiper-button-prev"></div>
					    <div class="swiper-pagination"></div>
				  	</div>
				</div>

				<div class="txt_head">
					<h2>Описание</h2>
				</div>

				<div class="infos_san">
					<p><?=$info?></p>
				</div>

				<div class="txt_head">
					<h2>Цены путевок</h2>
				</div>

				<div class="infos_san table_infs">
					<table>
						<thead>
							<tr>
								<th>Вид номера</th>
								<th>Вид размещения</th>
								<th>Цена за сутку</th>
							</tr>
						</thead>
						<tbody>
							<?=$price?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


<?php include 'block/footer.php'; ?>