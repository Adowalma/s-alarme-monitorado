<?php

namespace App\Http\Controllers\API;

use App\Models\Product;
use App\Models\Cart;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;


class ProductController extends Controller
{
  protected $type;

  public function __construct(
      ProductType $type
  ) {
      $this->type = $type;
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    if (Gate::allows('isAdmin')||Gate::allows('isFuncionario')) {
      $proprietario= Product::leftJoin('users','products.user_id','=','users.id')
          ->join('product_types', 'products.type_id','=','product_types.id')
          ->select('products.*','users.name','product_types.descricao',"product_types.tipo")
         ->get();
    }else
      $proprietario = Product::leftJoin('users','products.user_id','=','users.id')
      ->join('product_types', 'products.type_id','=','product_types.id')
      ->where('users.id','=',Auth::id())
      ->select('products.*','users.name','product_types.descricao',"product_types.tipo")
     ->get();

     return response($proprietario->toJson(JSON_PRETTY_PRINT), 200);
     
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
    if (Gate::allows('isAdmin')||Gate::allows('isFuncionario')) {
      $request->validate(
        [
          'type_id'=>['required','Integer'],
        ]
      );

      for($i=1;$i<=$request->quantidade;$i++)
      Product::create([
        'type_id' => $request->type_id,
        'product_key' => rtrim(chunk_split(Str::random(16), 4, '-'), '-')
      ]);

      return response()->json([
        "message" => "product record created"
    ], 201);
    }else {
      return response()->json([
      "message" => "Unauthorized"
      ], 401);
    }
  }
  public function destroy($id)
  {
      //
      if (Product::where('id', $id)->exists()) {
      Product::find($id)->delete();
      return response()->json([
        "message" => "records deleted"
      ], 202);
    } else {
      return response()->json([
        "message" => "Product not found"
      ], 404);
    }
  }

  public function bloquear( $id )
  {
    if (Product::where('id', $id)->exists()) {
      Product::find($id )->update( ['estado'=>'Desativado'] );
        return response()->json([
            "message" => "Product bloqued successfully"
        ], 200);
        } else {
        return response()->json([
            "message" => "Product not found"
        ], 404);
      }
  }
  
}
