@extends('layouts.master')
@section('maincontent')
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                </h2>
            </div>

  <!-- Basic Example | Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>BIODATA</h2>
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
                            <div id="wizard_vertical">
                                <h2>PROFILE</h2>
                                <section>
                                    <p>
                                       <div class="container">
  <div class="row">
    <div class="span2">
      <img src="{{ asset('img/profile/1.jpg') }}" class="img-circle"
      style="border: 0.5px solid #ddd;
                   border-radius: 5px;
                   padding: 5px;
                   height:30%;
                   width: 30%;">
    </div>
    <div class="span4">
      <blockquote>
        <p>Bruce Wayne</p>
        <small><cite title="Source Title">Gotham, United Kingdom  <i class="icon-map-marker"></i></cite></small>
      </blockquote>
      <p>
    <div class="demo-google-material-icon">
        <i class="material-icons">person</i>&nbsp&nbsp&nbsp <span> 145557</span><br><hr>
    </div>
    <div class="demo-google-material-icon">
        <i class="material-icons">email</i>&nbsp&nbsp&nbsp <span> masterwayne@batman.com </span><br><hr>
    </div>
    <div class="demo-google-material-icon">
        <i class="material-icons">date_range</i>&nbsp&nbsp&nbsp <span> Banjar Negara,01 Januari 2017</span> <br><hr>
    </div>
    <div class="demo-google-material-icon">
        <i class="material-icons">home</i>&nbsp&nbsp&nbsp <span>Dumai</span><hr>
    </div>
      </p>
    </div>
  </div>
</div>
                                    </p>
                                </section>

                                <h2>EDIT</h2>
                                <section>
                                    <p>
                                      
                                    </p>
                                </section>

                                <h2>UPLOAD</h2>
                                <section>
                                    <p>
                                   <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Type</th>
                                            <th>Judul</th>
                                            <th>Category</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Type</th>
                                            <th>Judul</th>
                                            <th>Category</th>
                                        </tr>
                                    </tfoot>
                                    
                                     
                                    <tbody>
                                        <tr>
                                           <td>1</td>
                                           <td>E-book</td>
                                           <td>Belajar</td>
                                           <td>PHP</td>
                                        </tr>                                    
                                    </tbody>
                                   
                                </table>
                            </div>
                        </div>
                                    </p>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Example | Vertical Layout -->

             </div>
    </section>


@endsection