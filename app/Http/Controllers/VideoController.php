<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Book;
use File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        $kategori   = Category::all();
        return View('module.video.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,
            [
            'user_id'        =>'required ',
            'category_id'    =>'required ',  
            'kode'           =>'required ', 
            'judul'          =>'required ', 
            'deskripsi'      =>'required ',
            'cover'          =>'required|image|mimes:png,jpg,jpeg,gif,bmp',
            'author'         =>'required ',
            'file'           =>'required ',
            'type'           =>'required ',
            'status'         =>'required '
                  
            ]
            );
        $user_id     = Auth::user()->id;
        $category_id = $request->category_id;
        $judul       = $request->judul;
        $kode        = $request->kode;
        $deskripsi   = $request->deskripsi;
        //buat gambar
        $img_name = $request->file('cover')->getClientOriginalName(); 

        $filename = rand(11111111, 99999999). '.' . $img_name;
        // lalu proses gambar
        $img = Image::make($_FILES['cover']['tmp_name']);
        
        // melakukan resize 
        $img->resize(200, 150);
        
        // menentukan direktori tempat gambar akan disimpan
        $path_dir = base_path() . '/public/img/book/'.$filename;
        
        // upload ke direktori yang sudah ditentukan
        $img->save($path_dir);
        

        $author      = $request->author;
        $type        = $request->type;
        //pdf
        $file        = $request->file;
        $type        = $request->type;
        $status      = $request->status;

       


        Book::create(['user_id'=>Auth::user()->id,
                      'category_id'=>$category_id,
                      'kode'=>$kode,
                      'judul'=>$judul,
                      'deskripsi'=>$deskripsi,
                      'cover'=>$filename,
                      'author'=>$author,
                      'file'=>$file,
                      'type'=>$type,
                      'status'=>$status  
                     ]);
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $video = Book::find($id);
        return view('module.video.player', compact('video'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function kategory($id)
    {
        $kategory = Category::find($id)->books->where('status', 1)->where('type', 2);
        return view('module.video.index', compact('kategory'));
    }
}
