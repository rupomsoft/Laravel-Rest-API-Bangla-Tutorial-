<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegistrationModel;
class RegistrationController extends Controller
{

function onRegister(Request $request){
    $firstname =$request->input('firstname');
    $lastname =$request->input('lastname');
    $city =$request->input('city');
    $username =$request->input('username');
    $password  =$request->input('password');
    $gender =$request->input('gender');
    $userCount=RegistrationModel::where('username',$username)->count();
    if($userCount!=0){
        return 'User Already Exists';
    }
    else{
       $result=RegistrationModel::insert([
            'firstname'=>$firstname,
            'lastname'=>$lastname,
            'city'=>$city,
            'username'=>$username,
            'password'=>$password,
            'gender'=>$gender
            ]);
        if($result==true){
            return 'Registration Succesfull';

        }    
        else{
            return 'Registration Fail Try Again';
        }
    } 
}

}
