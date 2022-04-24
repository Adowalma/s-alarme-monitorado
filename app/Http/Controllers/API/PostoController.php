<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posto;
use Illuminate\Support\Facades\Route;

class PostoController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
    if ($request->ajax()) {
      $data = Posto::orderBy('id', 'desc')->get();
      
      return response()->json(['data'=>$data],200);
    }else {
      $uri = Route::current()->uri;

      return view('postos.cadastrar.index',compact('uri'));
    }
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
      $uri = Route::current()->uri;
      return view('postos.cadastrar.index', compact('uri'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      //
      $request->validate([
        "name" => "required",
        "lat" => "required",
        "lng" => "required"
      ]);
      
      $data = Posto::create([
        'name'=>$request['name'],
        'lat'=>$request['lat'],
        'lng'=>$request['lng']
      ]);
      return response()-> json($data,201);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      //
      $data = Posto::findOrFail($id);

      return response()->json($data);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $request->validate([
      "name" => "required",
      "lat" => "required",
      "lng" => "required"
    ]);
    Posto::find($id)->update([
      'name'=>$request['name'],
      'lat'=>$request['lat'],
      'lng'=>$request['lng']
    ]);
    return response()->json(["valid"=>true], 200);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //
      $data = Posto::destroy($id);

      return response()->json($data, 200);
  }
}
