<?php
defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client as GuzzleClient;
use Google\Client as GoogleApiClient;





class M_api extends CI_Model
{

    private $urlsite;
    private $secret;
    private $identifier;
    private $api_key;


    public function __construct()
    {
        parent::__construct();
        $this->load->config('config');
        $this->urlsite = $this->config->item('urlsite');
        $this->identifier = $this->config->item('identifier');
        $this->secret = $this->config->item('secret');
        $this->api_key = $this->config->item('API_KEY');
    }
    function getDomain($domain)
    {
        $body  = [
            'form_params' => [
                'action' => 'DomainWhois',
                'username' => $this->identifier,
                'password' => $this->secret,
                'domain' => $domain,
                'responsetype' => 'json',
            ]
        ];

        $client = new GuzzleClient([
            'base_uri' => $this->urlsite,
        ]);
        $response = $client->post(
            'includes/api.php',
            $body
        );


        $data = json_decode($response->getBody(), true);

        $pricing = json_decode($this->getTLDPricing($domain), true);
        $domainWhois = array_merge($data, $pricing);

        return json_encode($domainWhois);
    }
    function getTLDPricing($domain)
    {
        $domainTLD = explode('.', $domain);

        $body = [
            'form_params' => [
                'action' => 'GetTLDPricing',
                'identifier' => $this->identifier,
                'secret' => $this->secret,
                'currencyid' => '1',
                'responsetype' => 'json'
            ]
        ];

        $client = new GuzzleClient([
            'base_uri' => $this->urlsite,
        ]);

        $response = $client->post(
            'includes/api.php',
            $body

        );
        $data = json_decode($response->getBody(), true);

        return  json_encode($data['pricing'][$domainTLD['1']]);
    }

    function GetClients($email)
    {
        $body = [
            'form_params' => [
                'action' => 'GetClients',
                'identifier' => $this->identifier,
                'secret' => $this->secret,
                'search' => $email,
                'status' => 'active',
                'responsetype' => 'json'
            ]
        ];

        $client = new GuzzleClient([
            'base_uri' => $this->urlsite,
        ]);

        $response = $client->post(
            'includes/api.php',
            $body
        );

        $clientID = $response->getBody();
        $clientID = json_decode($clientID);
        if ($clientID->numreturned === 1) {
            return $clientID = $clientID->clients->client[0]->id;
        } else {
            return 'error';
        }
    }

    function getClientDetails($email)
    {
        $clientID = $this->GetClients($email);

        if ($clientID == 'error') {
            return 'error';
        } else {
            $body2 = [
                'form_params' => [
                    'action' => 'GetClientsDetails',
                    'identifier' => $this->identifier,
                    'secret' => $this->secret,
                    'clientid' => $clientID,
                    'stats' => true,
                    'responsetype' => 'json'
                ]
            ];

            $client = new GuzzleClient([
                'base_uri' => $this->urlsite,
            ]);

            $response = $client->post(
                'includes/api.php',
                $body2
            );

            $data = $response->getBody();
            $tmp['fullname'] = json_decode($data)->fullname;
            $tmp['email'] = json_decode($data)->email;
            $tmp['userid'] = json_decode($data)->client_id;
            $tmp['address'] = json_decode($data)->address1;
            $tmp['city'] = json_decode($data)->city;
            $tmp['state'] = json_decode($data)->state;
            $tmp['country'] = json_decode($data)->country;
            $tmp['phonenumber'] = json_decode($data)->phonenumber;

            return $tmp;
        }
    }

    function login($email, $password)
    {
        $body = [
            'form_params' => [
                'action' => 'ValidateLogin',
                'identifier' => $this->identifier,
                'secret' => $this->secret,
                'email' => $email,
                'password2' => $password,
                'responsetype' => 'json'
            ]
        ];

        $client = new GuzzleClient([
            'base_uri' => $this->urlsite,
        ]);

        $response = $client->post(
            'includes/api.php',
            $body
        );

        $body = $response->getBody();
        $data = json_decode($body);

        return json_encode($data);

        // if ($data->result !== 'error') {
        //     //get Client ID
        //     $body = [
        //         'form_params' => [
        //             'action' => 'GetClients',
        //             'identifier' => $this->identifier,
        //             'secret' => $this->secret,
        //             'search' => $email,
        //             'responsetype' => 'json'
        //         ]
        //     ];

        //     $client = new GuzzleClient([
        //         'base_uri' => $this->urlsite,
        //     ]);

        //     $response = $client->post(
        //         'includes/api.php',
        //         $body
        //     );

        //     $clientID = $response->getBody();
        //     $clientID = json_decode($clientID);
        //     $clientID = $clientID->clients->client[0]->id;

        //     // getclientdetails
        //     $body3 = [
        //         'form_params' => [
        //             'action' => 'GetClientsDetails',
        //             'identifier' => $this->identifier,
        //             'secret' => $this->secret,
        //             'clientid' => $clientID,
        //             'stats' => true,
        //             'responsetype' => 'json'
        //         ]
        //     ];

        //     $client = new GuzzleClient([
        //         'base_uri' => $this->urlsite,
        //     ]);

        //     $response = $client->post(
        //         'includes/api.php',
        //         $body3
        //     );

        //     $body3 = $response->getBody();
        //     $tmp['fullname'] = json_decode($body3)->fullname;
        //     $tmp['email'] = json_decode($body3)->email;
        //     $tmp['userid'] = json_decode($body3)->client_id;

        //     return $tmp;
    }

    function addUser() {
        
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
