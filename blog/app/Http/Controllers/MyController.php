<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class MyController extends Controller{

     

   function Catch(Request $request){

     return $request->header("name");
   }

}