<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


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
      //
    // $proprietario=DB::table('products')
    //   ->leftJoin('users', 'products.user_id', '=', 'users.id')
    //   ->select("products.*",'users.name')
    //   ->get();

      $proprietario= Product::leftJoin('users','products.user_id','=','users.id')
          ->select('products.*','users.name')
         ->get();
    
    return view('produtos.index', compact('proprietario'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $types = $this->type->orderBy('name','asc')->pluck('name','id');
    return view('produtos.create', compact('types'));
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
    $request->validate(
      [
        'name'=>['required','string','min:5','unique:products,name'],
        'type_id'=>['required','Integer']
      ]
    );
    // $produto = Product::create($request->all());
    // $x= rtrim(chunk_split(Str::random(16), 4, '-'), '-');
    // dd($x);
    Product::create([
      'name' => $request->name,
      'descricao' => $request->descricao,
      'type_id' => $request->type_id,
      'product_key' => rtrim(chunk_split(Str::random(16), 4, '-'), '-')
    ]);

    return redirect()->route('produto.index');
  }

  /**  create prduct type
   * 
  */
  public function storeType(Request $request)
  {
    //
    $request->validate(
      [
        'name'=>['required','string','min:5','unique:products,name'],
        // 'type_id'=>['required','Integer']
      ]
    );
    $produto = $this->type::create($request->all());

    return redirect()->route('produto.create');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Produto  $produto
   * @return \Illuminate\Http\Response
   */
  public function show(Produto $produto)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Produto  $produto
   * @return \Illuminate\Http\Response
   */
  public function edit(Produto $produto)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Produto  $produto
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Produto $produto)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Produto  $produto
   * @return \Illuminate\Http\Response
   */
  public function destroy(Produto $produto)
  {
      //
  }
}
