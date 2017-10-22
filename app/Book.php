<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;


class Book extends Model
{
     use SearchableTrait;

     
     protected $searchable = [
        'columns' => [
            'books.kode' => 10,
            'books.judul' => 5,

        ]
    ];


     protected $fillable = ['user_id','category_id','kode','judul','deskripsi','cover','author','','type','file','type','status'];


     public function category()
    {
    	return $this->belongsTo(Category::class);
    }
     public function user()
    {
        return $this->belongsTo('App\User');
    }

     public function getTypeCollAttribute()
    {
        if ($this->type == 1) 
        {
            return '<center><h3><i class="material-icons">collections_bookmark</i></h3>
                            <span>e-Book</span></center>';
        } 
        elseif ($this->type == 2)
        {
            return '<center><h3><i class="material-icons">video_library</i></h3>
                            <span>video</span></center>';
        }
        else
        {
            return 'Jenis Tidak Tersedia';
        }
    }

     public function getCoverPathAttribute()
    {
        if ($this->cover !== NULL) 
        {
            return url('/img/book/' . $this->cover);
        } else {
            return url('/img/book/noimage.png');
        }
    }

    public function getCreatedAtAttribute()
    {
            return \Carbon\Carbon::parse($this->attributes['created_at'])->format('d-m-Y');
    }
}
