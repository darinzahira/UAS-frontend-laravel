<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class adminController extends Controller
{
    public function index(){
        
        return view('admin.dashboard');

    }
    public function getMobil(){
        
        $no=1;
        $response = Http::get('localhost/rental_mobill/api/data_mobil');

        $result = json_decode($response->getBody()->getContents(), true);

        return view('admin.mobil', ['no' => $no, 'mobil' => $result['data']]);

    }
    public function detailMobil($id){
        $client = new Client();

        $response = $client->request('GET', 'http://localhost/rental_mobill/api/data_mobil', [
            'query' => [
                'id_mobil' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return view('admin.detailmobil', ['detail' => $result['data']]);
    }
    public function editMobil($id){
        
        $client = new Client();

        $response = $client->request('GET', 'http://localhost/rental_mobill/api/data_mobil', [
            'query' => [
                'id_mobil' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return view('admin.editmobil', ['mobil' => $result['data']]);
    

    }
    public function updateMobil(Request $request){
        $client = new Client();

        $response = $client->request('PUT', 'http://localhost/rental_mobill/api/data_mobil', [
            'form_params' => [
                'id_mobil' => $request->id_mobil,
                'kode_type' => $request->kode_type,
                'merk' => $request->merk,
                'nopol' => $request->nopol,
                'warna' => $request->warna,
                'tahun' => $request->tahun,
                'harga' => $request->harga,
                'status' => $request->status,
                'denda' => $request->denda,
                'ac' => $request->ac,
                'mp3_player' => $request->mp3_player,
                'central_lock' => $request->central_lock,
                'supir' => $request->supir
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return redirect('/mobil');
    
    }
    public function deleteMobil($id){
        $client = new Client();

        $response = $client->request('DELETE', 'http://localhost/rental_mobill/api/data_mobil', [
            'form_params' => [
                'id_mobil' => $id           
         ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return redirect('/mobil');
    }
    public function tambahMobil(){

        $response = Http::get('localhost/rental_mobill/api/data_type');

        $result = json_decode($response->getBody()->getContents(), true);

        return view('admin.tambahmobil',['type' => $result['data']]);

    }
    public function insertMobil(Request $request){
        $client = new Client();

        $response = $client->request('POST', 'http://localhost/rental_mobill/api/data_mobil', [
            'form_params' => [
                'kode_type' => $request->kode_type,
                'merk' => $request->merk,
                'nopol' => $request->nopol,
                'warna' => $request->warna,
                'tahun' => $request->tahun,
                'harga' => $request->harga,
                'status' => $request->status,
                'denda' => $request->denda,
                'ac' => $request->ac,
                'mp3_player' => $request->mp3_player,
                'central_lock' => $request->central_lock,
                'supir' => $request->supir
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return redirect('/mobil');
    }
    public function getType(){
        
        $no=1;
        $response = Http::get('localhost/rental_mobill/api/data_type');

        $result = json_decode($response->getBody()->getContents(), true);

        return view('admin.type', ['no' => $no, 'type' => $result['data']]);

    }
    public function editType($id){
        
        $client = new Client();

        $response = $client->request('GET', 'http://localhost/rental_mobill/api/data_type', [
            'query' => [
                'id_type' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return view('admin.edittype', ['type' => $result['data']]);
    

    }
    public function updateType(Request $request){
        $client = new Client();

        $response = $client->request('PUT', 'http://localhost/rental_mobill/api/data_type', [
            'form_params' => [
                'id_type' => $request->id_type,
                'nama_type' => $request->nama_type,
                'kode_type' => $request->kode_type
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return redirect('/type');
    
    }
    public function deleteType($id){
        $client = new Client();

        $response = $client->request('DELETE', 'http://localhost/rental_mobill/api/data_type', [
            'form_params' => [
                'id_type' => $id           
         ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return redirect('/type');
    }
    public function tambahType(){

       return view('admin.tambahtype');

    }
    public function simpanType(Request $request){
        $client = new Client();

        $response = $client->request('POST', 'http://localhost/rental_mobill/api/data_type', [
            'form_params' => [
                'nama_type' => $request->nama_type,
                'kode_type' => $request->kode_type
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return redirect('/type');
    }
    public function getCustomer(){
        
        $no=1;
        $response = Http::get('localhost/rental_mobill/api/data_customer');

        $result = json_decode($response->getBody()->getContents(), true);

        return view('admin.customer', ['no' => $no, 'customer' => $result['data']]);

    }
    public function editCustomer($id){
        
        $client = new Client();

        $response = $client->request('GET', 'http://localhost/rental_mobill/api/data_customer', [
            'query' => [
                'id_customer' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return view('admin.editcustomer', ['customer' => $result['data']]);
    

    }
    public function updateCustomer(Request $request){
        $client = new Client();

        $response = $client->request('PUT', 'http://localhost/rental_mobill/api/data_customer', [
            'form_params' => [
                'id_customer' => $request->id_customer,
                'nama' => $request->nama,
                'username' => $request->username,
                'alamat' => $request->alamat,
                'gender' => $request->gender,
                'no_tlp' => $request->no_tlp,
                'no_ktp' => $request->no_ktp,
                'password' => md5($request->password)
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return redirect('/customer');
    
    }
    public function deleteCustomer($id){
        $client = new Client();

        $response = $client->request('DELETE', 'http://localhost/rental_mobill/api/data_customer', [
            'form_params' => [
                'id_customer' => $id           
         ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return redirect('/customer');
    }
    public function tambahCustomer(){

        return view('admin.tambahcustomer');
 
     }
     public function simpanCustomer(Request $request){
         $client = new Client();
 
         $response = $client->request('POST', 'http://localhost/rental_mobill/api/data_customer', [
             'form_params' => [
                'nama' => $request->nama,
                'username' => $request->username,
                'alamat' => $request->alamat,
                'gender' => $request->gender,
                'no_tlp' => $request->no_tlp,
                'no_ktp' => $request->no_ktp,
                'password' => md5($request->password)
             ]
         ]);
 
         $result = json_decode($response->getBody()->getContents(), true);
 
         return redirect('/customer');
     }
    public function getTransaksi(){
        
        $no=1;
        $response = Http::get('localhost/rental_mobill/api/data_transaksi');

        $result = json_decode($response->getBody()->getContents(), true);

        return view('admin.transaksi', ['no' => $no, 'transaksi' => $result['data']]);

    }
    
}

?>
