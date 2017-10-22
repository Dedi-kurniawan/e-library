@extends('layouts.master')
@section('maincontent')

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">collections_bookmark</i>
                        </div>
                        <div class="content">
                            <div class="text">e-Book</div>
                            <div class="number count-to" data-from="0" data-to="{{$ebookTotal}}" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">video_library</i>
                        </div>
                        <div class="content">
                            <div class="text">Video</div>
                            <div class="number count-to" data-from="0" data-to="{{$videoTotal}}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">group</i>
                        </div>
                        <div class="content">
                            <div class="text">Anggota</div>
                            <div class="number count-to" data-from="0" data-to="{{$anggotaTotal}}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">star</i>
                        </div>
                        <div class="content">
                            <div class="text">Premium</div>
                            <div class="number count-to" data-from="0" data-to="{{$ebookTotalPremium}}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>

         <!-- Bootstrap Default Buttons -->
          <div class="block-header">
          <center>
                <HR WIDTH=100% color="blue" size="4" >
                <h2><font size="5" color="DODGERBLUE">-Koleksi e-Book Terbaru-</font></h2>
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
                <a href="{{ route ('video.show', $eb->id)}}">
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
                  </div>
        </center>
        <center>
                  <div class="flex">
                     <ul class="list-inline count2">
                        <li><h6><strong> @Publisher </strong></h6> 
                            <span>{{ $eb->user->name }}</span> 
                        </li>
                        <li><h6><strong> Status </strong></h6> 
                        @if($eb->status == 1)
                            <span class="label bg-light-blue">FREE</span>
                        @else
                            <span class="label  bg-orange">PREMIUM</span>
                        @endif 
                    </ul>
                  </div>   
        </center>       
             </div>
        </div>
     </div>
    @endforeach        
            </div>
        </div><td colspan="3">{{ $books->links() }}</td>
    </section>


@endsection