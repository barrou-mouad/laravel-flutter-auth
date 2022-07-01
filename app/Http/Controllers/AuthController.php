<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function register(Request $request){
        return  User::create([
              "name"=>$request->name,
              "email"=>$request->email,
              "password"=>Hash::make($request->password)
              ]
          );
      }
    public function login(Request $request){
   

        $user=User::whereEmail($request->email)->first();
        
        if(isset($user->id)){
           if(Hash::check($request->password, $user->password)){
            $token = $user->createToken("auth:sanctum");
         
            return ['token' => $token->plainTextToken,
                    'user'=> [
                        "name"=>$user->name,
                        "email"=>$user->email
                    ]
        ];
           }
           else{
            return ['message' => "password is invalid"];
           }
        }
        else{
            return ['message' => "user not found"];
        }

        
    }
}
