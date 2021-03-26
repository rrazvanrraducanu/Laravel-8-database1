<?php

namespace App\Http\Controllers;
//add Requests!
use Illuminate\Http\Requests;
//use App\Http\Requests;
use App\Http\Controllers\Controller;
///insert
use App\Models\Flower;
use Request;
use Session;

class FlowersController extends Controller
{
    public function index()
	{
           $flowers=Flower::all();
            return view('flowers.show')->with('flowers', $flowers);
	}
        public function show($nume)
	{
        //select * from flowers where flower=$flower LIMIT 1
    $flower=Flower::where('nume','=',$nume)->first();
    return view('flowers.showflower', ['flower'=>$flower]);
   }
   public function add(){
    return view('flowers.addflower');
   }
   public function store(){
      
       $flower=new Flower;
       $flower->nume=Request::input('nume');
       $flower->marime=Request::input('marime');
       $flower->culoare=Request::input('culoare');
       $flower->pret=Request::input('pret');
       $flower->save();
       
      Session::flash('message', 'Record stored!');
       return redirect('/');
   }
    public function delete($nume){
    $flower=Flower::where('nume','=',$nume)->first();
    if($flower->delete()){
    //$flowers=Flower::all();
    Session::flash('message', 'Record was deleted!'); 
    return redirect('/');
    }else{
    Session::flash('message', 'Error!Please try again!'); 
    return redirect('/');
   }
        }
        
 public function edit($nume)
	{
    $flower=Flower::where('nume','=',$nume)->first();
    return view('flowers.editflower', ['flower'=>$flower]); 
}
 public function updateData($nume)
{
Flower::where('nume', $nume)->update(array(
            'nume'=>Request::input('nume'),
        'marime'=>Request::input('marime'),
        'culoare'=>Request::input('culoare'),
         'pret'=>Request::input('pret'),
        ));
  
      Session::flash('message', 'Record updated!');
     return redirect('/');
         }
         
}
