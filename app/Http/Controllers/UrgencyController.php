<?php

namespace App\Http\Controllers;

use App\Models\Urgency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;

class UrgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (Gate::allows('isAdmin')||Gate::allows('isFuncionario')) {
            $dados= DB::table('urgencies')
            ->where([['estado', 'Pendente']])
            ->join('users','urgencies.user_id','=','users.id')
            ->select('urgencies.*','users.name')
         ->get();
    
        return view('pages.notifications',compact('dados'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Urgencia  $urgencia
     * @return \Illuminate\Http\Response
     */
    public function show(Urgency $urgencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Urgency  $urgencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Urgency $urgencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Urgency  $urgencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Urgency $urgencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Urgency  $urgencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Urgency $urgencia)
    {
        //
    }
}
