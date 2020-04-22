@extends('admin.layouts.master')
@section('title', 'Add Product')
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
                              <a class="btn btn-add " href="{{ url('admin/viewProduct') }}"> 
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
                              <div class="form-group {{ $errors->has('product_name') ? 'has-error' : '' }}">
                                 <label> Select Categry</label>
                                 <select class="form-control" name="uc" id="uc">
                                   <?php echo $catDdl; ?>
                                 </select>
                                 <span class="text-danger">{{ $errors->first('product_name') }}</span>
                              </div>
                              <div class="form-group {{ $errors->has('product_name') ? 'has-error' : '' }}">
                                 <label> Name</label>
                                 <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Enter Product Name" required>
                                 <span class="text-danger">{{ $errors->first('product_name') }}</span>
                              </div>
                              <div class="form-group {{ $errors->has('product_code') ? 'has-error' : '' }}">
                                 <label>Product Code</label>
                                 <input type="text" class="form-control" name="product_code" id="product_code" placeholder="Enter Product Code" required>
                                 <span class="text-danger">{{ $errors->first('product_code') }}</span>
                              </div>
                              <div class="form-group {{ $errors->has('product_color') ? 'has-error' : '' }}">
                                 <label>Product Color</label>
                                 <input type="text" class="form-control" name="product_color" id="product_color" placeholder="Enter Product Color" required>
                                 <span class="text-danger">{{ $errors->first('product_color') }}</span>
                              </div>
                              <div class="form-group {{ $errors->has('product_actual_price') ? 'has-error' : '' }}">
                                 <label>Product Actual Price</label>
                                 <input type="text" class="form-control" name="product_actual_price" id="product_actual_price" placeholder="Enter Product Actual Price" required>
                                 <span class="text-danger">{{ $errors->first('product_actual_price') }}</span>
                              </div>
                            </div>
                           	<div class="col-sm-6">
                               <div class="form-group {{ $errors->has('product_discount') ? 'has-error' : '' }}">
                                  <label>Discount On Product</label>
                                  <input type="number" class="form-control" name="product_discount" id="product_discount" required="required" placeholder="Discount On Product in %" />
                                  <span class="text-danger">{{ $errors->first('product_discount') }}</span>
                               </div>
                               <div class="form-group {{ $errors->has('product_desciption') ? 'has-error' : '' }}">
                                  <label>Product Description</label>
                                  <textarea class="form-control" name="product_desciption" id="product_desciption"></textarea>
                                  <span class="text-danger">{{ $errors->first('product_desciption') }}</span>
                               </div>
                               <div class="form-group {{ $errors->has('product_img') ? 'has-error' : '' }}">
                                  <label>Product Image upload</label>
                                  <input type="file" name="product_img" id="product_img" class="form-control">
                                  <span class="text-danger">{{ $errors->first('product_img') }}</span>
                               </div>
                               <div class="form-group {{ $errors->has('product_price') ? 'has-error' : '' }}">
                                  <label>Product selling Price</label>
                                  <input type="text" class="form-control" name="product_price" id="product_price" placeholder="Enter Product Price" required>
                                  <span class="text-danger">{{ $errors->first('product_price') }}</span>
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