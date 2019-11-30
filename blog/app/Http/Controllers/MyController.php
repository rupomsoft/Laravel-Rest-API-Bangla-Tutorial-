<?php
namespace App\Http\Controllers;
use App\User;

class MyController extends Controller{

        public function My($name){
            return response($name)
                    ->header('name',$name)
                    ->header('age','28')
                    ->header('city','Rajshahi')
                    ->header('username','Rupom');
        }

}