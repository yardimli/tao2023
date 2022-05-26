<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CropImageController extends Controller
{

    public function index()
    {
        return view('croppie');
    }

    public function uploadCropImage(Request $request)
    {

        $images = $request->image;

        list($type, $images) = explode(';', $images);
        list(, $images)      = explode(',', $images);

        $images = base64_decode($images);
        $image_name= time().'.png';
        $path = public_path('upload/'.$image_name);

        file_put_contents($path, $images);
        return response()->json(['status'=>true,'path'=>$path, 'type'=>$type]);
    }
}
