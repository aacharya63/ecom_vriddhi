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
         <!-- view Attribute -->
         <section class="content">
            <div class="row">
               <div class="col-sm-12">
                  <div class="panel panel-bd lobidrag">
                     <div class="panel-heading">
                        <div class="btn-group" id="buttonexport">
                           <a href="#">
                              <h4>View Product Attributes</h4>
                           </a>
                        </div>
                     </div>
                     <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                        <div class="btn-group">
                           <div class="buttonexport" id="buttonlist"> 
                              <a class="btn btn-add" href="{{ url('admin/addProduct') }}"> <i class="fa fa-plus"></i> Add Product
                              </a>  
                           </div>
                           <button class="btn btn-exp btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Table Data</button>
                           
                        </div>
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                        <div class="table-responsive">
                           <table id="viewProductTable" class="table table-bordered table-striped table-hover">
                           	<form action="{{ url('admin/editAttribute/'.$product_data->id) }}" method="post" enctype="multipart/form-data">
                           	@csrf
                              <thead>
                                 <tr class="info">
                                    <th>Sr. No.</th>
                                    <th>Category ID</th>
                                    <th>Product ID</th>
                                    <th>SKU</th>
                                    <th>Size</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 @if(!empty($product_data))
                                 @foreach($product_data['product_attributes'] as $pd)

                                 <tr>
                                 	<td style="display: none;">
                                 		<input type="text" name="attr[]" value="{{ $pd->id }}">
                                 	</td>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{ $pd->id }}</td>
                                    <td>{{ $pd->product_id }}</td>
                                    <td><input type="number" name="sku[]" class="form-control" value="{{ $pd->sku }}"></td>
                                    <td><input type="number" name="size[]" class="form-control" value="{{ $pd->size }}"></td>
                                    <td><input type="text" name="price[]" class="form-control" value="{{ $pd->price }}"></td>
                                    <td><input type="number" name="stock[]" class="form-control" value="{{ $pd->stock }}"></td>
                                    <td>{{ $pd->created_at }}</td>
                                    <td>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteProductAttribute"><i class="fa fa-trash-o"></i> </button>
                                    <input type="submit" class="btn btn-success btn-sm" value="update">
                                    </td>
                                 </tr>
                                 <!-- Customer Modal2 -->
                                 <div class="modal fade" id="deleteProductAttribute" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog">
                                       <div class="modal-content">
                                          <div class="modal-header modal-header-primary">
                                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                             <h3><i class="fa fa-user m-r-5"></i> Delete Product Attribute</h3>
                                          </div>
                                          <div class="modal-body">
                                             <div class="row">
                                                <div class="col-md-12">
                                                   <form class="form-horizontal">
                                                      <fieldset>
                                                         <div class="col-md-12 form-group user-form-group">
                                                            <label class="control-label">Delete Product Attribute</label>
                                                            <div class="pull-right">
                                                               <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">NO</button>
                                                               <!-- <button type="submit" >button> -->
                                                               <a href="{{ url('admin/deleteAttribute/'.$pd->id) }}" class="btn btn-add btn-sm">YES</a>
                                                            </div>
                                                         </div>
                                                      </fieldset>
                                                   </form>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="modal-footer">
                                             <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                                          </div>
                                       </div>
                                       <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                 </div>
                                 <!-- /.modal -->
                                 @endforeach
                                 @else
                                 <h1 class="text-danger">Data Not Available</h1>
                                 @endif
                              </tbody>
                          	</form>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Modal -->    
         </section>
         <!-- va Ends -->
         <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
   </div>
   <!-- ./wrapper -->
   @endsection