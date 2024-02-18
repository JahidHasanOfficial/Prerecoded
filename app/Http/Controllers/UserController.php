<?php

namespace App\Http\Controllers;

use App\Models\demo;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userRegistration(Request $request){
        
    //   User::create([
    //      'firstName' => $request->input('firstName'),
    //      'lastName' => $request->input('lastName'),
    //      'email' => $request->input('email'),
    //      'password' => $request->input('password'),
    //  ]);
    //  return "Success";
    demo::create([
        'name' => $request->input('name'),
        'eamil' => $request->input('eamil'),
    ]);
     }
}
