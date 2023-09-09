// 
let loc_hash;

// 
$(document).ready(function() {

	// 
	$(function() {
        $('.lazy').lazy({
          effect: "fadeIn",
          effectTime: 500,
          threshold: 0
        })
    })


	// 
	let scroll = $(window).scrollTop()
	if (scroll > 120) {
		$('.header').addClass('header_fix')
    } else {
    	$('.header').removeClass('header_fix')
    }
	if (scroll > 600) {
		$('.bl_top').addClass('bl_top_act')
    } else {
		$('.bl_top').removeClass('bl_top_act')
    }

	$(window).scroll(function() {
    	scroll = $(window).scrollTop()
		if (scroll > 120) {
			$('.header').addClass('header_fix')
	    } else {
	    	$('.header').removeClass('header_fix')
	    }
		if (scroll > 600) {
			$('.bl_top').addClass('bl_top_act')
	    } else {
			$('.bl_top').removeClass('bl_top_act')
	    }
	})



	// 
	$('.na_vniz').click(function() {
	    $('body,html').animate({
	        scrollTop: $(window).height() - 150
	    }, 10)
	})


	// 
	$(".phone").mask("+7 (799) 999-99-99")


	$('.obrt_zv_act').click(function(){
		$('.obrt_zv').removeClass('dsp_n')
		$('html').addClass('ovr_h')
		setTimeout(function(){
			$('.obrt_zv').addClass('bl_spl_act')
		}, 10)
	})
	$('.obrt_zv_zak').click(function(){
		$('.obrt_zv').removeClass('bl_spl_act')
		setTimeout(function(){
			$('.obrt_zv').addClass('dsp_n')
			$('html').removeClass('ovr_h')
		}, 500)
	})






		//заказать
	$(".btn_otzl").click(function(){
		var tel	  	= $(this).parent().siblings('.frm1').children('input')
		var nm  	= $(this).parent().siblings('.frm2').children('input')

		if (tel.val() == '' || nm.val() == '') {
			tel.css('borderColor','red')
			nm.css('borderColor','red')
		} else {
			tel.css('borderColor','var(--cm)')
			nm.css('borderColor','var(--cm)')

			$.ajax({
				url: "/mail.php?orderSend",
				type: "POST",
				dataType: "html",
				data: ({tel: tel.val(), nm: nm.val()}),
				success: function(data){
					if(data == 'Success')
					{
						console.log("Успешно отправлено")
						tel.val("")
						nm.val("")

						setTimeout(function() {
							$('.otp_jj').css('display', 'flex')
	
							$('.otp_ss').css('display', 'none')
							setTimeout(function() {
								$('.otp_sec').animate({
									opacity : 1
								}, 300, function(){
									$('.otp_sec').css('display', 'none')
									$('.otp_ss').css('display', 'none')
									$('.otp_jj').css('display', 'none')
								})
							}, 500)
						}, 500)
					} else if(data == 'Error') {
						console.log("Ошибка.")
					} else {
						console.log("Ошибка. Обновите страницу и Повторите попытку.")
					}
				},
				beforeSend: function(data){
					console.log("Отправка...");
					$('.otp_sec').css('display', 'flex')
					$('.otp_ss').css('display', 'flex')
					$('.otp_sec').animate({
						opacity : 1
					}, 300)
				},
				error: function(data){
					console.log(data)
				}
			})
		}
	})

})





// alert(window.location.href);
// alert(window.location.hash);

// if (window.matchMedia("(max-width: 480px)").matches) {
	// $('.callback-bt').click(function(){
	// 	location.href = 'tel:87007209292';
	// })
	// $('.callback-btw').click(function(){
	// 	location.href = 'https://wa.me/77007209292?text=Я%20заинтересован%20по%20поводу%20санаторий%20...';
	// })
// }





var swiper = new Swiper('.swiper-container', {
  speed: 500,
  slidesPerView: 1,
  loop: true,
  autoplay: {
    delay: 5000,
  },
  dynamicBullets: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});