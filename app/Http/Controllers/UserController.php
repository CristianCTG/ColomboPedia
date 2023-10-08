<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(int $user_id): string{
       /*  dd($user_id); */

       dd(user::all());
       return view('welcome');
        /* return '<h1> Holaa: '. $user_id.'</h1>'; */
    }
}
