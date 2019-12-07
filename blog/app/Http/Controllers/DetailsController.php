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

    function DetailsDelete(){


    }

    function DetailsUpdate(){


    }


    function DetailsCreate(){


    }


}



