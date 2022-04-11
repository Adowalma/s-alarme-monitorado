<?php

namespace App\Http\Controllers;
use App\Models\Urgency;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RelatorioController extends Controller
{
    //
    public function index(){
        return view('relatorios.index');
    }
    public function gerar(Request $request){
        $request->validate(
            [
              'data_start'=>['required'],
              'data_end'=>['required']
            ]
          );
        //   $data = DB::table('urgencies')
        //   ->where('condition',$condition)
        //   ->first();
        //   $newtime = strtotime($data->created_at);
        //   $data->time = date('Y-m-d',$newtime);
        //   $urgencies = Urgency::all();
        //   foreach($urgencies as $urgency){
        //     $urgencia=$urgency->created_at->get('Y');
        //   }

        // $datetime = "28-1-2011 14:32:55";
        // $date_arr= explode(" ", $urgencia);
        // $date= $date_arr[0];
        $urgencies = DB::table('urgencies')
        ->join('users', 'users.id', '=', 'urgencies.user_id')
        // ->where('items.user_id', '=', $user_id)
        ->where('urgencies.created_at', '>=', Carbon::today())
        ->select("urgencies.*","users.name")
        ->get();
        // dd($urgencies);        
        return view('relatorios.index', compact('urgencies'));
    }
    
    public function exibirPDF()
    {
        $urgencies = Urgency::all();
    
        return \PDF::loadView('pdf.relatorio', compact('urgencies'))
                    // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
                    ->stream('relatorio.pdf');
    }
}
