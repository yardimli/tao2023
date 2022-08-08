<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StoryController extends Controller
{
	public function index()
	{
		return view('insertStories');
	}

	public function store(Request $request)
	{
		$request->validate([
			'csv_file' => ['required', 'file', 'mimes:csv'],
		]);

		if($request->csv_file !== null){
			//save csv file to public folder
			$csvFileName = $request->csv_file->getClientOriginalName();
			$request->csv_file->move(public_path('/'),$csvFileName);

			$csv = $_SERVER['DOCUMENT_ROOT'].'/royalroad-stories.csv';

			$row = 1;
			if (($handle = fopen($csv, "r")) !== FALSE) {
				while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {


					//get author name
					if(isset($data[20])){
						$authorName = $data[20];
					}



					//get author image src
					if(isset($data[21])){
						$authorImage = $data[21];
					}

					if($authorName !== ""){
						$authorInfo = Author::where('name','=',$authorName)->first();
						if(!$authorInfo){
							Author::create([
								'name' => $authorName,
								'image' => $authorImage
							]);

							echo "Author : ".$authorName." added.<br>";
						}
					}




//					$num = count($data);
//					echo "<p style='color: red'> $num fields in line $row: <br /></p>\n";
//					$row++;
//					for ($r=0; $r < $num; $r++) {
//						echo $r." => ".$data[$r] . "<br />\n";
//					}
				}

				fclose($handle);
			}


		}











//
//		return redirect('/insertCategory');
	}

}
