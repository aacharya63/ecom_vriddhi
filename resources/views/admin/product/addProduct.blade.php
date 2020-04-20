@extends('admin.layouts.master')
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
                  <h1>Add Product</h1>
                  <small>Product list</small>
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
                              <a class="btn btn-add " href="clist.html"> 
                              <i class="fa fa-list"></i>  Product List </a>  
                           </div>
                        </div>
                        <div class="panel-body">
                          @if(Session::has('flsMsgSuc'))
                          <div class="alert alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Successfully!</strong> {{ Session::get('flsMsgSuc') }}
                          </div>
                          @endif
                           <form action="{{ url('admin/addProduct') }}" method="post" enctype="multipart/form-data">
                           	@csrf
                           	<div class="col-sm-6">
                              <div class="form-group">
                                 <label> Name</label>
                                 <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Enter Product Name" required>
                              </div>
                              <div class="form-group">
                                 <label>Product Code</label>
                                 <input type="text" class="form-control" name="product_code" id="product_code" placeholder="Enter Product Code" required>
                              </div>
                              <div class="form-group">
                                 <label>Product Color</label>
                                 <input type="text" class="form-control" name="product_color" id="product_color" placeholder="Enter Product Color" required>
                              </div>
                            </div>
                           	<div class="col-sm-6">
                               <div class="form-group">
                                  <label>Product Description</label>
                                  <textarea class="form-control" name="product_desciption" id="product_desciption"></textarea>
                               </div>
                               <div class="form-group">
                                  <label>Product Image upload</label>
                                  <input type="file" name="product_img" id="product_img" class="form-control">
                               </div>
                               <div class="form-group">
                                  <label>Product Price</label>
                                  <input type="text" class="form-control" name="product_price" id="product_price" placeholder="Enter Product Price" required>
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