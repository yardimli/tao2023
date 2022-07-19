<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($pageName)
    {
			$data = ['LoggedUserInfo' => User::where('id','=',session('LoggedUser'))->first(),
				       'parentCategories' => Category::where('parentID','=',0)->get(),
							 'childCategories' =>  Category::where('parentID','!=',0)->get() ];
    	$mainPages = ['index','404','archive','author','author_info','categories','contact','search','single','typography','welcome','register','login','edit_password','edit_profile'];

    	if(in_array($pageName, $mainPages)){
		    return view($pageName,$data);
	    }else{
    		return view('404',$data);
	    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function changeLang($langcode)
    {
	    App::setLocale($langcode);
	    session()->put("lang_code",$langcode);
	    return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	echo 'store';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
