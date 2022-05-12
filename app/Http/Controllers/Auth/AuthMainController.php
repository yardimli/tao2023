<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AuthMainController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Register Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles the registration of new users as well as their
  | validation and creation. By default this controller uses a trait to
  | provide this functionality without requiring any additional code.
  |
  */

  use RegistersUsers;

  /**
   * Where to redirect users after registration.
   *
   * @var string
   */
//  protected $redirectTo = RouteServiceProvider::HOME;

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('guest');
  }

	public function register(Request $request)
  {
	  $request->validate([
		  'name' => ['required', 'string', 'max:255'],
		  'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
		  'password' => ['required', 'string', 'min:8', 'confirmed'],
	  ]);

	  $user = User::create([
		  'name' => $request['name'],
		  'email' => $request['email'],
		  'password' => Hash::make($request['password'])
	  ]);

	  return redirect('index');
  }

	public function check(Request $request)
	{
		//return $request->input();

		//Validate requests
		$request->validate([
			'email' => ['required', 'email'],
			'password' => ['required', 'string', 'min:8'],
		]);

		$userInfo = User::where('email','=',$request->email)->first();

		if(!$userInfo){
			return back()->with('fail','We do not recognize your email address');
		}else{
			//check password

			if(Hash::check($request->password, $userInfo->password)){
				//log userId into session
				$request->session()->put('LoggedUser',$userInfo->id);
				return redirect('/index');
			}else{
				return back()->with('fail','Incorrect password');
			}
		}
	}

	public function logout(){
  	if(session()->has('LoggedUser')){
  		session()->pull('LoggedUser');
  		return redirect('login');

	  }
	}
}
