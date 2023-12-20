<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\City;
use App\Models\Province;
class TestController extends Controller
{
   public function index(){
       return "testtt";
   }
   public function getprovince(){
        $client = new Client();

        try{
            $response = $client->get('https://api.rajaongkir.com/starter/province',array(
                'headers' => array(
                    'key'=>'9f3168f3c9a36fcbb7350f5e56b64cca',
                )
                ));
        }catch(RequestException $e){
        var_dump($e->getResponse()->getBody()->getContents());
   }
   $json=$response->getBody()->getContents();
   $array_result = json_decode($json, true);
for($i = 0; $i < count($array_result["rajaongkir"]["results"]);$i++)
{
    $province = new Province;
    $province->id=$array_result["rajaongkir"]["results"][$i]["province_id"];
    $province->name=$array_result["rajaongkir"]["results"][$i]["province"];
    $province->save();
}
// echo $array_result["rajaongkir"]["results"][1]["province"];
}
   public function getcity(){
        $client = new Client();

        try{
            $response = $client->get('https://api.rajaongkir.com/starter/city',array(
                'headers' => array(
                    'key'=>'9f3168f3c9a36fcbb7350f5e56b64cca',
                )
                ));
        }catch(RequestException $e){
        var_dump($e->getResponse()->getBody()->getContents());
   }
   $json=$response->getBody()->getContents();
   $array_result = json_decode($json, true);
   for($i = 0; $i < count($array_result["rajaongkir"]["results"]);$i++)
   {
       $city = new City;
       $city->id=$array_result["rajaongkir"]["results"][$i]["city_id"];
       $city->name=$array_result["rajaongkir"]["results"][$i]["city_name"];
       $city->id_province=$array_result["rajaongkir"]["results"][$i]["province_id"];
       $city->save();
   }// echo $array_result["rajaongkir"]["results"][0]["city_name"];
}
   public function cekongkir(){

    $title = "Cek Ongkir";
    $city = City::get();

    return view('jne.cekongkir', compact('title','city'));
 
}
public function prosescekongkir(Request $request){
    $title ="Hasil Cek Ongkir";
    $client = new Client();
    try{
        $response = $client->request('POST','https://api.rajaongkir.com/starter/cost',
            [
                'body' => 'origin='.$request->origin.'&destination='.$request->destination.'&weight='.$request->weight.'&courier=jne',
                'headers' => [
                    'key'=>'9f3168f3c9a36fcbb7350f5e56b64cca',
                    'content-type'=> 'application/x-www-form-urlencoded',

                ]
            ]
            );
    }catch(RequestException $e){
    var_dump($e->getResponse()->getBody()->getContents());
}
$json=$response->getBody()->getContents();
$array_result = json_decode($json, true);
$origin = $array_result["rajaongkir"]["origin_details"]["city_name"];
$destination = $array_result["rajaongkir"]["destination_details"]["city_name"];


//    print_r($array_result);
// echo $array_result["rajaongkir"]["results"][0]["costs"][1]["cost"][0]["value"];
return view('jne.cekongkirhasil', compact('title','origin','destination','array_result'));

}
}
