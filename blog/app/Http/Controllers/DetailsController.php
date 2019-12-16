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




}
