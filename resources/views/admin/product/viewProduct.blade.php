@extends('admin.layouts.master')
@section('title', 'View Product')
@section('content')
   <body class="hold-transition sidebar-mini">
   <!-- Site wrapper -->
      <div class="wrapper">
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-eye"></i>
               </div>
               <div class="header-title">
                  <h1>View Product</h1>
                  <small>Product list</small>
               </div>
            </section>
            @if(Session::has('fls_suc_msg_vp'))
            <div class="alert alert-success" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>Successfully!</strong> {{ Session::get('fls_suc_msg_vp') }}
            </div>
            @endif
            <span class="text-success text-center status_success_class" id="status_success" style="display: none;"><h1>Status updated successfully</h1></span>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <a href="#">
                                 <h4>View Product</h4>
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
                              <!-- <ul class="dropdown-menu exp-drop" role="menu">
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'json',escape:'false'});"> 
                                    <img src="assets/dist/img/json.png" width="24" alt="logo"> JSON</a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});">
                                    <img src="assets/dist/img/json.png" width="24" alt="logo"> JSON (ignoreColumn)</a>
                                 </li>
                                 <li><a href="#" onclick="$('#dataTableExample1').tableExport({type:'json',escape:'true'});">
                                    <img src="assets/dist/img/json.png" width="24" alt="logo"> JSON (with Escape)</a>
                                 </li>
                                 <li class="divider"></li>
                                 <li><a href="#" onclick="$('#dataTableExample1').tableExport({type:'xml',escape:'false'});">
                                    <img src="assets/dist/img/xml.png" width="24" alt="logo"> XML</a>
                                 </li>
                                 <li><a href="#" onclick="$('#dataTableExample1').tableExport({type:'sql'});"> 
                                    <img src="assets/dist/img/sql.png" width="24" alt="logo"> SQL</a>
                                 </li>
                                 <li class="divider"></li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'csv',escape:'false'});"> 
                                    <img src="assets/dist/img/csv.png" width="24" alt="logo"> CSV</a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'txt',escape:'false'});"> 
                                    <img src="assets/dist/img/txt.png" width="24" alt="logo"> TXT</a>
                                 </li>
                                 <li class="divider"></li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'excel',escape:'false'});"> 
                                    <img src="assets/dist/img/xls.png" width="24" alt="logo"> XLS</a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'doc',escape:'false'});">
                                    <img src="assets/dist/img/word.png" width="24" alt="logo"> Word</a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'powerpoint',escape:'false'});"> 
                                    <img src="assets/dist/img/ppt.png" width="24" alt="logo"> PowerPoint</a>
                                 </li>
                                 <li class="divider"></li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'png',escape:'false'});"> 
                                    <img src="assets/dist/img/png.png" width="24" alt="logo"> PNG</a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});"> 
                                    <img src="assets/dist/img/pdf.png" width="24" alt="logo"> PDF</a>
                                 </li>
                              </ul> -->
                           </div>
                           <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="table-responsive">
                              <table id="viewProductTable" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>Sr. No.</th>
                                       <th>Category</th>
                                       <th>Title</th>
                                       <th>Actual Cost</th>
                                       <th>Discount</th>
                                       <th>Cost after discount</th>
                                       <th>Code</th>
                                       <th>Color</th>
                                       <th>Description</th>
                                       <th>Image</th>
                                       <th>Status</th>
                                       <th>Created At</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 	@if(!empty($viewProduct))
                                 	@foreach($viewProduct as $vp)
                                 	<tr>
                                 	   <td>{{$loop->iteration}}</td>
                                       <td>{{ $vp->categoryId }}</td>
                                 	   <td>{{ $vp->name }}</td>
                                 	   <td>{{ $vp->actualPrice }}</td>
                                 	   <td>{{ $vp->discount }}</td>
                                 	   <td>{{ $vp->price }}</td>
                                 	   <td>{{ $vp->code }}</td>
                                 	   <td>{{ $vp->color }}</td>
                                 	   <td>{{ $vp->desciption }}</td>
                                 	   <td>@if(!empty($vp->img))
                                 	   	<img src="{{ url('uploads/products/'.$vp->img) }}" class="img-circle" alt="{{ $vp->name }} Image" width="50" height="50">
                                 	   	@else
                                 	   	<span class="label-custom label label-danger">Image Not Available</span>
                                 	   	@endif
                                 	   </td>
                                       <td>
                                          <input data-id="{{$vp->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $vp->status ? 'checked' : '' }}>
                                          
                                       </td>
                                 	   <td>{{ $vp->created_at }}</td>
                                 	   
                                 	   
                                 	   <td>
                                          <a href="{{ url('admin/addImages/'.$vp->id) }}" class="btn btn-add btn-sm"><i class="fa fa-plus-square"></i></a>
                                 	   	<a href="{{ url('admin/editProduct/'.$vp->id) }}" class="btn btn-add btn-sm"><i class="fa fa-pencil"></i></a>
                                 	      <a href="{{ url('admin/addAttribute/'.$vp->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-plus"></i></a>
                                 	      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteProduct"><i class="fa fa-trash-o"></i> </button>
                                 	   </td>
                                 	</tr>
                                 	<!-- Customer Modal2 -->
                                 	<div class="modal fade" id="deleteProduct" tabindex="-1" role="dialog" aria-hidden="true">
                                 	   <div class="modal-dialog">
                                 	      <div class="modal-content">
                                 	         <div class="modal-header modal-header-primary">
                                 	            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                 	            <h3><i class="fa fa-user m-r-5"></i> Delete Product</h3>
                                 	         </div>
                                 	         <div class="modal-body">
                                 	            <div class="row">
                                 	               <div class="col-md-12">
                                 	                  <form class="form-horizontal">
                                 	                     <fieldset>
                                 	                        <div class="col-md-12 form-group user-form-group">
                                 	                           <label class="control-label">Delete Customer</label>
                                 	                           <div class="pull-right">
                                 	                              <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">NO</button>
                                 	                              <!-- <button type="submit" >button> -->
                                 	                              	<a href="{{ url('admin/deleteProduct/'.$vp->id) }}" class="btn btn-add btn-sm">YES</a>
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
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
               <!-- Modal -->    
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         
      </div>
      <!-- ./wrapper -->
@endsection