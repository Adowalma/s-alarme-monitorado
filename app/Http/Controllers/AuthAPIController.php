<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class AuthAPIController extends Controller
{
    //
    public function login( Request $request)
    {
        $token= null;
       $fields= $request->validate([

        'email'=>'required|string',
        'password'=> 'required|string'

       ]);
        // Verificando email

      $user= User::where('email',$fields['email'])->first();

        //verificando senha
        // if(!$user || $user->password != $fields['password'])
        // {
        //     return response ([
        //      'message'=>'Credenciais Incorretas'
        //     ],401);
        // }
        
       //verificando o tipo de usuário
       switch ($user->role) 
       {
           case 'admin':
              $token= $user->createToken($fields['email'], [Gate::allows('isAdmin')])->plainTextToken;
               break;
            case'cliente':
               $token= $user->createToken($fields['email'], [Gate::allows('isCliente')])->plainTextToken;
               break;

            case'funcionario':
                $token= $user->createToken($fields['email'], [Gate::allows('isFuncionario')])->plainTextToken;
                break;
           default:
               # code...
               break;
       }

       $response = [
           'user'=>$user,
           'token'=>$token
       ];
  

       return $response;

       
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        return "Sessão Encerrada";
    }

}
