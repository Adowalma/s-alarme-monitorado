<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users= User::where('users.role','=','funcionario')
        //   ->select('products.*','users.name')
         ->get();
         return view('funcionarios.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('funcionarios.create');

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
        $request ->validate( [
            'name' => ['required', 'string', 'min:9','max:150'],
            'username' => ['required', 'string','max:20','unique:users'],
            'email' => ['required', 'string', 'email', 'max:150', 'unique:users'],
        ]);
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make('password'),
          ]);
          User::where('username',$request->username )->update( ['role'=>'funcionario'] );

          return redirect()->route('funcionario.index');
    }
}
