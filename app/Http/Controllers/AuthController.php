<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

use App\Models\User;


class AuthController extends Controller
{
    public function signUp(Request $request){
        $param = $request->only(['name','email','password']);
        $param['password'] = bcrypt($param['password']);
        $user = User::create($param);
        return response()->json($user);
    }

    public function signIn(Request $request)
    {
        //bcrypt는 매번 다른 값이 출력됨
        $param = $request->only(['email','password']);
        if(Auth::attempt($param)){
            $user = User::firstWhere('email',$param['email']);
            $token = $user->createToken(env('APP_KEY'));
            return response()->json([
                'user' => $user,
                'token' => $token->plainTextToken
            ]);
        }else{
            return response()->json(['message'=>'로그인 정보를 확인하세요.'],400);
        }
    }
}
