@extends('admin.layouts.master')
@section('title', 'View Collapse')
@section('content')
   <body class="hold-transition sidebar-mini">
   <!-- Site wrapper -->
      <div class="wrapper">
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               
               <div class="header-title">
                  <h1>View Collapse</h1>
                  
               </div>
            </section>
            
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd">
                        
                        <div class="panel-body">

                        
                           <div class="table-responsive">
                              <table id="viewProductTable" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>Sr. No.</th>
                                       <th>Page</th>
                                       <th>Title</th>
                                       <th>Discription</th>
                                       <th>Created At</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 	@if(!empty($blog_data))
                                 	@foreach($blog_data as $bd)
                                 	<tr>
                                 	   <td>{{$loop->iteration}}</td>
                                       <td>{{ $bd->title }}</td>
                                 	   <td>{{ $bd->url }}</td>
                                 	   <td>{{ $bd->slug }}</td>
                                 	   <td>{{ $bd->description }}</td>
                                 	   <td>@if(!empty($bd->image))
                                 	   	<img src="{{ url('uploads/blogs/'.$bd->image) }}" class="img-circle" alt="{{ $bd->title }} Image" width="50" height="50">
                                 	   	@else
                                 	   	<span class="label-custom label label-danger">Image Not Available</span>
                                 	   	@endif
                                 	   </td>
                                       <td>{{ $bd->created_at }}</td>
                                 	   
                                 	   
                                 	   <td>
                                          <?php
                                          $get_id = encrypt($bd->id);
                                          ?>
                                 	   	<a href="{{ url('admin/editBlog/'.$get_id) }}" class="btn btn-add btn-sm"><i class="fa fa-pencil"></i></a>
                                 	      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteBlog"><i class="fa fa-trash-o"></i> </button>
                                 	   </td>
                                 	</tr>
                                 	<!-- Customer Modal2 -->
                                 	<div class="modal fade" id="deleteBlog" tabindex="-1" role="dialog" aria-hidden="true">
                                 	   <div class="modal-dialog">
                                 	      <div class="modal-content">
                                 	         <div class="modal-header modal-header-primary">
                                 	            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                 	            <h3><i class="fa fa-user m-r-5"></i> Delete Blog</h3>
                                 	         </div>
                                 	         <div class="modal-body">
                                 	            <div class="row">
                                 	               <div class="col-md-12">
                                 	                  <form class="form-horizontal">
                                 	                     <fieldset>
                                 	                        <div class="col-md-12 form-group user-form-group">
                                 	                           <label class="control-label">Delete blog</label>
                                 	                           <div class="pull-right">
                                 	                              <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">NO</button>
                                 	                              <!-- <button type="submit" >button> -->
                                 	                              	<a href="{{ url('admin/deleteBlog/'.$get_id) }}" class="btn btn-add btn-sm">YES</a>
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