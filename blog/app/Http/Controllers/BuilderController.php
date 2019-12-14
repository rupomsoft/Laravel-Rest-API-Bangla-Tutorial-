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

  function Update(Request $request ){
    $name=$request->input("name");
    $id=$request->input("id");
    $result =DB::table('details')->where('id', $id)->update(['name'=>$name]);
    if($result ==true){
      return "update Success";

    }
    else{
      return "update Fail";

    }

  }

  
  function Delete(Request $request){
    $id=$request->input("id");
    $result =DB::table('details')->where('id', $id)->delete();

    if($result ==true){
      return "delete Success";

    }
    else{
      return "delete Fail";

    }

  }



}
