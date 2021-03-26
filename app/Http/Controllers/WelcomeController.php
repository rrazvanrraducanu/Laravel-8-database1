<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
   public function index()
	{
       return "Welcome!";
	}
   public function contact()
   {
       return view('contact');
   }
   public function data1()
   {
       $name="Popescu <span style='color:red'>Bogdan</span>";
      return view('pages.data1')->with('name',$name);
   }
}
