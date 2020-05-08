@extends('admin.layouts.master')
@section('title', 'View Category')
@section('content')
   <body class="hold-transition sidebar-mini">
   <!-- Site wrapper -->
      <div class="wrapper">
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               
               <div class="header-title">
                  <h1>View Category</h1>
                  
               </div>
            </section>
            @if(Session::has('fls_suc_msg_cat'))
            <div class="alert alert-success" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>Successfully!</strong> {{ Session::get('fls_suc_msg_cat') }}
            </div>
            @endif
            <span class="text-success text-center status_success_class" id="status_success_cat" style="display: none;"><h1>Status updated successfully</h1></span>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <a href="#">
                                 <h4>View Category</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">

                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="btn-group">
                              <div class="buttonexport" id="buttonlist"> 
                                 <a class="btn btn-add" href="{{ url('admin/addCategory') }}"> <i class="fa fa-plus"></i> Add Category
                                 </a>  
                              </div>
                              
                           </div>
                           <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="table-responsive">
                              <table id="viewProductTable" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>Sr. No.</th>
                                       <th>Title</th>
                                       <th>Discription</th>
                                       <th>Status</th>
                                       <th>Created At</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 	@if(!empty($category))
                                 	@foreach($category as $cat)
                                 	<tr>
                                 	   <td>{{$loop->iteration}}</td>
                                       <td><a href="http://{{ $cat->url }}" target="_BLANK"> {{ $cat->name }}</a></td>
                                 	   <td>{{ \Illuminate\Support\Str::limit($cat->description, 20, $end='...') }}</td>
                                 	   <td>
                                          <input data-id="{{$cat->id}}" class="toggle-class-category" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" data-size="small" {{ $cat->status ? 'checked' : '' }}>
                                          
                                       </td>
                                 	   <td>{{ $cat->created_at }}</td>
                                 	   
                                 	   
                                 	   <td>
                                 	   	  <a href="{{ url('admin/editCategory/'.$cat->id) }}" class="btn btn-add btn-sm"><i class="fa fa-pencil"></i></a>
                                 	      
                                 	      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteCategory"><i class="fa fa-trash-o"></i> </button>
                                 	   </td>
                                 	</tr>
                                 	<!-- Customer Modal2 -->
                                 	<div class="modal fade" id="deleteCategory" tabindex="-1" role="dialog" aria-hidden="true">
                                 	   <div class="modal-dialog">
                                 	      <div class="modal-content">
                                 	         <div class="modal-header modal-header-primary">
                                 	            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                 	            <h3> Delete Category</h3>
                                 	         </div>
                                 	         <div class="modal-body">
                                 	            <div class="row">
                                 	               <div class="col-md-12">
                                 	                  <form class="form-horizontal">
                                 	                     <fieldset>
                                 	                        <div class="col-md-12 form-group user-form-group">
                                 	                           <label class="control-label">Delete Category</label>
                                 	                           <div class="pull-right">
                                 	                              
                                 	                              <!-- <button type="submit" >button> -->
                                 	                              	
                                 	                           </div>
                                 	                        </div>
                                 	                     </fieldset>
                                 	                  </form>
                                 	               </div>
                                 	            </div>
                                 	         </div>
                                 	         <div class="modal-footer">
                                 	            <div class="col-xs-6 text-left">
        <div class="previous">
          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Go Back</button>
        </div>
    </div>
    <div class="col-xs-6 text-right">   
        <div class="next">
         <a href="{{ url('admin/deleteCategory/'.$cat->id) }}" class="btn btn-add btn-sm">YES</a>
        </div>
    </div>
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