@extends('layouts.master')
@section('maincontent')

<section class="content">
        <div class="container-fluid">
            <div class="block-header">

 <h2> @foreach($kategory as $eb)   {{ $eb->category->faculty->jurusan }} / {{ $eb->category->kategory }} @endforeach
                </h2>
            </div>
         <hr>
         
            <div class="row clearfix">
            @foreach($kategory as $eb)
            @if ($eb->type == 0) 
            <center><h2>DATA TIDAK ADA</h2></center>
            @else
                <div class="col-lg-4 col-md-4 col-sm-3 col-xs-10">
                    <div class="card">
                        <div class="header bg-blue">
                            <h2>{{ substr($eb->judul,0,12) }} <small> {{ substr($eb->deskripsi,0,23) }} </small></h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                    </ul>
                                </li>
                            </ul>
                        </div>
            <div class="body">
           
                <a href=" {{url('/reader', $eb->id)}}">
                <img alt="300x200" src="{{ $eb->CoverPath }}" style="border: 0.5px solid #ddd;
                   border-radius: 5px;
                   padding: 5px;
                   width: 100%;"> </a>
           {{--  @else
                <a href="{{ route ('video.show', $eb->id)}}">
                <img alt="300x200" src="{{ $eb->CoverPath }}" style="border: 0.5px solid #ddd;
                   border-radius: 5px;
                   padding: 5px;
                   width: 100%;"> </a> --}}
            
         <center><div class="header"> 
                   <div class="flex">
                    <ul class="list-inline count2">
                        <li>{!! $eb->TypeColl !!}
                        </li> 
                        <li><center><h3>{{ $eb->category->faculty->kode_jurusan }}</h3>
                            <span>Jurusan</span></center>
                        </li> 
                        <li><center><h3><i class="material-icons">file_download</i></h3>
                            <span>Dowload</span></center>
                        </li>  
                    </ul> 
                    </div></center>
                         <h5> @Publisher &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspUpload</h5>
                            <span> {{ $eb->user->name}}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp {{ $eb->created_at }}</span> 

             </div>
        </div>
     </div>

     

     @endif
     </center> {{-- {{ $books->links() }}</td> --}}
     @endforeach
     
@endsection