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

    function addUser($firstname, $lastname, $email, $address, $city, $state, $postcode, $country, $phonenumber, $password, $survey, $akuninfo)
    {
        $customFields = [
            [
                'name' => 'survey',
                'value' => $akuninfo
            ], [
                'name' => 'akuninfo',
                'value' => $akuninfo,
            ]
        ];

        $body = [
            'form_params' => [
                'action' => 'AddClient',
                'identifier' => $this->identifier,
                'secret' => $this->secret,
                'firstname' => $firstname,
                'lastname' => $lastname,
                'email' => $email,
                'address1' => $address,
                'city' => $city,
                'state' => $state,
                'postcode' => $postcode,
                'country' => $country,
                'phonenumber' => $phonenumber,
                'password2' => $password,
                'customFields' => base64_encode(json_encode($customFields)),
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

        return $data;
    }
    function addOrder($clientid, $pid, $domain, $domaintype, $eppCode, $paymentmethod, $idProtection)
    {
        $body = [
            'form_params' => [
                'action' => 'AddOrder',
                'identifier' => $this->identifier,
                'secret' => $this->secret,
                'clientid' => $clientid,
                'pid' => $pid,
                'domain' => $domain,
                'idnlanguage' => array(''),
                'billingcycle' => 'annually',
                'domaintype' => $domaintype,
                'regperiod' => 1,
                'dnsmanagement' => 0,
                'nameserver1' => 'ns1.dewahoster.com',
                'nameserver2' => 'ns2.dewahoster.com',
                'eppCode' => $eppCode,
                'paymentmethod' => $paymentmethod,
                'idprotection' => $idProtection,
                'responsetype' => 'json',
            ]
        ];

        $client = new GuzzleClient([
            'base_uri' => $this->urlsite,
        ]);

        $body = $client->getBody();

        $data = json_decode($body);

        return $data;
    }
}
