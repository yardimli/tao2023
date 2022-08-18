<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Storage;

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

		if ($request->csv_file !== null) {
			//save csv file to public folder
			$csvFileName = $request->csv_file->getClientOriginalName();
			$request->csv_file->move(public_path('/'), $csvFileName);

			$csv = $_SERVER['DOCUMENT_ROOT'] . '/royalroad-stories.csv';

			$row = 1;
			if (($handle = fopen($csv, "r")) !== FALSE) {
				while (($data = fgetcsv($handle, 1000000, ",")) !== FALSE) {


					$num = count($data);

					if ($num !== 22) {
						//check if csv is broken
						for ($r = 0; $r < $num; $r++) {
							echo $r . '=>' . $data[$r] . '<br>';
						}
					} else {
						if ($row == 1) {
//							for ($r = 0; $r < $num; $r++) {
//								echo $r . '=>' . $data[$r] . '<br>';
//							}
						} else {
//							$this->saveAuthor($data[20], $data[21]);
//
//							$this->saveTags($data[4]);

						}

					}

					$row++;
				}

				fclose($handle);
			}


		}


//
//		return redirect('/insertCategory');
	}

	private function saveAuthor($authorName, $authorImage)
	{
		echo "Author : " . $authorName . " => " . $authorImage . "<br>";

		if ($authorName !== "") {
			$authorInfo = Author::where('name', '=', $authorName)->first();
			if (!$authorInfo) {

				//download author image
				$info = pathinfo($authorImage);
				$imageName = $info['filename'].'.png';
				if($authorImage !== "/dist/img/anon.jpg"){
					$contents = file_get_contents($authorImage);
					Storage::put('authorImages/'.$imageName, $contents);
				}

				//save author into database
				Author::create([
					'name' => $authorName,
					'image' => $imageName
				]);

				echo "Author : " . $authorName . " added.<br>";
			}
		}
	}

	private function saveTags($story_tags)
	{

		//get story tags
		preg_match('/"story_tags":"(.*)"/', $story_tags, $tags);
		$tagsArr = explode('\n',$tags[1]);
		foreach ($tagsArr as $tag){
			$tagName = trim($tag);
			if($tagName !== ""){
				$tagInfo = Tag::where('tagName', '=', $tagName)->first();
				if (!$tagInfo) {
					Tag::create([
						'tagName' => $tagName
					]);
					echo "Tag : " . $tag . " added.<br>";
				}
			}
		}
	}

}
