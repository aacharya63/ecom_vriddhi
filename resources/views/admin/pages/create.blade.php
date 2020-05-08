@extends('admin.layouts.master')
@section('title', 'Add New Page')
@section('content')
<body class="hold-transition sidebar-mini">
   <!-- Site wrapper -->
   <div class="wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <section class="content-header">
            <div class="header-title">
               <h1>Add New Page</h1>
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
                           <a class="btn btn-add " href="{{ url('admin/viewPage') }}"> 
                           <i class="fa fa-list"></i>  Page List </a>  
                        </div>
                     </div>
                     <div class="panel-body">
                        <form action="{{ route('page.store') }}" method="POST" novalidate enctype="multipart/form-data">
                           @csrf
                           <div class="row">
                              
                              <div class="form-group col-xs-10 col-sm-6 col-md-6 col-lg-6 {{ $errors->has('title') ? 'has-error' : '' }}">
                                    <label>Page Title</label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Page title" required>
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                 </div>
                              <div class="form-group col-xs-10 col-sm-6 col-md-6 col-lg-6 {{ $errors->has('slug') ? 'has-error' : '' }}">
                                    <label>Slug</label>
                                    <input type="text" class="form-control" name="slug" id="slug" placeholder="Enter Page Slug" required>
                                    <span class="text-danger">{{ $errors->first('slug') }}</span>
                                 </div>
                              <div class="clearfix"></div>
                              <div class="form-group col-xs-10 col-sm-6 col-md-6 col-lg-6 {{ $errors->has('url') ? 'has-error' : '' }}">
                                    <label>Page Link URL</label>
                                    <input type="text" class="form-control" name="url" id="url" placeholder="Enter Page Link URL" required>
                                    <span class="text-danger">{{ $errors->first('url') }}</span>
                                 </div>
                              <div class="form-group col-xs-10 col-sm-6 col-md-6 col-lg-6 {{ $errors->has('img') ? 'has-error' : '' }}">
                                    <label>Page Header Image</label>
                                    <input type="file" name="img" id="img" class="form-control">
                                    <span class="text-danger">{{ $errors->first('img') }}</span>
                                 </div>
                              <div class="clearfix"></div>
                              <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12 {{ $errors->has('description') ? 'has-error' : '' }}">
                                    <label>Page Description</label>
                                    <textarea class="form-control" name="description" required="" id="editPageTextarea"></textarea>
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                 </div>
                              <div class="clearfix"></div>
                              <div class="col-xs-10 col-sm-4 col-md-4 col-lg-4">
                                <button type="reset" class="btn btn-warning">Reset</button>
                                 <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                              <!-- yyyyyyyyyy -->
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