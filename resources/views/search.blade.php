@extends('layouts.master')
@section('maincontent')

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2></h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
@if($books->count())            
           
         <!-- Bootstrap Default Buttons -->
          <div class="block-header">
          <center>
                <HR WIDTH=100% color="blue" size="4" >
                <h2><font size="5" color="DODGERBLUE">Hasil Pencarian</font></h2>
                <HR WIDTH=100% color="blue" size="4" >
            </center>
            </div>

         <!-- menu buku-->
            <div class="row clearfix">
            @foreach($books as $eb)
                <div class="col-lg-4 col-md-4 col-sm-3 col-xs-10">
                    <div class="card">
                        <div class="header bg-blue">
                            <h2>
                               <h2>{{ $eb->judul }}<small> {{ $eb->deskripsi }} </small></h2>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
            <div class="body">
            @if ($eb->type == 1) 
                <a href=" {{url('/reader', $eb->id)}}">
                <img alt="300x200" src="{{ $eb->CoverPath }}" style="border: 0.5px solid #ddd;
                   border-radius: 5px;
                   padding: 5px;
                   width: 100%;"> </a>
            @else
                <a href="#">
                <img alt="300x200" src="{{ $eb->CoverPath }}" style="border: 0.5px solid #ddd;
                   border-radius: 5px;
                   padding: 5px;
                   width: 100%;"> </a>
            @endif
                <center><div class="header"> 
                   <div class="flex">
                    <ul class="list-inline count2">
                        <li>{!! $eb->TypeColl !!}
                        </li> 
                        <li><center><h3>{{ $eb->category->faculty->kode_jurusan  }}</h3>
                            <span>Jurusan</span></center>
                        </li> 
                        <li><center><h3><i class="material-icons">file_download</i></h3>
                            <span>Dowload</span></center>
                        </li>  
                    </ul> 
                    </div></center>
                         <h5><strong> @Publisher </strong></h5>
                            <span>{{ $eb->user_id }}</span> 
             </div>
        </div>
     </div>
    @endforeach
@else
            <div class="block-header">
          <center>
                <HR WIDTH=100% color="blue" size="4" >
                <h2><font size="5" color="RED">MAAF DATA YANG ANDA CARI TIDAK ADA!!!</font></h2>
                <HR WIDTH=100% color="blue" size="4" >
            </center>
            </div>
@endif
            <tr>
                <td colspan="3">{{ $books->links() }}</td>
            </tr>

            </div>
        </div>
    </section>


@endsection