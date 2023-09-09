<? include '../config/core.php';	




	$menu_name = 'rooms';
   $site_set['name'] = 'Номера';
?>
<? include '../block/header.php'; ?>

   <div class="ble1">
      <div class="ble1_img lazy_bag" data-src="/assets/img/bag/slide2.jpg"></div>
      <div class="ble1_txt"><?=$site_set['name']?></div>
   </div>


   <div class="nmb">
      <div class="bl_c">
         <div class="nmb_c">

            <? $number = db::query("select * from `bibi_number` order by number asc"); ?>
            <? while($number_d = mysqli_fetch_array($number)): ?>
               <div class="nmb_i">
                  <div class="nmb_img">
                     <div class="lazy_img2" data-src="/assets/uploads/number/<?=$number_d['img']?>"></div>
                  </div>
                  <div class="nmb_iс">
                     <h4 class="nmb_iсt"><?=fun::t($number_d['type_id'])?></h4>
                     <div class="nmb_iсou">
                        <div class="">
                           <i class="fal fa-bed"></i>
                           <span><?=fun::d($number_d['door_id'])?> үлкен крават</span>
                        </div>
                        <div class="">
                           <i class="fal fa-user-circle"></i>
                           <span><?=fun::d($number_d['door_id'])?> гостей</span>
                        </div>
                        <div class="">
                           <i class="fal fa-vector-square"></i>
                           <span><?=fun::d($number_d['door_id'])?>0 М<sup>2</sup></span>
                        </div>
                     </div>
                     <div class="nmb_its">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus blanditiis fuga dolor sit amet consectetur, adipisicing elit.
                     </div>
                     <div class="nmb_ip">
                        <div class="fr_price"><?=$number_d['price']?></div>
                        <span>/</span>
                        <p>За сутки на <br> одного человека</p>
                     </div>
                     <div class="nmb_ib">
                        <div class="btn">Забронировать</div>
                     </div>
                  </div>
               </div>
            <? endwhile ?>
               
         </div>
      </div>
   </div>




<? include '../block/footer.php'; ?>