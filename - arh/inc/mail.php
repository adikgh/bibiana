<?php
	if(isset($_GET['orderSend'])) {
		$tel  = strip_tags($_POST['tel']);
		$nm  = strip_tags($_POST['nm']);

		$from = "support@bosaga-sanatori.kz";
	    $to = "bosaga-saryagash@mail.ru";
	    $subject = "Поступило новый заказ от вашого сайта!";
	    $headers = "From:" . $from. "\r\n";
	    $headers .= "Content-type:text/html;charset=UTF-8";
		
	    $message = '
	            <html>
	                <head>
	                    <title>'.$subject.'</title>
	                </head>
	                <body>
	                    <p><b>Имя</b>: '.$nm.'</p>
	                    <p><b>Телефон</b>: '.$tel.'</p>
	                </body>
	            </html>'; //Текст нащего сообщения можно использовать HTML теги

	    if(mail($to, $subject, $message, $headers))
	    	echo "Success";
	    else 
	    	echo "Error"; //Отправка письма с помощью функции mail()

		exit();
	}