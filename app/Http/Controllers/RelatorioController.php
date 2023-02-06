<?php

namespace App\Http\Controllers;
use App\Models\Urgency;
use Illuminate\Support\Facades\Gate;
use App\Models\Checkout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
// use Carbon\Carbon;
// use PDF;


class RelatorioController extends Controller
{
    
  public function index(){
    if (Gate::allows('isAdmin')||Gate::allows('isFuncionario')) {
      $products = Urgency::join('users',"urgencies.user_id",'=',"users.id")
                          // ->join('product_types','checkout.product_id','=','product_types.id')
                          ->select('users.*','urgencies.*')
                          ->get();
      }else
      $products = Urgency::join('users',"urgencies.user_id",'=',"users.id")
        // ->join('product_types','checkout.product_id','=','product_types.id')
        ->select('users.*','urgencies.*')
        ->where('users.id','=',Auth::id())
        ->get();
  
      
      return view('relatorios.urgencia', compact('products'));
  }
  // public function index(){
  //   if (Gate::allows('venda')||Gate::allows('isFuncionario')) {
  //     $products = Checkout::join('users',"checkout.cliente_id",'=',"users.id")
  //                         ->join('product_types','checkout.product_id','=','product_types.id')
  //                         ->select('users.name','users.endereco','checkout.*','product_types.image','product_types.tipo','product_types.preco')
  //                         ->get();
  //     }else
  //     $products = Checkout::join('users',"checkout.cliente_id",'=',"users.id")
  //       ->join('product_types','checkout.product_id','=','product_types.id')
  //       ->select('users.name','users.endereco','checkout.*','product_types.image','product_types.tipo','product_types.preco')
  //       ->where('users.id','=',Auth::id())
  //       ->get();
  
      
  //     return view('relatorios.venda', compact('products'));
  // }
  
  //
    // public function index(){
    //     return view('relatorios.urgencia');
    // }
    // public function gerar(Request $request){
    //     $request->validate(
    //         [
    //           'data_start'=>['required'],
    //           'data_end'=>['required']
    //         ]
    //       );
    //     //   $data = DB::table('urgencies')
    //     //   ->where('condition',$condition)
    //     //   ->first();
    //     //   $newtime = strtotime($data->created_at);
    //     //   $data->time = date('Y-m-d',$newtime);
    //     //   $urgencies = Urgency::all();
    //     //   foreach($urgencies as $urgency){
    //     //     $urgencia=$urgency->created_at->get('Y');
    //     //   }

    //     // $datetime = "28-1-2011 14:32:55";
    //     // $date_arr= explode(" ", $urgencia);
    //     // $date= $date_arr[0];
    //     $urgencies = DB::table('urgencies')
    //     ->join('users', 'users.id', '=', 'urgencies.user_id')
    //     // ->where('items.user_id', '=', $user_id)
    //     ->where('urgencies.created_at', '>=', Carbon::today())
    //     ->select("urgencies.*","users.name")
    //     ->get();
    //     // dd($urgencies);        
    //     return view('relatorios.urgencia', compact('urgencies'));
    // }
    
    // public function exibirPDF()
    // {
    //     $urgencies = Urgency::all();
    
    //     return PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('pdf.urgencia', compact('urgencies'))
    //                 // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
    //                 ->stream('relatorio.urgencia');
    // }
}
