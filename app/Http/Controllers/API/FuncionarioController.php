<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;


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
        if (Gate::allows('isAdmin')) {

        $users= User::where('users.role','=','funcionario')
        //   ->select('products.*','users.name')
         ->get()->toJson(JSON_PRETTY_PRINT);
         return response($users,200);
        }
        else {
            return response()->json([
            "message" => "Unauthorized"
            ], 401);
        }
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
        if (Gate::allows('isAdmin')) {

            $request ->validate( [
                'name' => ['required', 'string', 'min:9','max:150'],
                'username' => ['required', 'string','max:20','unique:users'],
                'email' => ['required', 'string', 'email', 'max:150', 'unique:users'],
                'password'=>['required']
            ]);
            User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make('password'),
            ]);
            User::where('username',$request->username )->update( ['role'=>'funcionario'] );
            return response()->json([
                "message" => "funcionario record created"
            ], 201);
        }
        else {
            return response()->json([
            "message" => "Unauthorized"
            ], 401);
        }

    }
}
