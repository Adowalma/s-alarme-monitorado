<?php

declare(strict_types = 1);

namespace App\Charts;
use Illuminate\Support\Facades\DB;
use App\Models\ProductType;
use App\Models\Checkout;
use App\Models\User;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class SampleChart extends BaseChart
{
    public ?string $name = 'my_chart';

    public ?string $routeName = 'my_chart';
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $products = DB::table('checkout')
                    ->select('checkout.estado')
                     ->groupBy('checkout.estado')
                     ->get();
        // $products = DB::table('products')
        //     ->join('product_types', 'products.type_id', '=', 'product_types.id')
        //     -> select('product_types.*')
         
        $labels = [];
        $count = [];
        // foreach($products as $products)
        //     dd(date('M', strtotime($products->created_at)));
        foreach ($products as $product){
            array_push($labels,$product->estado);
        }
        $values = User::with('checkout' )->get();
        foreach ($values as $item) {
            array_push($count,$item->checkout->count());
        }
        return Chartisan::build()
            ->labels($labels)
            ->dataset(" ", $count);
    }
}