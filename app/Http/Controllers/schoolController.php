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
   // return "list";
    $return = School::all();
  // return view('list-schools',['schools'=>$schoolData]);
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

function edit($id){
    $Schools= School::find($id);
    return view('edit-student',["data"=>$Schools]);
   // return$id;
}

function editSchool(Request $request, $id){
   // return "edit";
    $schools= School::find($id);
    $schools->name=$request->name;
    $schools->email=$request->email;
    $schools->bash= $request->bash;
    if($schools->save()){
        return redirect("list");

    }else{
        echo "Please something went";
    }



  //  return $schools;

}

function search(Request $request){
    $schoolData =  School::where('name', 'like', "%$request->search%")->get();
    return view('list-schools',['schools'=>$schoolData]);
    //  return $schoolData;
    //echo "serch";
  //  return $request->search;


}
    }


    //return "add function called";