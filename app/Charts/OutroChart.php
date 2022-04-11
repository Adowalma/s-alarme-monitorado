<?php

declare(strict_types = 1);

namespace App\Charts;
use Illuminate\Support\Facades\DB;
use App\Models\Urgency;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class OutroChart extends BaseChart
{
    public ?string $name = 'urgency_chart';

    public ?string $routeName = 'urgency_chart';
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $urgencies = DB::table('urgencies')->get();
        $labels = [];
        $count = [];
        foreach ($urgencies as $urgency){
            array_push($labels,$urgency->estado);
        }
        $values = Urgency::with('users' )->get();
        foreach ($values as $item) {
            array_push($count,$item->users->count());
        }
        return Chartisan::build()
            ->labels($labels)
            ->dataset('Sample', $count);
    }
}