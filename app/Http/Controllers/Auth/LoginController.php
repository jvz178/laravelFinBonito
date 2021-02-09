<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

<<<<<<< HEAD
=======
    // public function redirectPath(){
    //     if(auth()->user()->tipo === 'admin') {
    //     return '/home';
    //     }
    //     return '/login';
    //    }
    
>>>>>>> c9b337a72847f6349fb5301b33a02e0c381427bd
       protected function authenticated(Request $request, $user)
       {
           if ($user->tipo!=='admin') {
               $this->guard()->logout();
               $request->session()->invalidate();
               session()->flash('message', ['danger', 'No tienes permisos para loguearte']);
               return view('noAutorizado');
           } else {
               $user->save();
           }
           return redirect($this->redirectPath());
       }
       
}
