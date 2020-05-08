@extends('admin.layouts.master')
@section('title', 'View Page')
@section('content')
   <body class="hold-transition sidebar-mini">
   <!-- Site wrapper -->
      <div class="wrapper">
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               
               <div class="header-title">
                  <h1>View Page</h1>
               
               </div>
            </section>

            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <a href="#">
                                 <h4>View Page</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">

                        
                           <div class="btn-group">
                              <div class="buttonexport" id="buttonlist"> 
                                 <a class="btn btn-add" href="{{ url('admin/add') }}"> <i class="fa fa-plus"></i> Add Page
                                 </a>  
                              </div>
                            </div>
                            <!-- dddddddddd -->
                            <div class="table-responsive">
            <!-- <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Page URL</th>
                    <th>Header Image</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        {{$fp_data->title}}
                    </td>
                    <td>
                        {{$fp_data->slug}}
                    </td>
                    <td>
                        {{$fp_data->url}}
                    </td>
                    <td>
                     @if(!empty($fp_data->header_img))
                     <img src="{{ url('uploads/frontPages/'.$fp_data->header_img) }}" class="img-circle" alt="{{ $fp_data->title }} Image" width="50" height="50">
                     @else
                     <span class="label label-danger">Image Not Available</span>
                     @endif
                    </td>
                    <td>
                     @if($fp_data->status == 1)
                     <span class="label label-success">Active</span>
                     @else
                     <span class="label label-danger">Inactive</span>
                     @endif
                    </td>
                </tr>
                </tbody>
            </table> -->
        </div>
                            <!-- wwwwwwwwwww -->
                           <div class="container">
                              {!!html_entity_decode($fp_data->description)!!}
                           </div>
                           
                        </div>
                     </div>
                  </div>
               </div>
               
               <!-- Modal -->    
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         
      </div>
      <!-- ./wrapper -->
@endsection