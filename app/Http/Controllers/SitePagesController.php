<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductType;


class SitePagesController extends Controller
{
    //
    public function index()
    {
        $products = ProductType::latest()->paginate(5);
    
        return view('e-commerce.index',compact('products'));
    }
    public function about()
    {
        return view('e-commerce.about');
    }
    public function cart()
    {
        $products = ProductType::latest()->paginate(5);
        return view('e-commerce.cart',compact('products'));
    }
    public function checkout()
    {
        return view('e-commerce.checkout');
    }
    public function contact()
    {
        return view('e-commerce.contact');
    }
    public function news()
    {
        return view('e-commerce.news');
    }
    public function shop()
    {
        return view('e-commerce.shop');
    }
    public function singleNews()
    {
        return view('e-commerce.single-news');
    }
    public function singleProduct()
    {
        return view('e-commerce.single-product');
    }
}
