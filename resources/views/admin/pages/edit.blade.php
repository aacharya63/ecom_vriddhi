@extends('admin.layouts.master')
@section('title', 'Edit Page')
@section('content')
<body class="hold-transition sidebar-mini">
   <!-- Site wrapper -->
   <div class="wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <section class="content-header">
            <div class="header-title">
               <h1>Edit Page</h1>
            </div>
         </section>
         <!-- Main content -->
         <section class="content">
            <div class="row">
               <!-- Form controls -->
               <div class="col-sm-12">
                  <div class="panel panel-bd">
                     <div class="panel-heading">
                        <div class="btn-group" id="buttonlist"> 
                           <a class="btn btn-add " href="{{ url('admin/page') }}"> 
                           <i class="fa fa-eye"></i> View Page </a>  
                        </div>
                     </div>
                     <div class="panel-body">
                        <form action="{{ route('page.update',$fp_data->id) }}" method="post" enctype="multipart/form-data">
                           @csrf
                           @method('put')
                           <div class="form-group col-xs-10 col-sm-6 col-md-6 col-lg-6 {{ $errors->has('title') ? 'has-error' : '' }}">
                              <label> Title</label>
                              <input type="text" name="title" id="title" class="form-control" value="{{ $fp_data->title }}">
                              <span class="text-danger">{{ $errors->first('title') }}</span>
                           </div>
                           <div class="form-group col-xs-10 col-sm-6 col-md-6 col-lg-6 {{ $errors->has('slug') ? 'has-error' : '' }}">
                              <label>Slug</label>
                              <input type="text" class="form-control" name="slug" id="slug" value="{{ $fp_data->slug }}" placeholder="" required>
                              <span class="text-danger">{{ $errors->first('slug') }}</span>
                           </div>
                           <div class="clearfix"></div>

                           <div class="form-group col-xs-10 col-sm-6 col-md-6 col-lg-6 {{ $errors->has('url') ? 'has-error' : '' }}">
                               <label>URL</label>
                               <input type="text" class="form-control" name="url" id="url" value="{{ $fp_data->url }}" placeholder="" required>
                               <span class="text-danger">{{ $errors->first('url') }}</span>
                           </div>
                           <div class="form-group col-xs-10 col-sm-6 col-md-6 col-lg-6 {{ $errors->has('slug') ? 'has-error' : '' }}">
                              <div class="col-sm-6">
                                <label>Header Image upload</label>
                                <input type="file" name="img" id="img" class="form-control" required="required">
                                <input type="hidden" name="current_img" id="current_img" class="form-control" value="{{ $fp_data->img }}">
                                
                                <span class="text-danger">{{ $errors->first('img') }}</span>
                              </div>
                              <div class="col-sm-6">
                                @if(!empty($fp_data->header_img))
                                <img src="{{ url('uploads/frontPages/'.$fp_data->header_img) }}" class="img-circle" alt="" width="50" height="50" style="margin-top: 10%">
                                @endif
                              </div>
                           </div>
                           <div class="clearfix"></div>



                           <div class="form-group col-xs-10 col-sm-12 col-md-12 col-lg-12 {{ $errors->has('description') ? 'has-error' : '' }}">
                              <label>Page Description</label>
                              <textarea class="form-control" name="description" id="editPageTextarea">{{ $fp_data->description }}</textarea>
                              <span class="text-danger">{{ $errors->first('description') }}</span>
                           </div>
                           <div class="clearfix"></div>
                           <div class="col-xs-10 col-sm-4 col-md-4 col-lg-4">
                              <button type="reset" class="btn btn-warning">Reset</button>
                              <button type="submit" class="btn btn-success">Update Page</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
   </div>
   <!-- ./wrapper -->
   @endsection