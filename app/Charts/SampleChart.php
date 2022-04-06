<?php

declare(strict_types = 1);

namespace App\Charts;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
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
        $products = DB::table('products')->get();
        $labels = [];
        $count = [];
        foreach ($products as $product){
            array_push($labels,$product->type_id);
        }
        $values = Product::with('users' )->get();
        foreach ($values as $item) {
            array_push($count,$item->users->count());
        }
        return Chartisan::build()
            ->labels($labels)
            ->dataset('Sample', $count);
    }
}