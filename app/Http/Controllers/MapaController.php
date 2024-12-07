<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Posto;
use App\Models\Livrete;
// use Illuminate\Support\Facades\DB;


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
        $carro=Livrete::where("id",'=',1)
                ->get();
        // $mapa=
    //    dd($carro);
        return view('mapsteste', compact('carro'));
    }
}
