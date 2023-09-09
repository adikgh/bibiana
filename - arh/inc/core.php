<?php require 'db.php';

class core
{
    public function __construct()
    {
        new db;
        session_start();
    }
} 
$core = new core;


// 
$site = array(
	'name' 		=> 'bosaga-sanatori.kz',
	'map'		=> '/',
	'logo'		=> '/ass/img/logo/logo_m.png',
	'color'		=> '#29313E',
	'title' 	=> 'Санаторий Босаға - оздоровление и лечения в Сарыагаш!',
	'disc' 		=> '!!!',
	'keyw' 		=> '!!!',
	'phone'		=> '8 (701) 485 25 25',
	'phone2'	=> '8 (7253) 75 10 54',
	'phone3'	=> '8 (747) 385 25 25',
	'phone4'	=> '8 (776) 485 25 25',
	'instagram' => 'bosagasaryagashsanatori',
	'whatsapp'	=> '77014852525',
	'mail'		=> 'bosaga-saryagash@mail.ru'
);

$menu = 'home';