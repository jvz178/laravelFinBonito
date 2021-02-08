<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;

class RegisterController extends Controller
 {
 public $successStatus = 200;

 public function register(Request $request) {
     $validator = Validator::make($request->all(), [
         'nombre' => 'required',
         'apellido' => 'required',
         'ciclo_id' => 'required',
         'tipo' => 'required',
         'activado' => 'required',
         'num_oferta_inscrito' => 'required',
         'email' => 'required|email',
         'password' => 'required',
        //  'is_logged' => 'required',
 ]);
 if($validator->fails()) {
 return response()->json(['error' => $validator->errors()], 401);
 }
 $input = $request->all();
 $input['password'] = bcrypt($input['password']);
 $user = User::create($input);
 $success['token'] = $user->createToken('MyApp')->accessToken;
 $success['name'] = $user->name;
 return response()->json(['success' => $success], $this->successStatus);
 }
 
 public function login() {
    
    if(Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
    $user = Auth::user();
    $success['token'] = $user->createToken('MyApp')->accessToken;
    return response()->json(['success' => $success], $this->successStatus);
    }
    else {
    return response()->json(['error' => 'No estás autorizado'], 401);
    }
   }
       
    // public function logout(Request $request)
    // {
    //     $request->user()->token()->revoke();
    //     return response()->json(['message' => 
    //         'Successfully logged out']);
    // }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return response()->json(['data' => $request], $this->successStatus);
    }
   


}

