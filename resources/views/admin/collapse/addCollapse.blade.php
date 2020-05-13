@extends('admin.layouts.master')
@section('title', 'Add collapse data')
@section('content')
<body class="hold-transition sidebar-mini">
   <!-- Site wrapper -->
   <div class="wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <section class="content-header">
            <div class="header-title">
               <h1>Add collapse data</h1>
            </div>
         </section>
         <!-- Main content -->
         <section class="content">
            <div class="row">
               <!-- Form controls -->
               <div class="col-sm-12">
                  <div class="panel panel-bd">
                     <div class="panel-heading">
                        <div class="btn-group" id="buttonlist"> 
                           <a class="btn btn-add " href="{{ url('admin/viewCollapse') }}"> 
                           <i class="fa fa-list"></i>  collapse data List </a>  
                        </div>
                     </div>
                     <div class="panel-body">
                        <form action="{{ url('admin/addCollapse/'.$id) }}" method="POST">
                           @csrf
                           <div id="subcontentGroup">

                              <div id="subcontentDiv">
                                 <div class="form-group">
                                    <label>Title</label>
                                    <div class="input-group {{ $errors->has('subcontentTitle') ? 'has-error' : '' }}">
                                       <input type="text" class="form-control" name="subcontentTitle[]" id="subcontentTitle" placeholder="Enter Page title" required value="{{old('subcontentTitle')}}">
                                       <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                       <span class="text-danger">{{ $errors->first('subcontentTitle') }}</span>      
                                    </div>

                                 </div>
                                 <div class="form-group">
                                    <label>Description</label>
                                    <div class="input-group {{ $errors->has('subcontentDis') ? 'has-error' : '' }}">
                                       <textarea class="form-control" name="subcontentDis[]" id="subcontentDis"></textarea>
                                       <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                       <span class="text-danger">{{ $errors->first('subcontentTitle') }}</span>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <div class="row">
                                       <div class="col-sm-3">
                                          <button type="button" class="btn btn-success pull-left" id="add">Add Fields</button>
                                       </div>
                                       <div class="col-sm-3">
                                          <button type="reset" class="btn btn-danger pull-right">Reset</button>
                                       </div>
                                       <div class="col-sm-3">
                                          <button type="submit" class="btn btn-info pull-left">Save</button>
                                       </div>
                                       <div class="col-sm-3">
                                          <button type="button" class="btn btn-warning pull-right" id="remove">Remove Fields</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
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