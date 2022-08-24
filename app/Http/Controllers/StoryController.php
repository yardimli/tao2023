<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Tag;
use App\Models\Story;
use App\Models\Story_tag;
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

			$csv = $_SERVER['DOCUMENT_ROOT'] . '/'.$csvFileName;

			$row = 1;
			if (($handle = fopen($csv, "r")) !== FALSE) {
				while (($data = fgetcsv($handle, 1024*1024*10)) !== FALSE && $row<50) {

					$num = count($data);

					//[0]=>﻿web-scraper-order, [1]=>web-scraper-start-url, [2]=>story_image-src, [3]=>story_name, [4]=>story_tags, [5]=>followers, [6]=>pages, [7]=>views, [8]=>date, [9]=>story_link,[10]=>story_link-href
					//,[11]=>rating, [12]=>subpage_link, [13]=>subpage_link-href, [14]=>story_description, [15]=>chapter_x, [16]=>chapter_name, [17]=>chapter_link_out-href, [18]=>chapter_no, [19]=>chapter_text
					//,[20]=>author, [21]=>author_image-src

					if ($num !== 22) {
						//check if csv is broken
						for ($r = 0; $r < $num; $r++) {
							echo $r . '=>' . $data[$r] . '<br>';
						}
					} else {
						if ($row !== 1 ) {
//							echo $data[10].'-----------'.$data[3].'------Name15:'.$data[15].'------Name:'.$data[16].'!!!------'.$data[18].'--------------'.'<br>';
							$authorID = $this->saveAuthor($data[20], $data[21]);
							$this->saveTags($data[4]);

							$this->saveStory($data[2],$data[3],$data[4],$authorID);

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
		echo "Author : " . $authorName . " : " . $authorImage ." => ";

		if ($authorName !== "") {
			$authorInfo = Author::where('name', '=', $authorName)->first();
			if (!$authorInfo) {

				//download author image
				$info = pathinfo($authorImage);
				$imageName = $info['filename'].'.png';
				if(!file_exists('authorImages/' . $imageName)) {
					if ($authorImage !== "/dist/img/anon.jpg") {
						$contents = file_get_contents($authorImage);
						Storage::put('authorImages/' . $imageName, $contents);
					}
				}

				//save author into database
				$newAuthor = Author::create([
					'name' => $authorName,
					'image' => $imageName
				]);

				echo "Added.<br>";

				return $newAuthor->id;
			}else{
				return $authorInfo->id;
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


	private function saveStory($imageSrc,$name,$tags,$authorID)
	{

		$storyInfo = Story::where('name', '=', $name)->first();
		if (!$storyInfo) {
			//download author image
			$info = pathinfo($imageSrc);
			$imageName = $info['filename'].'.png';
			if(!file_exists('storyImages/'.$imageName)){
				if($imageSrc !== "/dist/img/nocover-new-min.png"){
					$contents = file_get_contents($imageSrc);
					Storage::put('storyImages/'.$imageName, $contents);
				}
			}

			//save author into database
			$newStory = Story::create([
				'name' => $name,
				'image' => $imageName,
				'author_id' => $authorID
			]);

			echo "Story : " . $name . " added.<br>";

			$storyId = $newStory->id;
		}else{
			$storyId = $storyInfo->id;
		}

		//get story tag id from tags table
		preg_match('/"story_tags":"(.*)"/', $tags, $story_tags);
		$tagsArr = explode('\n',$story_tags[1]);
		foreach ($tagsArr as $tag){
			$tagName = trim($tag);
			if($tagName !== ""){
				$tagInfo = Tag::where('tagName', '=', $tagName)->first();
				if ($tagInfo) {
					$tag_id = $tagInfo->id;

					$storyTagInfo = Story_tag::where('story_id', '=', $storyId)->where('tag_id', '=', $tag_id)->first();
					if(!$storyTagInfo){
						Story_tag::create([
							'story_id' => $storyId,
							'tag_id' => $tag_id
						]);
					}
				}
			}
		}
	}
}
