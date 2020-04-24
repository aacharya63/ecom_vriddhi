@extends('admin.layouts.master')
@section('title', 'Add Banner')
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
                  <h1>Add Banner</h1>
                  <small>Banner list</small>
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
                              <a class="btn btn-add " href="{{ url('admin/banner') }}"> 
                              <i class="fa fa-list"></i>  Banner List </a>  
                           </div>
                        </div>
                        <div class="panel-body">
                          @if(Session::has('flsMsgSucBan'))
                          <div class="alert alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Successfully!</strong> {{ Session::get('flsMsgSucBan') }}
                          </div>
                          @endif
                           <form action="{{ url('admin/addBanner') }}" method="post" enctype="multipart/form-data">
                           	@csrf
                           	<div class="col-sm-6">
                              
                              <div class="form-group {{ $errors->has('banner_name') ? 'has-error' : '' }}">
                                 <label>Banner Name</label>
                                 <input type="text" class="form-control" name="banner_name" id="banner_name" placeholder="Enter Banner Name" required>
                                 <span class="text-danger">{{ $errors->first('banner_name') }}</span>
                              </div>
                              <div class="form-group {{ $errors->has('text_style') ? 'has-error' : '' }}">
                                 <label>Text Style</label>
                                 <input type="text" class="form-control" name="text_style" id="text_style" placeholder="Enter text style" required>
                                 <span class="text-danger">{{ $errors->first('text_style') }}</span>
                              </div>
                              <div class="form-group {{ $errors->has('banner_content') ? 'has-error' : '' }}">
                                 <label>Banner content</label>
                                 <textarea class="form-control" name="banner_content" id="banner_content"></textarea>
                                 <span class="text-danger">{{ $errors->first('banner_content') }}</span>
                              </div>
                              <div class="form-group {{ $errors->has('banner_link') ? 'has-error' : '' }}">
                                 <label>Link</label>
                                 <input type="text" class="form-control" name="banner_link" id="banner_link" placeholder="Enter Banner Link" required>
                                 <span class="text-danger">{{ $errors->first('banner_link') }}</span>
                              </div>
                            </div>
                           	<div class="col-sm-6">
                               <div class="form-group {{ $errors->has('sort_order') ? 'has-error' : '' }}">
                                  <label>Sort order</label>
                                  <input type="text" class="form-control" name="sort_order" id="sort_order" required="required" placeholder="sort_order" />
                                  <span class="text-danger">{{ $errors->first('sort_order') }}</span>
                               </div>
                               <div class="form-group {{ $errors->has('banner_img') ? 'has-error' : '' }}">
                                  <label>Banner Image upload</label>
                                  <input type="file" name="banner_img" id="banner_img" class="form-control">
                                  <span class="text-danger">{{ $errors->first('banner_img') }}</span>
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