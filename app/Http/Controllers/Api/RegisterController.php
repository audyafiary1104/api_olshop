<?php

namespace App\Http\Controllers\Api;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
   public function Register(Request $request)
   {
   
    $new = new  User;
    $new->email = $request->email;
    $new->first_name = $request->first_name;
    $new->last_name = $request->last_name;
    $new->password = $request->password;
    $new->save();
   }
}
