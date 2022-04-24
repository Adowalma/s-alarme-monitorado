<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Posto;

class MapaController extends Controller
{
    //
    public function getMapa(Request $request){
        if($request->ajax()){
            $data = Posto::all();
            return response()->json($data, 200);
        }else{
            $uri = Route::current()->uri;
           return view('pages.maps', compact('uri'));
        }
    }
    public function testMapa(){
        return view('mapsteste');
    }
}
