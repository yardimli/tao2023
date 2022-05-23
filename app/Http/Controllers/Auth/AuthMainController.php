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
		  'name' => ['required', 'string', 'max:255','unique:users'],
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


	public function updateUserInfo(Request $request)
	{

		//return $request->input();
		$userId = session()->get('LoggedUser');
		$userInfo = User::where('id','=',$userId)->first();



		if(!$userInfo){
			return back()->with('fail','We do not recognize your ID');
		}else{
			//Validate requests
			if($request->name !== $userInfo->name){
				$request->validate([
					'name' => ['required','string', 'max:255','unique:users'],
				]);
			}else if($request->email !== $userInfo->email){
				$request->validate([
					'email' => ['required', 'email', 'max:255', 'unique:users'],
				]);
			}

			$request->validate([
				'password' => ['required', 'string', 'min:8'],
				'user_image' => ['mimes:jpg,png,jpeg', 'max:2048']
			]);


			//check password
			if(Hash::check($request->password, $userInfo->password)){
				//update user info

				$newData = [
					'name' => $request->name,
					'email' => $request->email
				];

				if($request->user_image != NULL){
					$user_imageName = 'User_'.$userId.'.'.$request->user_image->extension();
					$request->user_image->move(public_path('userImages'),$user_imageName);
					$newData['user_image'] = $user_imageName;
				}

				$userInfo->update($newData);

				return back()->with('success','User Info has been updated.');
			}else{
				return back()->with('fail','Incorrect password');
			}
		}
	}

	public function updatePassword(Request $request)
	{

		//Validate requests
		$request->validate([
			'password' => ['required', 'string', 'min:8'],
			'newpassword' => ['required', 'string', 'min:8', 'confirmed'],
		]);

		//return $request->input();
		$userId = session()->get('LoggedUser');
		$userInfo = User::where('id','=',$userId)->first();

		if(!$userInfo){
			return back()->with('fail','We do not recognize your ID');
		}else{
			//check password
			if(Hash::check($request->password, $userInfo->password)){
				//update user info
				$newData = [
					'password' => Hash::make($request['newpassword'])
				];
				$userInfo->update($newData);

				return back()->with('success','Password has been updated.');
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
