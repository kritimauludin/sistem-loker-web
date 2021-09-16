<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ApiAddress extends CI_Controller
{
    /*public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }*/
    private $url = "https://api.rajaongkir.com/starter/";
    private $apiKey = "apiKey Rajaongkir anda";
    public function rajaongkir()
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/city?id=39&province=5",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: 66ba7e7b3a2531644c7a85663940c5ee"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
            $responsedata = json_decode($);
            echo  $responsedata('province');
        }
    }
}
