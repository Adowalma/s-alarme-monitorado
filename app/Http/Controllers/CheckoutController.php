<?php

namespace App\Http\Controllers;
use App\Models\ProductType;
use App\Models\Checkout;
use App\Models\User;
use App\Models\ProductUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;

class CheckoutController extends Controller
{
    //
	public function index()
	{
			$user=User::findOrFail(Auth::id());
			// dd($user);
			
			return view('e-commerce.checkout', compact('user'));
	}

	public function saveCart(){
		$cart = session()->get('cart');
		if(isset($cart)){
		foreach($cart as $cart){
				// dd($cart);
				$x= ProductType::where('tipo',$cart['name'])->select('id')->get();
				$compra=Checkout::create([
						'cliente_id'=>Auth::id(),
						'product_id' => $x[0]->id,
						'quantity'=>$cart['quantity'],
						'referencia' => rtrim(chunk_split(Str::random(9), 4, '-'), '-')
				]);
				//zerando o carrinho
				session()->put('cart',);
				ProductUser::create([
					'user_id'=> $compra['cliente_id'],
					'product_id'=> $compra['product_id'],

				]);
			}
			return redirect()->route('checkout.await');
		}else{
			return redirect()->route('ecommerce.index');
		}
	}
	public function awaitConfirm(){
		return view('e-commerce.end');
	}
	public function aprovarList(){
		if (Gate::allows('isAdmin')||Gate::allows('isFuncionario')) {
		$products = Checkout::join('users',"checkout.cliente_id",'=',"users.id")
												->join('product_types','checkout.product_id','=','product_types.id')
												->select('users.name','users.endereco','checkout.*','product_types.image','product_types.tipo','product_types.preco')
												->where('checkout.estado','=',"Por aprovar")
												->get();
		}else
		$products = Checkout::join('users',"checkout.cliente_id",'=',"users.id")
			->join('product_types','checkout.product_id','=','product_types.id')
			->select('users.name','users.endereco','checkout.*','product_types.image','product_types.tipo','product_types.preco')
			->where('users.id','=',Auth::id())
			->where('checkout.estado','=',"Por aprovar")
			->get();

		
		return view('vendas.aprovar', compact('products'));
	}
	public function aprovadoList(){
		if (Gate::allows('isAdmin')||Gate::allows('isFuncionario')) {
		$products = Checkout::join('users',"checkout.cliente_id",'=',"users.id")
												->join('product_types','checkout.product_id','=','product_types.id')
												->select('users.name','users.endereco','checkout.*','product_types.image','product_types.tipo','product_types.preco')
												->where('checkout.estado','=',"Pago")
												->get();
		}else
		$products = Checkout::join('users',"checkout.cliente_id",'=',"users.id")
			->join('product_types','checkout.product_id','=','product_types.id')
			->select('users.name','users.endereco','checkout.*','product_types.image','product_types.tipo','product_types.preco')
			->where('users.id','=',Auth::id())
			->where('checkout.estado','=',"Pago")
			->get();

		
		return view('vendas.aprovados', compact('products'));
	}

	public function pagoMove($id){
		Checkout::findOrFail($id)->update(['estado'=>'Pago']);
		return redirect()->route('checkout.approve')->with('success','Pagamento concluído com sucesso');
	}
}
