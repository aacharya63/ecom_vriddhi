@extends('admin.layouts.master')
@section('title', 'View Blogs')
@section('content')
   <body class="hold-transition sidebar-mini">
   <!-- Site wrapper -->
      <div class="wrapper">
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               
               <div class="header-title">
                  <h1>View Blogs</h1>
                  
               </div>
            </section>
            
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <a href="#">
                                 <h4>View Blogs</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">

                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="btn-group">
                              <div class="buttonexport" id="buttonlist"> 
                                 <a class="btn btn-add" href="{{ url('admin/addBlog') }}"> <i class="fa fa-plus"></i> Add new Blog
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
                                       <th>URL</th>
                                       <th>Slug</th>
                                       <th>Discription</th>
                                       <th>Image</th>
                                       <th>Created At</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 	@if(!empty($blog_data))
                                 	@foreach($blog_data as $bd)
                                 	<tr>
                                 	   <td>{{$loop->iteration}}</td>
                                       <td><a href="http://{{ $bd->url }}" target="_BLANK">{{ $bd->title }}</a></td>
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
                                 	            <h3>Delete <span class="label label-primary">{{ $bd->title }}</span></h3>
                                 	         </div>
                                 	         <div class="modal-body">
                                 	            <div class="row">
                                 	               <div class="col-md-12">
                                 	                  <form class="form-horizontal">
                                 	                     <fieldset>
                                 	                        <div class="col-md-12 form-group user-form-group">
                                 	                           <label class="control-label">Do you rally want to delete this record</label>
                                 	                           
                                 	                        </div>
                                 	                     </fieldset>
                                 	                  </form>
                                 	               </div>
                                 	            </div>
                                 	         </div>
                                 	         <div class="modal-footer">
                                 	            <div class="col-xs-6 text-left">
        <div class="previous">
          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Go back</button>
        </div>
    </div>
    <div class="col-xs-6 text-right">   
        <div class="next">
         <a href="{{ url('admin/deleteBlog/'.$get_id) }}" class="btn btn-add btn-sm">Yes, I confirm</a>
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