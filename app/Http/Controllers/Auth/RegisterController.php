<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\contact_list;
use App\Models\prowly_journalist;
use App\Models\prowly_outlets;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
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
  protected $redirectTo = RouteServiceProvider::HOME;

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('guest');
  }

  /**
   * Get a validator for an incoming registration request.
   *
   * @param array $data
   * @return \Illuminate\Contracts\Validation\Validator
   */
  protected function validator(array $data)
  {
    return Validator::make($data, [
      'name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
      'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);
  }

  /**
   * Create a new user instance after a valid registration.
   *
   * @param array $data
   * @return \App\Models\User
   */
  protected function create(array $data)
  {
    $user = User::create([
      'name' => $data['name'],
      'email' => $data['email'],
      'password' => Hash::make($data['password']),
      'avatar' => 'assets/images/user.png'
    ]);

    // Add default contact list.
    $list = new contact_list([
      'user_id' => $user->id,
      'name' => 'My Contact List',
      'description' => 'A default contact list.'
    ]);
    $list->save();

    // Add default journalist.
    $journalist = new prowly_journalist([
      'user_id' => $user->id,
      'journalist_name' => 'Letrapress Journalist',
      'first_name' => 'Letrapress',
      'last_name' => 'Journalist',
      'email' => 'admin@letrapress.com',
      'phone' => '',
      'journalist_picture_url' => '',
    ]);
    $journalist->save();

    // Add id to ref table.
    DB::table('contact_list_journalist_ref')->insert(array(
      'contact_list_id' => $list->id,
      'journalist_id' => $journalist->id
    ));

    // Save journalist icon.
    copy(__DIR__ . '/../../../../public/assets/images/journalist.jpg', __DIR__ . '/../../../../public/assets/journalist_images/icon-' . $journalist->id . '.jpg');
    $journalist->update(array('journalist_picture_url' => 'assets/journalist_images/icon-' . $journalist->id . '.jpg'));

    // Add default outlet.
    $outlet = new prowly_outlets([
      'user_id' => $user->id,
      'outlet_name' => 'Elo Software',
      'outlet_url' => '',
      'outlet_picture_url' => '',
      'email' => 'admin@letrapress.com',
      'phone' => '',
    ]);
    $outlet->save();

    // Save outlet icon.
    copy(__DIR__ . '/../../../../public/assets/images/outlet.jpg', __DIR__ . '/../../../../public/assets/outlet_images/icon-' . $outlet->id . '.jpg');
    $outlet->update(array('outlet_picture_url' => 'assets/outlet_images/icon-' . $outlet->id . '.jpg'));

    // Add id to ref table.
    DB::table('contact_list_outlet_ref')->insert(array(
      'contact_list_id' => $list->id,
      'outlet_id' => $outlet->id
    ));

    // Add default press releases folder.
    $press_releases_default_folder = array('Press Releases', 'Draft', 'Trash', 'My Press Releases');
    foreach ($press_releases_default_folder as $key => $folder) {
      DB::table('press_releases_folder')->insert(array(
        'user_id' => $user->id,
        'folder_name' => $folder,
				'order' => $key
      ));
    }

    // add default label to each user.
    $press_releases_default_label = array(
      array('name' => 'Starred', 'color' => '#fd625e'),
      array('name' => 'Social', 'color' => '#5156BE'),
      array('name' => 'Finance', 'color' => '#FFBF53'),
      array('name' => 'Politics', 'color' => '#2AB57D')
    );


    foreach ($press_releases_default_label as $key => $label) {
      DB::table('press_releases_label')->insert(array(
        'user_id' => $user->id,
        'label_name' => $label['name'],
        'label_color' => $label['color']
      ));
    }


    return $user;
  }
}
