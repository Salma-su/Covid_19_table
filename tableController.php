<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tableController extends Controller
{
    public function func() {
        
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://vaccovid-coronavirus-vaccine-and-treatment-tracker.p.rapidapi.com/api/npm-covid-data/countries",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: vaccovid-coronavirus-vaccine-and-treatment-tracker.p.rapidapi.com",
                "x-rapidapi-key: 4c9a058b7fmsha4c2cdba708deaep174172jsn8b3bc1b035a7"
            ],
        ]);
        
        
                    $data = curl_exec($curl);
                    $json = json_decode($data);
                    curl_close($curl);
        
       
         
 

     return view('table', compact('json'));
    

    
    }
}