<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Category;
use App\Book;
use App\User;


class EbookController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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

        $books = Book::orderBy('created_at', 'desc')->paginate(6);
        //$menuFakultas = Faculty::with('categories')->get();
        return view('home', compact('books', 'ebookTotal', 'videoTotal', 'anggotaTotal', 'ebookTotalPremium'));
    }

    public function show($id)
    {

        $ebook = Book::find($id);
        return view('module.ebook.reader', compact('ebook'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function kategory($id)
    {
        $kategory = Category::find($id)->books->where('status', 1);
        
        return view('module.ebook.index', compact('kategory'));
    }

    
}
