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
		$this->session->unset_userdata('data_perusahaan');
		$this->session->unset_userdata('menu');
		$datas['data'] = $template;
		$this->template->load('layout/layoutOrder', 'index.php', $datas);
	}
	public function konten()
	{
		include('Template.php');
		$this->session->unset_userdata('data_perusahaan');
		$this->session->unset_userdata('susunmenu');


		$hasil = $template[$_POST['template']];

		$this->session->set_userdata('template', $hasil);

		if (empty($this->session->userdata('template'))) {
			$this->session->set_flashdata('firstTemplate', 'window.onload = showWelcomePopup;');
			redirect('instan');
		}
		$this->template->load('layout/layoutOrder', 'konten.php',);
	}
	public function kuisioner()
	{
		$this->session->unset_userdata('susunmenu');
		if (empty($this->session->userdata('template'))) {
			$this->session->set_flashdata('firstTemplate', 'window.onload = showWelcomePopup;');
			redirect('instan');
		}
		$this->session->set_userdata('data_perusahaan', 'kuisioner');
		$this->template->load('layout/layoutOrder', 'kuisioner.php');
	}
	public function menu()
	{
		if (!$this->session->userdata('template')) {
			$this->session->set_flashdata('firstTemplate', 'window.load = showWelcomePopup;');
			redirect('instan');
		}
		$this->template->load('layout/layoutOrder', 'susunmenu.php');
	}
	public function uploadKonten()
	{
		if (!$this->session->userdata('template')) {
			$this->session->set_flashdata('firstTemplate', 'window.onload = showWelcomePopup;');
			redirect('instan');
		}
		if ($_POST) {
			$datamenu = $_POST;
			$getData['menu'] = $datamenu;
			$this->session->set_userdata('susunmenu', $datamenu);
		} else {
			redirect('menu');
		}
		$getData['menu'] = $this->session->userdata('susunmenu');
		$this->template->load('layout/layoutOrder', 'uploadkonten.php', $getData);
	}
	function submit()
	{
		if ($_POST) {
			$this->form_validation->set_rules('namaPerusahaan', 'NamaPerusahaan', 'required|regex_match[/^[a-zA-Z0-9 ]+$/]');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required|regex_match[/^[a-zA-Z0-9 ,.@-]+$/]');
			$this->form_validation->set_rules('provinsi', 'Provinsi', 'required|regex_match[/^[a-zA-Z0-9 ]+$/]');
			$this->form_validation->set_rules('kota', 'Kota', 'required|regex_match[/^[a-zA-Z0-9 ]+$/]');
			$this->form_validation->set_rules('kodepos', 'Kodepos', 'required|numeric');
			$this->form_validation->set_rules('telepon', 'Telepon', 'required|numeric');
			$this->form_validation->set_rules('fax', 'Fax', 'required|numeric');
			$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
			$this->form_validation->set_rules('facebook', 'Facebook', 'required|trim|regex_match[/^[a-zA-Z0-9_.-]+$/]');
			$this->form_validation->set_rules('instagram', 'instagram', 'required|trim|regex_match[/^[a-zA-Z0-9_.-]+$/]');
			$this->form_validation->set_rules('linkedin', 'linkedin', 'required|trim|regex_match[/^[a-zA-Z0-9_.-]+$/]');

			if ($this->form_validation->run() == FALSE) {
				$getData['menu'] = $this->session->userdata('susunmenu');

				$this->template->load('layout/layoutOrder', 'uploadkonten.php', $getData);
			} else {
				$perusahaan = [
					'namaperusahaan' => htmlspecialchars($_POST['namaPerusahaan'], ENT_QUOTES, 'UTF-8'),
					'alamat' =>  htmlspecialchars($_POST['alamat'], ENT_QUOTES, 'UTF-8'),
					'negara' => htmlspecialchars($_POST['negara'], ENT_QUOTES, 'UTF-8'),
					'provinsi' =>  htmlspecialchars($_POST['provinsi'], ENT_QUOTES, 'UTF-8'),
					'kota' => htmlspecialchars($_POST['kota'], ENT_QUOTES, 'UTF-8'),
					'kodepos' => htmlspecialchars($_POST['kodepos'], ENT_QUOTES, 'UTF-8'),
					'telepon' => htmlspecialchars($_POST['telepon'], ENT_QUOTES, 'UTF-8'),
					'fax' => htmlspecialchars($_POST['fax'], ENT_QUOTES, 'UTF-8'),
					'email' => $_POST['email'],
					'facebook' => $_POST['facebook'],
					'instagram' => $_POST['instagram'],
					'linkedin' => $_POST['linkedin'],
				];

				$current_date = date("d M Y");
				foreach ($_FILES as $input_name => $file_data) {
					if ($file_data['name'] !== "") {
						$config['upload_path'] = './public/uploads/' . $current_date . '/' . $perusahaan['namaperusahaan'];
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

								$perusahaan[$input_name] = array(
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
				$this->session->set_userdata('data_perusahaan', $perusahaan);
				redirect('checkout');
			}
		} else {
			redirect('menu');
		}
	}
	public function selesai()
	{

		print_r($_SESSION);

		if ($this->session->userdata('template')) {
			if (!$this->session->userdata('access_token')) {
				$this->loginGoogle();
			}

			$profile = $this->session->userdata('profile');

			$template = $this->session->userdata('template');

			$templates['id'] = $template;
			$templates['data'] = $profile;

			if ($this->session->userdata('data_perusahaan') === 'kuisioner') {
				$templates['totals'] = $template['pricing'] + 250000;
			};
			$this->template->load('layout/layoutOrder', 'selesai.php', $templates);
		} else {
			$this->session->set_flashdata('firstTemplate', 'window.onload = showWelcomePopup;');
			redirect('instan');
		}
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

			return json_encode($output);
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
					$this->session->set_flashdata('error', 'gagal');
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
		$this->session->unset_userdata('copywriting');
		$this->session->unset_userdata('data_perusahaan');
		$this->session->unset_userdata('template');
		$this->session->unset_userdata('profile');

		$referer = $this->agent->referrer();

		redirect($referer);
	}
	function logoutLogin()
	{
		$this->session->unset_userdata('profile');
		return 'berhasil';
	}

	function checkoutSubmit()
	{
		print_r($_POST);
		print_r($_SESSION);
		if($_POST['default-radio'] === 'login'){

			$data = [
				'userid' => $_POST['userid'],
				'pid' => $this->session->userdata('template')['id'],
				'domain' => $this->session->userdata('domain')['domain'],
			]
			$domain = $this->session->userdata('domain')['domain'];
			$domaintype = $this->session->userdata('domain')['type'];
			
		};
	}
	function doLogin()
	{
		$email = $_POST['email'];
		$password = $_POST['password'];

		$this->load->model('M_api');

		$output = $this->M_api->loginClient($email, $password);

		if ($output['result'] !== 'error') {
            $this->session->set_userdata('profile', $output);
        }
		echo json_encode($output);
	}
}
