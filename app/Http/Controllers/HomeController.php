<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $books=Book::orderBy('id','desc')->paginate();
        return view('home.index',compact('books'));
       
    }
}
