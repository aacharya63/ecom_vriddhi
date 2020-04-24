@extends('admin.layouts.master')
@section('title', 'Edit Category')
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
               <h1>Edit Category</h1>
               <small>Edit Category</small>
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
                           <a class="btn btn-add " href="{{ url('admin/viewCategory') }}"> 
                           <i class="fa fa-eye"></i> View Category </a>  
                        </div>
                     </div>
                     <div class="panel-body">
                        @if(Session::has('fls_suc_msg_ec'))
                        <div class="alert alert-success" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                           <strong>Successfully!</strong> {{ Session::get('fls_suc_msg_ec') }}
                        </div>
                        @endif
                        <form action="{{ url('admin/editCategory/'.$category_dtl->id) }}" method="post" enctype="multipart/form-data">
                           @csrf
                            <div class="col-sm-6">
                              <div class="form-group {{ $errors->has('category_name') ? 'has-error' : '' }}">
                                 <label>Category Name</label>
                                 <input type="text" class="form-control" name="category_name" id="category_name" value="{{ $category_dtl->name }}" placeholder="Enter Category Name" required>
                                 <span class="text-danger">{{ $errors->first('category_name') }}</span>
                              </div>
                              <div class="form-group {{ $errors->has('parent_category') ? 'has-error' : '' }}">
                                 <label>Parent Category</label>
                                 <select class="form-control" name="parent_category" id="parent_category">
                                   <option value="0" selected="selected">Parent Category</option>
                                   @foreach($sc as $lvl)
                                   <option value="{{ $lvl->id }}">{{ $lvl->name }}</option>
                                   @endforeach
                                  </select>
                                 <span class="text-danger">{{ $errors->first('parent_category') }}</span>
                              </div>
                              
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group {{ $errors->has('category_url') ? 'has-error' : '' }}">
                                 <label>Category URL</label>
                                 <input type="text" class="form-control" name="category_url" id="category_url" value="{{ $category_dtl->url }}" placeholder="Enter Category URL" required>
                                 <span class="text-danger">{{ $errors->first('category_url') }}</span>
                              </div>
                              <div class="form-group {{ $errors->has('category_description') ? 'has-error' : '' }}">
                                 <label>Category Description</label>
                                 <textarea class="form-control" name="category_description" id="category_description">{{ $category_dtl->description }}</textarea>
                                 <span class="text-danger">{{ $errors->first('category_description') }}</span>
                              </div>   
                              <div class="form-group {{ $errors->has('category_status') ? 'has-error' : '' }}">
                                 <label>Category Status</label>
                                 <select class="form-control" name="category_status" id="category_status">
                                   <option value="0">Inactive</option>
                                   <option value="1">Active</option>
                                 </select>
                                 <span class="text-danger">{{ $errors->first('category_status') }}</span>
                              </div>
                            </div>
                           <div class="reset-button">
                              <button type="reset" class="btn btn-warning">Reset</button>
                              <button type="submit" class="btn btn-success">Update Product</button>
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