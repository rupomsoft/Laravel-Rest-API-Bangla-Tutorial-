<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetailsModel;

class DetailsController extends Controller
{
 

  function SelectALL(){
            $result=DetailsModel::all();
            return  $result;
    }

function SelectByID(Request $request){
    $id= $request->input('id');
    $result=DetailsModel::where('id',$id)->get();
    return  $result;

  }


  function Count(){
  $result= DetailsModel::count();
  return  $result;
  }

  function Min(){
    $result= DetailsModel::min('roll');
    return  $result;
  }

  function Max(){
    $result= DetailsModel::max('roll');
    return  $result;

  }

  function Avg(){
    $result= DetailsModel::avg('roll');
    return  $result;

  }

  function Sum(){
    $result= DetailsModel::sum('roll');
    return  $result;
  }

  function Insert(Request $request){
    $name=  $request->input('name');
    $roll=  $request->input('roll');
    $city=  $request->input('city');
    $phn=  $request->input('phn');
    $class=  $request->input('class');
    $result= DetailsModel::insert(['name'=>$name,'roll'=> $roll,'city'=> $city, 'phn'=>$phn,'class'=>  $class]);
    
    if($result==true){
      return "Insert Success";
    }
    else{

      return "Insert fail";
    }

  }



  function Delete(Request $request){
    $id= $request->input('id');
    $result= DetailsModel::where('id',$id)->delete();
    if($result==true){
      return "Delete Success";
    }
    else{
      return "Delete fail";
    }
  }

  function Update(Request $request){
    $id=$request->input('id');
    $name=$request->input('name');
    $roll=$request->input('roll');
    $result=DetailsModel::where('id',$id)->update(['name' =>$name,'roll'=>$roll]);

  if($result==true){
    return "Update Success";
  }
  else{
    return "Update fail";
  }

  }

}
