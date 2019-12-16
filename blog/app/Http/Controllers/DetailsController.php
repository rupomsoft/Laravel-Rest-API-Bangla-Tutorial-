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

}
