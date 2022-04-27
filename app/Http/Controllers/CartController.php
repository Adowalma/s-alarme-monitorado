<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductType;
use App\Models\Checkout;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    //
	public function addToCart($id)
	{
		$product = ProductType::findOrFail($id);
							
		$cart = session()->get('cart', []);

		if(isset($cart[$id])) {
			$cart[$id]['quantity']++;
		} else {
			$cart[$id] = [
				"name" => $product->tipo,
				"quantity" => 1,
				"price" => $product->preco,
				"image" => $product->image
			];
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
