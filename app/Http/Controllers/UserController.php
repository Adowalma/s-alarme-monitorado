<?php

namespace App\Http\Controllers;

use App\Models\User;
// use App\Http\Requests\UserRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;
use DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            if (Gate::allows('isAdmin')) {
            $data = User::select('*');
        }
            else if (Gate::allows('isFuncionario')) {
            $data = User::select('*')->where('role','=','cliente');
        }
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
     
                        //    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">eliminar</a>';
                           $btn = "                         <button class='btn btn-primary dropdown-toggle' type='button' id='dropdownMenuButton'
                           data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                           <i class='fa fa-clone' aria-hidden='true'></i>
                       </button>
                       <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                        <a href='user/delete/".$row->id."' class='dropdown-item' class='dropdown-item' name='bloquearUser'>Bloquear Usuário</a>
                        <a href='user/bloquear/".$row->id."' class='dropdown-item'
                           onclick='return confirm('Tens certeza que pretende eliminar?');'>Eliminar</a>
                           ";
    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        
        return view('users.index');
    }
    // public function index(User $model)
    // {
    //     return view('users.index', ['users' => $model->paginate(15)]);
    // }
    public function destroy($id){
            User::find($id)->delete();
            return  redirect()->back()->with('mensagen','Usuario Eliminado com Sucesso!');
        
    }
    public function update(Request $request, $id){
            User::find($id)->update();
            return  redirect()->back()->with('mensagen','Usuario Atualizado com Sucesso!');
        
    }
    public function bloquear( $id )
    {   
           User::find($id )->update( ['estado'=>'Desativado'] );
           return redirect()->back();
       }
   
}
