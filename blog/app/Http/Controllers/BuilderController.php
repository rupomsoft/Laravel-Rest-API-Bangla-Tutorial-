<?php

namespace App\Http\Controllers;
use illuminate\support\Facades\DB;
use Illuminate\Http\Request;

class BuilderController extends Controller{


  function Rows(){
   $result= DB::table('details')->pluck('name','roll');
   return  $result;
  }



}
