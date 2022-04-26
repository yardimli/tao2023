<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $categories = Category::all(); //this is a collection

	    return view('insertCategory', [
		    'Categories' => $categories,
	    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	    $datas = $request->input('datas');

	    $dataArr = explode("),",$datas);

	    foreach($dataArr as $dataRow){
		    $dataRow1 = ltrim($dataRow, '(');
		    $dataRow1 = str_replace(["'"], "", $dataRow1);
		    $data = explode(",",$dataRow1);
		    Category::create([
			    'parentID'=> (int)$data[1],
			    'text_count'=> (int)$data[2],
			    'new_texts'=> (int)$data[3],
			    'read_count'=> (int)$data[4],
			    'category_name'=> $data[5],
			    'picture'=> $data[6],
			    'slug_en'=> $data[7]
		    ]);
	    }

	    return redirect('/insertCategory');
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
