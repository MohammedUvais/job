<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use DB;



class MainController extends Controller
{
   public function login()
   {
   	return view('login');
   }
   public function signup()
   {
   	return view('signup');
   }
   public function loginpost(Request $req)
   {
   	$username=$req->input('username');
   	$password=$req->input('password');

   	$checkLogin=DB::table('authenti')->where (['username'=>$username,'password'=>$password])->get();
   	if(count($checkLogin) >0)
   	{
   		echo "You have logged in";
   	}
   	else
   	{
   		echo "Error ! You have not entered correct detail";
   	}
   }
   public function signuppost(Request $req)
   {
   	$username=$req->input('username');
   	$email=$req->input('email');
   	$password=$req->input('password');
   	$repassword=$req->input('repassword');

   	$data=array('email'=>$email,'password'=>$password,'repassword'=>$repassword,'username'=>$username);

   	DB::table('authenti')->insert($data);

   	 echo "Registration Successful";
   }
}
