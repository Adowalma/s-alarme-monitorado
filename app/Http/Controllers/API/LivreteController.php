<?php

namespace App\Http\Controllers\API;

use App\Models\Livrete;
use Illuminate\Http\Request;

class LivreteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $livretes= Livrete::all()->get()->toJson(JSON_PRETTY_PRINT);
         return response($livretes,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate( [
            'marca' => ['required', 'string'],
            'modelo' => ['required', 'string'],
            'matricula' => ['required', 'string', 'unique:livretes'],
            'motor'=>['required'],
            'quadro'=>['required'],
            'pneumaticos'=>['required'],
            'servico'=>['required'],
            'peso_bruto'=>['required'],
            'combustivel'=>['required'],
            'distancia_eixos'=>['required'],
            'data_emissao'=>['required'],
        ]);
        Livrete::create($request->all());
        return response()->json([
            "message" => "livrete record created"
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Livrete  $livrete
     * @return \Illuminate\Http\Response
     */
    public function show(Livrete $livrete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Livrete  $livrete
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Livrete $livrete)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Livrete  $livrete
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livrete $livrete)
    {
        //
    }
}
