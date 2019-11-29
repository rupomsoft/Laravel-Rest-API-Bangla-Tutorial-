<?php
namespace App\Http\Controllers;
use App\User;

class MyController extends Controller{

        public function My($name){
            return "My Name is ".$name;
        }

}