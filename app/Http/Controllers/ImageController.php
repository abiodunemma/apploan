<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use App\Models\Image;
class ImageController extends Controller
{
    //
function upload(Request $request){
    $path = $request->file('file')->store('public');
     $pathArray=explode('/',$path);
      $imgPath=  $pathArray[1];
     $image= new Image();
     $image->path=$imgPath;
     if($image->save()){
        return "image uploaded successfully";
     }else{
                 return "nahhhh";
     }
     //Return "$path";
}
}