<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

//use Illuminate\Support\Facades\Auth;
//use App\User;
//use Illuminate\Http\Request;

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
    /*use AuthenticatesUsers;
protected $redirectTo = '/admin/dashboard';
public function username()
{
  return 'usrName';
}
public function __construct()
{
  $this->middleware('guest')->except('logout');
}

public function showLoginForm()
{
  return view('auth.login');
}

public function login(Request $request)
{
  $this->validate($request, [
            'username' => 'required|max:255',
            'password' => 'required|max:255'
  ]);

  $authUser = User::where('usrName', $request->username)->first();

  if (isset($authUser)) {
            $password = md5('aFGQ475SDsdfsaf2342' . $request->password . $authUser->usrPasswordSalt);

   if (Auth::attempt([$this->username() => $request->username, 'password' => $password])) {
             return 'logged in successfully : '.$this->username() . ' - ' . $password;
            }
   else {
         return 'oops something happend : '.$this->username() . ' - ' . $password;
         }
  }*/

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
        $this->middleware('guest', ['except' => 'logout']);
    }
}
