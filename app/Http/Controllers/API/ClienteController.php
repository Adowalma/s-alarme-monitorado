<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Gate;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::allows('isAdmin')||Gate::allows('isFuncionario')) {

            $users= User::where('users.role','=','cliente')
            ->get()->toJson();
            return response($users,200);
        }else {
            return response()->json([
            "message" => "Unauthorized"
            ], 401);
        }
    }
}
