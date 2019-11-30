<?php
namespace App\Http\Controllers;
use App\User;

class MyController extends Controller{

        public function First(){
           return redirect('/Second');
        }
        
        public function Second(){
           
            return "I am Second";
        }

        public function Download(){
            $path='demo.txt';
            return response()->download($path);
        }

}