<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instan extends CI_Controller {

	
	public function index()
	{
		$this->template->load('layout/layoutOrder','index.php');
	}
	public function konten()
	{
		$this->template->load('layout/layoutOrder','konten.php');
	}
	public function kuisioner()
	{
		$this->template->load('layout/layoutOrder','kuisioner.php');
	}
	public function menu()
	{
		$this->template->load('layout/layoutOrder','susunmenu.php');
	}
	
	public function selesai()
	{
		$this->template->load('layout/layoutOrder','selesai.php');
	}
	public function uploadKonten()
	{
		$this->template->load('layout/layoutOrder','uploadkonten.php');
	}

}
