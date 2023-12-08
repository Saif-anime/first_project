<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_Register;
use Laravel\Socialite\Facades\Socialite;

class User_Registers extends Controller
{
    //

    public function login(){
        return view('/login');
    }

    public function login_do(Request $request){

        $val = $request -> validate([
            'email' => 'required',
            'password' => 'required|min:3'
        ]);

        $email = $request -> email;
        $pass = $request -> password;

        $user_check = User_Register::where('email', '=', $email) -> first();
        if($user_check['password']== md5($pass)){
            $arr = ['succ' => 'logged in succ'];
            return redirect("/") -> with($arr);
        }
        $arr = ['succ' => 'logged in'];
        return redirect("/login") -> with($arr);
    }


    public function Redirect_to_Google(){
        return Socialite::driver('google')->redirect();
    }


        
    public function HandleRequest(){
        $user = Socialite::driver('google')->user();

// You can now create or log in the user using $user data

return redirect('/');
    
    }


    public function Redirect_to_Facebook(){
        return Socialite::driver('facebook')->redirect();
    }

    public function HandleRequest_Facebook(){
        $user = Socialite::driver('facebook')->user();

// You can now create or log in the user using $user data

return redirect('/');
    
    }





    public function sign(){
        return view('/sign');
    }

    public function data_upload(Request $request){
        $val = $request -> validate([
            'name'=>'required|max:255|min:3',
            'email' => 'required',
            'phone' => 'required|min:10',
            'password' => 'required|min:3'
        ]);


        $path = $request -> file('avtar') -> store('logo');

        print_r($path);
        $user = new User_Register;

        $name = $request -> name;
        $email = $request -> email;
        $phone = $request -> phone;

        $pass = $request -> password;
        


        
        


        $user_email_chack = User_Register::where('email', '=', $email)-> first();
       
        if($user_email_chack){
            $arr = ['exit' => 'your Email is exists'];
            return redirect("/sign") -> with($arr);
        }else{

   
        $user -> name = $name;
        $user -> email = $email;
        $user -> phone = $phone;
        $user -> password = md5($pass);
        $user -> avtar = $path;
        $user -> save();

        if($user){
            
            $arr = ['succ' => 'your data succ insert'];
            return redirect("/sign") -> with($arr);
        }else{
            $arr = ['unsucc' => 'your data not succ insert'];
            return redirect("/sign") -> with($arr);
        }
    }
    
    }
}



// ['error' => 0, 'size' => 3000000, ]

// array('error' => 0, 'size' => 23434)