<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Artisaninweb\SoapWrapper\Wrapper;
use Symfony\Component\HttpFoundation\Response;

class SoapController extends Controller
{
    public function index()              
    {
        $objWrapper = new Wrapper();
        $objWrapper->add(function ($service) {
        $service
            ->name('geolocation')
            ->wsdl('http://www.ipswitch.com/netapps/geolocation/iplocate.asmx?WSDL')
            ->trace(true);                                   
        });
        $ip_Array = ["2.139.164.235","2.119.16.35","2.39.14.25"];//Madrid,Umbria,Liguria
        $IP = $ip_Array[array_rand($ip_Array)];
        $data = ['sIPAddress' => $IP];
        $dataLocation = null;

        $objWrapper->service('geolocation', function($service) use ($data, &$dataLocation) {
            $dataLocation = $service->call('GetLocationRawOutput', [$data])->GetLocationRawOutputResult;
        });
        $region['location'] = $dataLocation->geolocation_data->region_name;
        //dd($region);
        switch ($region['location']){
            case "Madrid":
                $region['lat']=40.4167754;
                $region['long']=-3.7037901999999576 ; 
                $region['title']='Madrid, España';
                break;
            case "Umbria":
                $region['lat']=42.938004;
                $region['long']=12.62162109999997 ;
                $region['title']='Umbria, Italia';
                break;
            case "Liguria":
                $region['lat']=44.3167917;
                $region['long']=8.39649380000003 ;
                $region['title']='Liguria,Italia';
                break;
            default :
                $region['lat']=40.5180063;
                $region['long']=-3.6564008000000285 ; 
                $region['title']='Avenida Europa 14,28108 Alcobendas, Madrid';
                break;
            
        }
        
        return view('mapas.maps', compact('region'));

        }
}
