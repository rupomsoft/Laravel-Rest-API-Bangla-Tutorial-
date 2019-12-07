<?php

namespace App\Http\Controllers;
use illuminate\support\Facades\DB;

class ExampleController extends Controller
{
    

    function testConn(){
            $dbname=DB::Connection()->select("SELECT * FROM details");
      return $dbname;
    }
}
