<?php

namespace App\Http\Controllers\API;

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
        return response($model::get()->toJson(JSON_PRETTY_PRINT), 200);
    }

    public function getUser($id) {
        if (User::where('id', $id)->exists()) {
            $user = User::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($user, 200);
        } else {
            return response()->json([
            "message" => "User not found"
            ], 404);
        }
    }

    public function destroy($id){
        if (User::where('id', $id)->exists()) {
            User::find($id)->delete();
            return response()->json([
                "message" => "records deleted"
              ], 202);
            } else {
              return response()->json([
                "message" => "User not found"
              ], 404);
        }
        
    }
    
    public function bloquear( $id )
    {   
        if (User::where('id', $id)->exists()) {
           User::find($id )->update( ['estado'=>'Desativado'] );
           return response()->json([
            "message" => "User bloqued successfully"
        ], 200);
        } else {
        return response()->json([
            "message" => "User not found"
        ], 404);
        }
    }
   
}
