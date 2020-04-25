@extends('admin.layouts.master')
@section('title', 'View Banner')
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
                  <h1>View Banner</h1>
                  <small>Banner list</small>
               </div>
            </section>
            @if(Session::has('fls_msg_suc_ban'))
            <div class="alert alert-success" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>Successfully!</strong> {{ Session::get('fls_msg_suc_ban') }}
            </div>
            @endif
            @if(Session::has('fls_suc_msg_db'))
            <div class="alert alert-success" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>Successfully!</strong> {{ Session::get('fls_suc_msg_db') }}
            </div>
            @endif
            <span class="text-success text-center status_success_class" id="status_success_ban" style="display: none;"><h1>Status updated successfully</h1></span>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <a href="#">
                                 <h4>View Banner</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">

                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="btn-group">
                              <div class="buttonexport" id="buttonlist"> 
                                 <a class="btn btn-add" href="{{ url('admin/addBanner') }}"> <i class="fa fa-plus"></i> Add Banner
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
                              <table id="viewBannerTable" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>Sr. No.</th>
                                       <th>Title</th>
                                       <th>Text Style</th>
                                       <th>Sort Order</th>
                                       <th>Content</th>
                                       <th>URL</th>
                                       <th>Status</th>
                                       <th>Image</th>
                                       <th>Created</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 	@if(!empty($banner_data))
                                    
                                 	@foreach($banner_data as $bd)
                                 	<tr>
                                 	   <td>{{$loop->iteration}}</td>
                                       <td>{{ $bd->name }}</td>
                                 	   <td>{{ $bd->text_style }}</td>
                                 	   <td>{{ $bd->sort_order }}</td>
                                 	   <td>{{ $bd->content }}</td>
                                       <td><a href="{{ $bd->link }}" target="_BLANK"> {{ $bd->link }} </a></td>

                                 	   <td>
                                          <input data-id="{{$bd->id}}" class="toggle-class-banner" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $bd->status ? 'checked' : '' }}>
                                       </td>
                                       <td>@if(!empty($bd->img))
                                          <img src="{{ url('uploads/banner/'.$bd->img) }}" class="img-circle" alt="{{ $bd->name }} Image" width="50" height="50">
                                          @else
                                          <span class="label-custom label label-danger">Image Not Available</span>
                                          @endif
                                       </td>
                                 	   <td>{{ $bd->created_at }}</td>
                                 	   
                                 	   
                                 	   <td>
                                 	   	  <a href="{{ url('admin/editBanner/'.$bd->id) }}" class="btn btn-add btn-sm"><i class="fa fa-pencil"></i></a>
                                 	      
                                 	      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteCategory"><i class="fa fa-trash-o"></i> </button>
                                 	   </td>
                                 	</tr>
                                 	<!-- Customer Modal2 -->
                                 	<div class="modal fade" id="deleteCategory" tabindex="-1" role="dialog" aria-hidden="true">
                                 	   <div class="modal-dialog">
                                 	      <div class="modal-content">
                                 	         <div class="modal-header modal-header-primary">
                                 	            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                 	            <h3><i class="fa fa-user m-r-5"></i> Delete Banner</h3>
                                 	         </div>
                                 	         <div class="modal-body">
                                 	            <div class="row">
                                 	               <div class="col-md-12">
                                 	                  <form class="form-horizontal">
                                 	                     <fieldset>
                                 	                        <div class="col-md-12 form-group user-form-group">
                                 	                           <label class="control-label">Delete Banner</label>
                                 	                           <div class="pull-right">
                                 	                              <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">NO</button>
                                 	                              <!-- <button type="submit" >button> -->
                                 	                              	<a href="{{ url('admin/deleteBanner/'.$bd->id) }}" class="btn btn-add btn-sm">YES</a>
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