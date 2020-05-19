<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class MobilController extends Controller
{
    public function index(){
        
        return view('customer.dashboard');

    }
    public function getMobil(){
        

        $response = Http::get('localhost/rental_mobill/api/data_mobil');

        $result = json_decode($response->getBody()->getContents(), true);

        return view('customer.mobil', ['mobil' => $result['data']]);

    }
    public function detailMobil($id){

        $client = new Client();

        $response = $client->request('GET', 'http://localhost/rental_mobill/api/data_mobil', [
            'query' => [
                'id_mobil' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return view('customer.detailmobil', ['detail' => $result['data']]);
    }
    public function getMobill(){
        

        $response = Http::get('localhost/rental_mobill/api/data_mobil');

        $result = json_decode($response->getBody()->getContents(), true);

        return view('customer.typemobil', ['type' => $result['data']]);

    }
}

?>