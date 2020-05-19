<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TransaksiController extends Controller
{
    public function get_data(){
        

        $response = Http::get('localhost/rental_mobill/api/data_transaksi');

        $result = json_decode($response->getBody()->getContents(), true);

        return view('customer.transaksi', ['transaksi' => $result['data']]);

    }
}

?>