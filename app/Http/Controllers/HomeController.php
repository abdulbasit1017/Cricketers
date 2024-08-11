<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        $name="<h1>Welcome</h1>";
        return view('icr-app',compact('name'));
    }
    function about() {
        return view('about');
    }
    function contact() {
        return view('contact');
    }
    function form(Request $request) {
       $name= $request->name;
       $email= $request->email;
       $password= $request->password;
    //    if($email=="") {
    //     return response()->json("email is empty", 200);

    //    }
    //    elseif($name==""){
    //     return response()->json("name is empty", 400);


    //    }elseif($password==''){
    //     return response()->json("password", 200);

    // }

        $user=new Profile();
        // $user->father_phone=;
        $user->father_name='father@gmail.com';
        // $user->password=$password;
        // $user->phone_number=$request->phone_number;
        $user->save();
        if($user){
            return 'success';

        }else{
            return response()->json("Error in saving", 500);
        }



    }
}
