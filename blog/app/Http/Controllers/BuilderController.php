<?php

namespace App\Http\Controllers;
use illuminate\support\Facades\DB;
use Illuminate\Http\Request;

class BuilderController extends Controller{


  function Rows(){
   $result= DB::table('details')->sum('roll');
   return  $result;
  }


  function Insert(Request $request ){

    $name= $request->input("name");
    $roll=  $request->input("roll");
    $city=  $request->input("city");
    $phn = $request->input("phn");
    $class=  $request->input("class");

  $result=DB::table('details')->insert(['name'=>$name, 'roll'=>$roll, 'city'=>$city, 'phn'=>$phn ,'class'=>$class]);

  if($result==true){
    return "Insert Success";
  }
  else{
    return "Insert Fail";

  }

  }

  function Update(){

    
  }

  
  function Delete(){

    
  }



}
