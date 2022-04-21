<?php

namespace App\Http\Controllers;

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
    //  dd($dono);
    return view('produtos.index', compact('proprietario'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $types = $this->type->orderBy('tipo','asc')->pluck('tipo','id');
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
        'type_id'=>['required','Integer'],
      ]
    );

    for($i=1;$i<=$request->quantidade;$i++)
    Product::create([
      'type_id' => $request->type_id,
      'product_key' => rtrim(chunk_split(Str::random(16), 4, '-'), '-')
    ]);

    return redirect()->route('produto.index');
  }
  public function destroy($id)
  {
      //
      Product::find($id)->delete();
        return redirect()->route('produto.index')
        ->with('success','Produto deleted successfully');
  }
  public function bloquear( $id )
    {
      Product::find($id )->update( ['estado'=>'Desativado'] );
           return redirect()->back();
    }

    ######################### Product-User ############################

    public function userProductCreate(){
      return view('produtos.productUser.new');
    }

  public function userProduct(Request $request){
    $request->validate([
      'id'=>['required','int'],
      'product_key' => ['required', 'string', "min:16",'max:20'],
    ]
    );
        // verificando se o product key exist e posteriormente se tem proprietario
        // dd(Product::where('user_id',null)->count());
        $x= Product::where('product_key', $request['product_key'])
                    ->where('id','=', $request['id']);

        if($x->count('id')){

            if($x->where('user_id',"=",null)){
             $x->update(['user_id'=>Auth::id()]);
             return redirect()->back()->with('success','Product adicionado com sucesso');
            }
            else{
              return redirect()->back()->with('erro','Falha ao Adicionar. Este Product-key ja se encontra em utilizacao');
            }
          }else{
            return redirect()->back()->with('alerta','Falha ao Adicionar. Verifica os dados inseridos');
          }
  }

  ################### Cart #######################

  public function addToCart($id)
    {
        $product = Product::findOrFail($id);
                  // ->join('product_types', 'products.type_id','=','product_types.id')
                  // ->select('products.*','product_types.*')->get();
          // dd($product->get());
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
          foreach($product as $product){
            $cart[$id] = [
              dd($product->id),
                // "id"=>$product->id,
                "name" => $product->productType->tipo,
                "quantity" => 1,
                "price" => $product->productType->preco,
                "image" => $product->productType->image
            ];
          }
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Producto adicionado com sucesso ao Carrinho');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function updateCart(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Carrinho atualizado com sucesso');
        }
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function removeCart(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Produto removido com sucesso');
        }
    }
  
}
