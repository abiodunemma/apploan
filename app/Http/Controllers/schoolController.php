<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;


class schoolController extends Controller
{
    //
   function add(Request $request){
    $schools = new School();
    $schools->name= $request->name;
    $schools->email= $request->email;
    $schools->bash= $request->bash;
    
    $result= $schools->save();
    if($request){
        return redirect('list');
      //  return "student added";
    }else{
        return "student not added";
    }


    
}


function list(){
    $schoolData = School::all();
   return view('list-schools',['schools'=>$schoolData]);
}
function  delete($id){
   echo  $isDelete= School::destroy($id);
   if($isDelete){
       return redirect('list');
}else{
    echo "record not deleted";
}

    //
}
    
    }
    
    
    //return "add function called";
    
   
    