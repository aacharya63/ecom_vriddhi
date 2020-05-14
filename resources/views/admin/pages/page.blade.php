@extends('admin.layouts.master')
@section('title', 'All Pages')
@section('content')
<body class="hold-transition sidebar-mini">
   <!-- Site wrapper -->
   <div class="wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <section class="content-header">
            <div class="header-title">
               <h1>All Page</h1>
            </div>
         </section>
         <span class="text-success text-center status_success_class" id="status_success_page" style="display: none;">
            <h1>Status updated successfully</h1>
         </span>
         <!-- Main content -->
         <section class="content">
            <div class="row">
               <!-- Form controls -->
               <div class="col-sm-12">
                  <div class="panel panel-default panel-table">
                     <div class="panel-heading">
                        <div class="row">
                           <div class="col col-xs-6">
                              <h3 class="panel-title">Page Created</h3>
                           </div>
                           <div class="col col-xs-6 text-right">
                              <a href="{{ url('admin/page/create')}}" class="btn btn-sm btn-primary btn-create"><b>+</b> Add new page</a>
                              
                           </div>
                        </div>
                     </div>
                     <div class="panel-body">
                        <div class="table-responsive">
                           <table class="table table-bordered table-striped table-hover" id="tablePage">
                              <thead>
                                 
                                 <tr>
                                    <th>Sr No.</th>
                                    <th>Header Image</th>
                                    <th>Title</th>
                                    <th>Last Update</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                 </tr>
                              </thead>
                              @if(!empty($frontpage_data))
                              @foreach($frontpage_data as $fd)
                              <tr>
                                 <td>{{ $loop->iteration }}</td>
                                 <td>@if(!empty($fd->header_img))
                                    <img src="{{ url('uploads/frontPages/'.$fd->header_img) }}" class="img-circle" alt="{{ $fd->title }} Image" width="50" height="50">
                                    @else
                                    <span class="label-custom label label-danger">Image Not Available</span>
                                    @endif
                                 </td>
                                 <td><a href="{{ route('page.show',$fd->id) }}" target="_BLANK">{{ $fd->title }}</a></td>
                                 <td>{{ $fd->updated_at }}</td>
                                 <td>
                                    <input data-id="{{$fd->id}}" class="toggle-class-page" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" data-size="mini" {{ $fd->status ? 'checked' : '' }}>
                                 </td>
                                 <td>
                                    <a class="btn btn-info btn-sm" href="{{ route('page.show',$fd->id) }}" data-toggle="tooltip" title="Show Data"><span class="glyphicon glyphicon-eye-open"></span></a>
                                    <a class="btn btn-primary btn-sm" href="{{ route('page.edit',$fd->id) }}" data-toggle="tooltip" title="Edit Record"><span class="glyphicon glyphicon-edit"></span></a>
                                    <a href="{{ url('admin/addCollapse/'.$fd->id) }}" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Add Collapsible content on page" style="display: none;"><span class="glyphicon glyphicon-plus"></span></a>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Delete The Record"><span data-toggle="modal" data-target="#deletePage"><span class="glyphicon glyphicon-remove"></span></span></button>
                                 </td>
                                 <!-- delete Modal -->
                                 <div class="modal fade" id="deletePage" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog">
                                       <div class="modal-content">
                                          <div class="modal-header modal-header-primary">
                                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                             <h3> Delete <span class="label label-primary">{{ $fd->title }}</span></h3>
                                          </div>
                                          <div class="modal-body">
                                             <div class="row">
                                                <div class="col-md-12">
                                                   <!-- ccccc -->
                                                   <form action="{{ route('page.destroy',$fd->id) }}" method="POST">
                                                      @csrf
                                                      @method('DELETE')
                                                      <div class="col-md-12 form-group user-form-group">
                                                         <label class="control-label">Do you rally want to delete this record</label>
                                                         <div class="pull-right">
                                                         </div>
                                                      </div>
                                                   </form>
                                                   <!-- ddddddd -->
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
                                                   <button type="submit" class="btn btn-success btn-sm">Yes, I confirm</button>
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
                                 <h1>Page not found</h1>
                                 @endif
                           </table>
                        </div>
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