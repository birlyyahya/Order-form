<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Api extends CI_Controller
{



    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_api');
    }
    function getDomain()
    {

        $domain = $this->input->post('domain');

        $data = $this->M_api->getDomain($domain);

        echo $data;
    }

    function getClientDetails()
    {
        // $email = $this->input->post('email');
        $email = $_GET['email'];
        $data = $this->M_api->getClientDetails($email);

        print_r($data);
    }

    function login()
    {
        $email = $_GET['email'];
        $password = $_GET['password'];


        $output = $this->M_api->login($email, $password);

        echo $output;
    }



    // function getUrlLogin()
    // {
    //     $google_client = new Google_Client();

    //     $google_client->setClientId($this->google_key); //Define your ClientID

    //     $google_client->setClientSecret($this->google_secret); //Define your Client Secret Key

    //     $google_client->setRedirectUri('http://localhost:8080/orderform/checkout'); //Define your Redirect Uri

    //     $google_client->addScope('email');

    //     $google_client->addScope('profile');




    //     echo json_encode($authUrl);
    // }





    // function getProvinsi()
    // {
    //     $curl = curl_init();

    //     curl_setopt_array($curl, array(
    //         CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_ENCODING => "",
    //         CURLOPT_MAXREDIRS => 10,
    //         CURLOPT_TIMEOUT => 30,
    //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //         CURLOPT_CUSTOMREQUEST => "GET",
    //         CURLOPT_HTTPHEADER => array(
    //             'key: '. $this->api_key
    //         ),
    //     ));

    //     $response = curl_exec($curl);
    //     $err = curl_error($curl);

    //     curl_close($curl);

    //     if ($err) {
    //         echo "cURL Error #:" . $err;
    //     } else {
    //         echo $response;
    //     }
    // }
    // function getKota($id)
    // {
    //     $curl = curl_init();

    //     curl_setopt_array($curl, array(
    //         CURLOPT_URL => "https://api.rajaongkir.com/starter/city?province=".$id,
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_ENCODING => "",
    //         CURLOPT_MAXREDIRS => 10,
    //         CURLOPT_TIMEOUT => 30,
    //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //         CURLOPT_CUSTOMREQUEST => "GET",
    //         CURLOPT_HTTPHEADER => array(
    //             'key: '. $this->api_key
    //         ),
    //     ));

    //     $response = curl_exec($curl);
    //     $err = curl_error($curl);

    //     curl_close($curl);

    //     if ($err) {
    //         echo "cURL Error #:" . $err;
    //     } else {
    //         echo $response;
    //     }
    // }
}