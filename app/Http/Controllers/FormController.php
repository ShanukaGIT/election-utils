<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function viewPE9()
    {
        $client = resolve('nomination.client');
        $response = $client->request('GET', 'teams');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();
        $obj = json_decode($body);
        return view('pe9')->with('Fdata',$obj);
        
    }

    public function viewPE30()
    {
        $client = new Client();
    	$response = $client->request('GET', env('NOMINETION_API'));
    	$statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();
        $obj = json_decode($body);
        return view('pe30x1x2')->with('Fdata',$obj);
        
    }
    public function getDistrict(Request $request){
        $client = new Client();
    	$response = $client->request('GET', env('NOMINETION_API').'?id='.$request->id);
    	$statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();
        $data = json_decode($body);
        return response()->json($data);
        
        
      }

      public function getBallot(Request $request){
        $client = new Client();
    	$response = $client->request('GET', env('NOMINETION_API'));
    	$statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();
        $data = json_decode($body);
        return response()->json($data);
        
        
      }
}
