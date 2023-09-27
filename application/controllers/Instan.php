<?php
defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;
use SebastianBergmann\Environment\Console;

/**
 * @var CI_Loader $template
 */


class Instan extends CI_Controller
{

	private $google_key;
	private $google_secret;
	private $google_redirect;

	public function __construct()
	{
		parent::__construct();
		$this->google_key = $this->config->item('google_key');
		$this->google_secret = $this->config->item('google_secret');
		$this->google_redirect = $this->config->item('google_redirect');
	}

	public function index()
	{
		include('Template.php');

		$datas['data'] = $template;
		$this->template->load('layout/layoutOrder', 'index.php', $datas);
	}
	public function konten()
	{
		$this->session->set_userdata('template', $_POST['template']);
		$this->template->load('layout/layoutOrder', 'konten.php',);
	}
	public function kuisioner()
	{
		$this->template->load('layout/layoutOrder', 'kuisioner.php');
	}
	public function menu()
	{
		$this->template->load('layout/layoutOrder', 'susunmenu.php');
	}
	public function uploadKonten()
	{
		$datamenu = $_POST;
		$getData['menu'] = $datamenu;
		$this->template->load('layout/layoutOrder', 'uploadkonten.php', $getData);
	}
	public function selesai()
	{
		if (!$this->session->userdata('access_token')) {
			$this->loginGoogle();
		}

		$profile = $this->session->userdata('profile');

		$template = $this->session->userdata('template');

		// if (isset($_POST)) {
		$current_date = date("d M Y");
		$data = array();
		foreach ($_FILES as $input_name => $file_data) {
			if ($file_data['name'] !== "") {
				$config['upload_path'] = './public/uploads/' . $current_date;
				$config['allowed_types'] = 'pdf|docx|jpg|png';
				$config['max_size'] = '20000';
				$config['max_width'] = '1024';
				$config['max_height'] = '768';
				$this->upload->initialize($config);

				if (!file_exists($config['upload_path'])) {
					mkdir($config['upload_path'], 0777, true);
				}

				// Membuat path lengkap untuk file yang akan diunggah
				$full_path = $config['upload_path'] . '/' . $file_data['name'];

				// Memeriksa apakah file sudah ada
				if (!file_exists($full_path)) {
					// Jika file belum ada, lakukan proses pengunggahan
					if ($this->upload->do_upload($input_name)) {
						$gambar = $this->upload->data();

						$data[$input_name] = array(
							'nama' => $gambar['file_name'],
							'path' => $gambar['full_path'],
						);
					} else {
						echo 'gagal';
						var_dump($_FILES);
						echo $this->upload->display_errors();
					}
				} else {
					// Jika file sudah ada, berikan pesan atau lakukan tindakan lain
					echo 'File dengan nama yang sama sudah ada.';
				}
			}
		}
		// 	$namaPerusahaan = $_POST['namaPerusahaan'];
		// 	$alamat = $_POST['alamat'];
		// 	$alamat = $_POST[''];
		// }
		$templates['id'] = $template;
		$templates['data'] = $profile;
		$this->template->load('layout/layoutOrder', 'selesai.php', $templates);
	}
	function loginGoogle()
	{
		$google_client = new Google_Client();

		$google_client->setClientId($this->google_key); //Define your ClientID

		$google_client->setClientSecret($this->google_secret); //Define your Client Secret Key

		$google_client->setRedirectUri('http://localhost:8080/orderform/checkout'); //Define your Redirect Uri

		$google_client->addScope('email');

		$google_client->addScope('profile');

		$authUrl = $google_client->createAuthUrl();

		if (!$this->session->userdata('getUrl')) {
			$this->session->set_userdata('getUrl', $authUrl);

			$output = [
				'status' => 1,
				'data' => $authUrl
			];

			echo json_encode($output);
			return;
		}
		if (isset($_GET["code"]) || $this->session->userdata('access_token')) {

			$token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

			if (!isset($token["error"])) {
				$google_client->setAccessToken($token['access_token']);

				$this->session->set_userdata('access_token', $token['access_token']);

				$google_service = new Google_Service_Oauth2($google_client);

				$data = $google_service->userinfo->get();

				$this->load->model('M_api');

				$profile = $this->M_api->getClientDetails($data['email']);

				if ($profile == 'error') {
					$this->session->unset_userdata('access_token');
					$this->session->set_flashdata('error','gagal');
					header('location:' . base_url('checkout'));
				} else {
					$this->session->set_userdata('profile', $profile);
					header('location:' . base_url('checkout'));
				}
			}
		}
	}
	function logout()
	{
		$this->session->unset_userdata('access_token');
		$this->session->unset_userdata('getUrl');
		$this->session->unset_userdata('user_data');
		session_destroy();

		$referer = $this->agent->referrer();

		redirect($referer);
	}

	function checkout()
	{
	}

	function login() {
		$email = $_POST['email'];
		$password = $_POST['password'];


		$output = $this->M_api->login($email, $password);

		echo $output;
	}
}
