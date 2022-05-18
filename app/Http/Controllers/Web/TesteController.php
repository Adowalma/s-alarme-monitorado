<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TesteController extends Controller
{
    //
    public function getAll(){
        $response = HTTP::get("http://127.0.0.1:8000/api/gps");
        dd($response->json());
        return $response ->json();
    }

    public function addGPS(){
        $post = HTTP::post("http://127.0.0.1:8000/api/gps", [
            'lng'=>"Ola",
            'lat'=>"Mundo"
        ]);
        return $post->json();
    }
}
