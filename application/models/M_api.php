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

        return $domainWhois;
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

    function loginClient($email, $password)
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


        if ($data->result !== 'error') {
            //get Client ID
            $body = [
                'form_params' => [
                    'action' => 'GetClients',
                    'identifier' => $this->identifier,
                    'secret' => $this->secret,
                    'search' => $email,
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
            $clientID = $clientID->clients->client[0]->id;

            // getclientdetails
            $body3 = [
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
                $body3
            );

            $body3 = $response->getBody();
            $tmp['result'] = json_decode($body3)->result;
            $tmp['fullname'] = json_decode($body3)->fullname;
            $tmp['email'] = json_decode($body3)->email;
            $tmp['userid'] = json_decode($body3)->client_id;
            $tmp['address'] = json_decode($body3)->address1;
            $tmp['city'] = json_decode($body3)->city;
            $tmp['state'] = json_decode($body3)->state;
            $tmp['country'] = json_decode($body3)->country;
            $tmp['phonenumber'] = json_decode($body3)->phonenumber;
            $data = $tmp;
        }

        return $data;
    }

    function addClient($data)
    {
        $body = [
            'form_params' => [
                'action' => 'AddClient',
                'identifier' => $this->identifier,
                'secret' => $this->secret,
                'firstname' => $data['firstName'],
                'lastname' => $data['lastName'],
                'email' => $data['email'],
                'address1' => $data['alamat1'],
                'city' => $data['kota'],
                'state' => $data['region'],
                'postcode' => $data['kodepos'],
                'country' => $data['negara'],
                'phonenumber' => $data['telepon'],
                'password2' => $data['password1'],
                'customfields' => array(base64_encode(serialize(array("20" => $data['survey']))), base64_encode(serialize(array("21" => $data['akuninfo'])))),
                'responsetype' => 'json'
            ]
        ];

        print_r($body);
        echo "<br>";
        echo "<br>";
        echo "Berhasil Masuk Register";
        die;

        // $client = new GuzzleClient([
        //     'base_uri' => $this->urlsite,
        // ]);

        // $response = $client->post(
        //     'includes/api.php',
        //     $body
        // );

        // $body = $response->getBody();
        // $data = json_decode($body);

        // return $data;
    }
    function addOrder($data)
    {
      
        $body = [
            'form_params' => [
                'action' => 'AddOrder',
                'identifier' => $this->identifier,
                'secret' => $this->secret,
                'clientid' => $data['order']['clientid'],
                'pid' => $data['order']['pid'],
                'domain' => $data['order']['domain'],
                'idnlanguage' => array(''),
                'billingcycle' => 'annually',
                'domaintype' => $data['order']['domaintype'],
                'regperiod' => 1,
                'dnsmanagement' => 1,
                'nameserver1' => 'ns1.dewahoster.com',
                'nameserver2' => 'ns2.dewahoster.com',
                'eppCode' => $data['order']['eppCode'],
                'paymentmethod' => $data['order']['paymentMethod'],
                'idprotection' => $data['order']['idProtection'],
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

        $body = $response->getBody();

        $data = json_decode($body);

        return $data;
    }

    function getPaymentMethod()
    {
        $body = [
            'form_params' => [
                'action' => 'GetPaymentMethods',
                'identifier' => $this->identifier,
                'secret' => $this->secret,
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

        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: *");

        return $data->paymentmethods->paymentmethod;
    }
}
