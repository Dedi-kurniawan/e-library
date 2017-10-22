<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    

        return view('home');
    }

    public function Search(Request $request)
    {
        if($request->has('search')){
            $books = Book::search($request->get('search'))->paginate(6);
        }else{
            $books = Book::paginate(6);
        }

        return view('search', compact('books'));
    }
}
