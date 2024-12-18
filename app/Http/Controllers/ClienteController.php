<?php

namespace App\Http\Controllers;

use App\Models\User;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users= User::where('users.role','=','cliente')
         ->get();
         return view('clientes.index', compact('users'));
    }
}
