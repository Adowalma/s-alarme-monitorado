<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if (Gate::allows('isAdmin')||Gate::allows('isFuncionario')||Gate::allows('venda')) {
        $dados['pendente'] = DB::table('urgencies')->where([['estado', 'Pendente']])->count();
        $dados['em_execucao'] = DB::table('urgencies')->where([['estado', 'Em execução']])->count();
        $dados['encaminhado'] = DB::table('urgencies')->where([['estado', 'Encaminhado']])->count();
        $dados['descartado'] = DB::table('urgencies')->where([['estado', 'Descartado']])->count();
        $notify=session()->get('notify', $dados['pendente']);
    }else if(Gate::allows('isCliente')){
        $dados['pendente'] = DB::table('urgencies')->where([['estado', 'Pendente']])->join('users','urgencies.user_id','=','users.id')->where('users.id','=',Auth::id())->count();
        $dados['em_execucao'] = DB::table('urgencies')->where([['estado', 'Em execução']])->join('users','urgencies.user_id','=','users.id')->where('users.id','=',Auth::id())->count();
        $dados['encaminhado'] = DB::table('urgencies')->where([['estado', 'Encaminhado']])->join('users','urgencies.user_id','=','users.id')->where('users.id','=',Auth::id())->count();
        $dados['descartado'] = DB::table('urgencies')->where([['estado', 'Descartado']])->join('users','urgencies.user_id','=','users.id')->where('users.id','=',Auth::id())->count();
    }
        // dd($dados);
        return view('home1', $dados);
    }
}
