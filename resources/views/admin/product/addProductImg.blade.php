@extends('admin.layouts.master')
@section('title', 'Add Product Images')
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
               <h1>Add Product Images</h1>
               <small>Product Images list</small>
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
                           <i class="fa fa-list"></i>  Product Images List </a>  
                        </div>
                     </div>
                     <div class="panel-body">
                        @if(Session::has('success_msg'))
                        <div class="alert alert-success" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                           <strong>Successfully!</strong> {{ Session::get('success_msg') }}
                        </div>
                        @endif
                        <form action="{{ url('admin/addImages/'.$product_data->id) }}" method="post" enctype="multipart/form-data">
                           @csrf
                           <input type="hidden" name="hidden_product_id" value="{{ $product_data->id }}">
                           <div class="col-sm-6">
                              <div class="form-group {{ $errors->has('product_name') ? 'has-error' : '' }}">
                                 <label> Name</label>
                                 {{ $product_data->name }}
                              </div>
                              <div class="form-group {{ $errors->has('product_code') ? 'has-error' : '' }}">
                                 <label>Product Code</label>
                                 {{ $product_data->code }}
                              </div>
                              <div class="form-group {{ $errors->has('product_code') ? 'has-error' : '' }}">
                                 <label>Product Code</label>
                                 {{ $product_data->code }}
                              </div>
                              <div class="form-group {{ $errors->has('product_code') ? 'has-error' : '' }}">
                                 <label>Product Image</label>
                                 <input type="file" name="img[]" multiple="multiple">
                              </div>
                           </div>
                           <div class="col-sm-6">
                              
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
         <!-- view Product Images -->
         <section class="content">
            <div class="row">
               <div class="col-sm-12">
                  <div class="panel panel-bd lobidrag">
                     <div class="panel-heading">
                        <div class="btn-group" id="buttonexport">
                           <a href="#">
                              <h4>View Product Images</h4>
                           </a>
                        </div>
                     </div>
                     <div class="panel-body">
                        
                        <div class="table-responsive">
                           <table id="viewProductTable" class="table table-bordered table-striped table-hover">
                              <form action="{{ url('admin/editAttribute/'.$product_data->id) }}" method="post" enctype="multipart/form-data">
                              @csrf
                              <thead>
                                 <tr class="info">
                                    <th>Sr. No.</th>
                                    <th>Product ID</th>
                                    <th>Image</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 @if(!empty($product_img))
                                 @foreach($product_img as $pd)

                                 <tr>
                                    <td style="display: none;">
                                       <input type="text" name="attr[]" value="{{ $pd->id }}">
                                    </td>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{ $pd->product_id }}</td>
                                    
                                    <td><img src="{{ url('uploads/products/'.$pd->image) }}" class="img-circle" width="45" height="45" alt="{{ $pd->product_id }}"></td>
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
                                             <h3><i class="fa fa-user m-r-5"></i> Delete Product Image</h3>
                                          </div>
                                          <div class="modal-body">
                                             <div class="row">
                                                <div class="col-md-12">
                                                   <form class="form-horizontal">
                                                      <fieldset>
                                                         <div class="col-md-12 form-group user-form-group">
                                                            <label class="control-label">Delete Product Image</label>
                                                            <div class="pull-right">
                                                               <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">NO</button>
                                                               <!-- <button type="submit" >button> -->
                                                               <a href="{{ url('admin/delImages/'.$pd->id) }}" class="btn btn-add btn-sm">YES</a>
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