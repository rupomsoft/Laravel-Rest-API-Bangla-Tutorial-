<?php

namespace App\Http\Controllers;
use illuminate\support\Facades\DB;
use Illuminate\Http\Request;

class DetailsController extends Controller{



    function DetailsSelect(Request $request){
            $SQL="SELECT * FROM details";
            $request=DB::select($SQL);
            return $request;
    }

    function DetailsDelete(Request $request){
       $id= $request->input("id");
       $SQL="DELETE FROM `details` WHERE `id`=?";
       $result=DB::delete( $SQL,[$id]);
       if($result==true){
        return "Delete Success";
        }
      else{
          return "Deletee Fail ! Try Again";

    }
   
    }

    function DetailsUpdate(){


    }


    function DetailsCreate(Request $request){

      $name= $request->input("name");
      $roll=  $request->input("roll");
      $city=  $request->input("city");
      $phn = $request->input("phn");
      $class=  $request->input("class");
      
      $SQL="INSERT INTO `details`(`name`, `roll`, `city`, `phn`, `class`) VALUES (?,?,?,?,?)";
      $result= DB::insert($SQL,[$name,$roll,$city,$phn,$class]);
      
      if($result==true){
            return "Data Save Success";

      }
      else{
        return "Data Save Fail ! Try Again";

      }


    }


}



