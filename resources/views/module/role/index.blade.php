@extends('layouts.master')
@section('maincontent')

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>


 <!-- Checkbox -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 class="card-inside-title">User Manejemen</h2>
                            <ul class="header-dropdown m-r--5"> 

                                <a href="{{ route('role.create') }}"><button type="button"  data-color="red" class="btn bg-red waves-effect" >NEW +</button></a> 

                            </ul>
                        </div>
                        <div class="body"> 
                           <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>role</th>
                                            <th>Permision</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Jurusan</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                     <?php $no=1; ?>
                                     @foreach($roles as $role)
                                    <tbody>
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $role->name }}</td>
                                             <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>
                                             <td>
                                            {{-- {!! Form::open(['route' => ['permission.destroy', $fa->id], 'method' => 'DELETE']) !!} --}}
                                            <a href=" {{ route ('role.edit',$role->id) }}"><button type="button" class="btn bg-blue waves-effect">
                                            <i class="material-icons">edit</i>
                                            </button></a>
                                           {{--  <button type="submit"  class="btn bg-red waves-effect" onclick="_gaq.push(['_trackEvent', 'example, 'try', 'Danger']);"><i class="material-icons">delete</i> --}}
                                            </button>             
                                            
                                            </td>
                                        </tr>                                       
                                    </tbody>
                                    @endforeach                      
                         </div>
                    </div>
                </div>
            </div>



     
       </div>
        
    </div>
</section>
@endsection