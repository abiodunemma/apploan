<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class Usercontroller extends Controller
{
    function users(){
     $users= DB::select('select * from users');
     return view('user',["users "=>$users]);
   }

 //  function getUser(){
  //      return  view ('user');

  // }
  //  function aboutUser(){
    //    return  view ('about');

   // }

  //  function Userhome(){
    //    return  view ('home');

  //  }

   // function addUser(Request $request){
   //     echo "User name is :$request->username";
   //     echo "<br>";
    //    echo "User city is :$request->city";
    //    echo "<br>";
     //   echo "User email is :$request->email";



 //   }

    function queries(){

$response =User::insert([
    'name'=>'kay',
    'email'=>'key@gmail.com',
    'password'=>'key@gmail.com',


]);
if($response){
    return "data inserted";

}else{
    return "datais not inserted";
}

return view('user',['users'=>$response]);


}



    function get(){
        return "this is get method";
    }
    function post(){
        return
        "this is post method";
    }
    function put(){
        return
        "this is put method";
    }
    function delete(){
        return
        "this is delete method";
    }

  //  function any(){
       // return"this is any function";    }


    ////  function login(Request $request){
      //  echo $request->method();
      //  return $request;
     // echo "<br />";
      //echo $request->path();
      //echo"<br/> ";
//echo$request->input('name');
     // echo"<br />";
     // echo$request->ip();
     // echo"<br />";


      function login(Request $request ){
       $request->session()->put('name',$request->input('name'));
   //   return $request->input();       // return "login function";
//echo session('name');
return redirect('profile');

    }

    function addUser(Request $request){
        $request->session()->flash("message", "Useradded successfully");
        //store user data in DB
   return redirect('user');
      //  return"add user function";
    }

    function logout(){
        session()->pull('name');
        return redirect('profile');
    }

}