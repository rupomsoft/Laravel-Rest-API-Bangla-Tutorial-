<?php
namespace App\Http\Controllers;
use App\User;

class MyController extends Controller{

        public function My(){
            $myArray=array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
            return response()->json($myArray);
        }
        
      
}