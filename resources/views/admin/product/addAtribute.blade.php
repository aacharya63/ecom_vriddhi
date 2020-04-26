@extends('admin.layouts.master')
@section('title', 'Add Attribute')
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
               <h1>Add Attribute</h1>
               <small>Attribute list</small>
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
                           <a class="btn btn-add " href="{{ url('admin/viewAttribute') }}"> 
                           <i class="fa fa-list"></i>  Attribute List </a>  
                        </div>
                     </div>
                     <div class="panel-body">
                        @if(Session::has('success_msg'))
                        <div class="alert alert-success" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                           <strong>Successfully!</strong> {{ Session::get('success_msg') }}
                        </div>
                        @endif
                        <form action="{{ url('admin/addAttribute/'.$product_data->id) }}" method="post" enctype="multipart/form-data">
                           @csrf
                           <div class="col-sm-6">
                              <div class="form-group {{ $errors->has('product_name') ? 'has-error' : '' }}">
                                 <label> Name</label>
                                 {{ $product_data->name }}
                              </div>
                              <div class="form-group {{ $errors->has('product_code') ? 'has-error' : '' }}">
                                 <label>Product Code</label>
                                 {{ $product_data->code }}
                              </div>
                           </div>
                           <div class="col-sm-6">
                           	  <div id='TextBoxesGroup'>
	                           	<div id="TextBoxDiv1">
	                           	  <div class="form-group {{ $errors->has('sku') ? 'has-error' : '' }}">
	                                 <label>Product SKU</label>
	                                 <input type='textbox' id='sku' name="sku[]" placeholder="Stock keeping unit" class="form-control" value="{{ old('sku_' . $product_data->id) }}">
	                              </div>
	                              <div class="form-group {{ $errors->has('size') ? 'has-error' : '' }}">
	                                 <label>Product Size</label>
	                                 <input type='textbox' id='size' name="size[]" placeholder="Product Size" class="form-control" value="{{ old('size' . $product_data->id, '') }}">
	                              </div>
	                              <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
	                                 <label>Product price</label>
	                                 <input type='textbox' id='price' name="price[]" placeholder="product price" class="form-control" value="{{ old('price' . $product_data->id, '') }}">
	                              </div>
	                              <div class="form-group {{ $errors->has('stock') ? 'has-error' : '' }}">
	                                 <label>Product stock</label>
	                                 <input type='textbox' id='stock' name="stock[]" placeholder="product stock" class="form-control" value="{{ old('stock' . $product_data->id, '') }}">
	                              </div>
	                          	</div>
                              </div>
                              <div class="form-group">
                              	<div class="row">
                              		<div class="col-sm-6">
                              			<input type='button' value='Add Button' id='addButton'>
                                 	</div>
                                 	<div class="col-sm-6">
                                 		<input type='button' value='Remove Button' id='removeButton'>
                                 	</div>
                              	</div>
                              </div>
                              <div class="form-group {{ $errors->has('product_color') ? 'has-error' : '' }}">
                                 <label>Product Color</label>
                                 {{ $product_data->color }}
                              </div>
                              <div class="form-group">
                                 <!-- <div id='TextBoxesGroup'>
                                    <div id="TextBoxDiv1">
                                       <label>Textbox #1 : </label><input type='textbox' id='textbox1' ><input type='textbox' id='textbox1' ><input type='textbox' id='textbox1' >
                                    </div>
                                 </div> -->
                                 <!-- <input type='button' value='Add Button' id='addButton'>
                                 <input type='button' value='Remove Button' id='removeButton'> -->
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