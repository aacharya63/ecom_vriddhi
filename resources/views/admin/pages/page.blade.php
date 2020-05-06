@extends('admin.layouts.master')
@section('title', 'All Pages')
@section('content')
<style type="text/css">
  .tox-tinymce{
    height: 900px !important;
  }
</style>
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
               <h1>All Page</h1>
            </div>
         </section>
         <span class="text-success text-center status_success_class" id="status_success_page" style="display: none;"><h1>Status updated successfully</h1></span>
         
         <!-- Main content -->
         <section class="content">
            <div class="row">
               <!-- Form controls -->
               <div class="col-sm-12">
                  <div class="panel panel-bd lobidrag">
                     <div class="panel-body">
                        <!-- gggggggggggg -->
                        <table class="table table-striped custab">
                           <thead>
                              <a href="{{ url('admin/page/create')}}" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new page</a>
                              <tr>
                                 <th>Sr No.</th>
                                 <th>Title</th>
                                 <th>Description</th>
                                 <th>Slug</th>
                                 <th>Link URl</th>
                                 <th>Header Image</th>
                                 <th>Status</th>
                                 <th class="text-center">Action</th>
                              </tr>
                           </thead>
                           @if(!empty($frontpage_data))
                           @foreach($frontpage_data as $fd)
                           <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $fd->title }}</td>
                              <td><a data-toggle="modal" data-target="#{{$fd->id}}"> {{ str_limit($fd->description, $limit = 30, $end = '...') }}</a></td>
                              <td>{{ $fd->slug }}</td>
                              <td>{{ $fd->link_url }}</td>
                              <td>{{ $fd->header_img }}</td>
                              <td>
                                <input data-id="{{$fd->id}}" class="toggle-class-page" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $fd->status ? 'checked' : '' }}>
                              </td>
                              <!-- <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td> -->
                              <td>
                              <form action="{{ route('page.destroy',$fd->id) }}" method="POST">
                                 
                                                  <a class="btn btn-info btn-xs" href="{{ route('page.show',$fd->id) }}"><span class="glyphicon glyphicon-eye-open"></span>Show</a>
                                  
                                                  <a class="btn btn-primary btn-xs" href="{{ route('page.edit',$fd->id) }}"><span class="glyphicon glyphicon-edit"></span>Edit</a>
                                 
                                                  @csrf
                                                  @method('DELETE')
                                    
                                                  <button type="submit" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span>Delete</button>
                                              </form>
                                            </td>
                           </tr>
                           <!-- Modal -->
                           <div id="{{ $fd->id }}" class="modal fade" role="dialog">
                             <div class="modal-dialog">

                               <!-- Modal content-->
                               <div class="modal-content">
                                 <div class="modal-header">
                                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                                   <h4 class="modal-title">{{ $fd->title }}</h4>
                                 </div>
                                 <div class="modal-body">
                                  <div class="row"> 
                                   {!!html_entity_decode($fd->description)!!}
                                 </div>
                                 </div>

                                 <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                 </div>
                               </div>

                             </div>
                           </div>
                           @endforeach
                           @else
                           <h1>Page not found</h1>
                           @endif
                           

                        </table>
                        <!-- ddddddddddd -->
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