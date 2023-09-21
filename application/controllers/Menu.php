<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller
{
    function menuGet() {

        // var_dump($_POST);

		// $menu = $_POST['data-menu'];
		// $menu2 = $_POST['data-menu'];
		// $menu3 = $_POST['data-menu'];


		// $datamenu = [
		// 	'menu1' => $menu,
		// 	'menu2' => $menu,
		// ];
		

		// var_dump($datamenu);

		$menu = array($_POST);
		$cookie_name = "menu";
			
		foreach ($menu as $dataMenu) {
			setcookie($cookie_name, serialize($dataMenu), time() + (86400 * 30), "/"); // 86400 = 1 day
		}
		// var_dump(unserialize($_COOKIE["menu"]));

		redirect('upload-konten');
        die;

	}
    
}
