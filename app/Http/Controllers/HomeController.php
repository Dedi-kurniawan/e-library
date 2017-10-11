<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Faculty;
use App\Book;
use App\User;

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





        $ebook = Book::where('type', 1);
        $ebookTotal = $ebook->count();

        $video = Book::where('type', 2);
        $videoTotal = $video->count();

        $anggota = User::all();
        $anggotaTotal = $anggota->count();

        $ebookPremium = Book::where('type', 1)->where('status', 2);
        $ebookTotalPremium = $ebookPremium->count();

        // $kategori = Category::all();
        // $faculty  = Faculty::all();
        // $book  = Book::all();

        $book = Book::all();
        $menuFakultas = Faculty::with('categories')->get();
        return view('home', compact('menuFakultas', 'book', 'ebookTotal', 'videoTotal', 'anggotaTotal', 'ebookTotalPremium'));
    }
}
