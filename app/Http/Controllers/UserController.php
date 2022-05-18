<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        return view('users.index', ['users' => $model->paginate(15)]);
    }
    public function destroy($id){
            User::find($id)->delete();
            return  redirect()->back()->with('mensagen','Usuario Eliminado com Sucesso!');
        
    }
    public function bloquear( $id )
    {   
           User::find($id )->update( ['estado'=>'Desativado'] );
           return redirect()->back();
       }
   
}