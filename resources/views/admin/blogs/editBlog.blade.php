@extends('admin.layouts.master')
@section('title', 'Edit blog')
@section('content')
   <body class="hold-transition sidebar-mini">
   <!-- Site wrapper -->
      <div class="wrapper">
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-product-hunt"></i>
               </div>
               <div class="header-title">
                  <h1>Edit Blog</h1>
                  
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                              <a class="btn btn-add " href="{{ url('admin/viewBlog') }}"> 
                              <i class="fa fa-list"></i>  Blog List </a>  
                           </div>
                        </div>
                        <div class="panel-body">
                          <?php

                          ?>
                           <form action="{{ url('admin/editBlog/'.$get_id) }}" method="post" enctype="multipart/form-data">
                           	@csrf
                           	<div class="col-sm-6">
                              <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                                  <label>Blog title</label>
                                  <input type="text" class="form-control" name="title" id="title" required="required" placeholder="input blog title" value="{{ $blog_data->title }}" />
                                  <span class="text-danger">{{ $errors->first('title') }}</span>
                               </div>
                               
                               <div class="form-group {{ $errors->has('url') ? 'has-error' : '' }}">
                                  <label>Link URL</label>
                                  <input type="text" class="form-control" name="url" id="url" placeholder="Enter Link URL" required  value="{{ $blog_data->url }}">
                                  <span class="text-danger">{{ $errors->first('url') }}</span>
                               </div>
                            </div>
                           	<div class="col-sm-6">
                               
                               <!-- <div class="form-group {{ $errors->has('img') ? 'has-error' : '' }}">
                                  <label>Image upload</label>
                                  <input type="file" name="img" id="img" class="form-control">
                                  <span class="text-danger">{{ $errors->first('img') }}</span>
                               </div> -->
                               <div class="row">
                                
                                <div class="col-sm-6">
                                  <div class="form-group {{ $errors->has('img') ? 'has-error' : '' }}">
                                    <label>Image upload</label>
                                    <input type="file" name="img" id="img" class="form-control">
                                    <input type="hidden" name="current_img" id="current_img" class="form-control" value="{{ $blog_data->image }}">
                                    
                                    <span class="text-danger">{{ $errors->first('product_img') }}</span>
                                 </div>
                                </div>
                                <div class="col-sm-4">
                                  @if(!empty($blog_data->image))
                                  <img src="{{ url('uploads/blogs/'.$blog_data->image) }}" class="img-circle" alt="" width="50" height="50" style="margin-top: 10%">
                                  @endif
                                </div>
                               </div>
                               <!-- lllllllllllll -->
                               
                               <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                                  <label>Slug</label>
                                  <input type="text" class="form-control" name="slug" id="slug" required="required" placeholder="input slug" value="{{ $blog_data->slug }}"/>
                                  <span class="text-danger">{{ $errors->first('slug') }}</span>
                               </div>  
                              
                          </div>
                          <div class="row">
                          	<div class="col-sm-12 {{ $errors->has('desciption') ? 'has-error' : '' }}">
                              <label>Description</label>
                              <textarea class="form-control" name="description" id="description"> {{ $blog_data->description }}</textarea>
                              <span class="text-danger">{{ $errors->first('description') }}</span>
                           	</div>
                       	  </div>
                          <div class="reset-button">
                             <button type="reset" class="btn btn-warning">Reset</button>
                             <button type="submit" class="btn btn-success">Save</button>
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