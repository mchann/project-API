<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\API\V1\BaseController as BaseController;
use App\Models\Pengguna;
// use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Sanctum\HasApiTokens;


class AuthController extends BaseController
{
    
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
          'name' => 'required|string|max:225',  
          'email' => 'required|email',
          'password' => 'required|min:6|',
          'phone_number' => 'required|string|max:225',  
          'jenis_pengguna' => Rule::in(['pembeli','admin','kasir']),
          'referal_code' => 'string|max:5'
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.',$validator->errors());
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $pengguna = Pengguna::create($input);
        $success['token'] = $pengguna->createToken('MyApp')->plainTextToken;
        $success['name'] = $pengguna->name;

        return $this->sendResponse($success,'User Register Successfully.');
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email,'password' => $request->password])){
            $user = Auth::user();
            $success['token'] = $user->createToken('MyApp')->plainTextToken;
            $success['name'] = $user->name;
            $success['result'] = "berhasil";

            return $this->sendResponse($success, 'User Login Successully.');
        }else{
            return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
        }
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(
            [
                'status' => 'success',
                'message' => 'user logged out successfully'
            ]
            );
    }
}
