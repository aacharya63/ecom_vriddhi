@extends('admin.layouts.master')
@section('title', 'Change Password')
@section('content')
   <body class="hold-transition sidebar-mini">
   <!-- Site wrapper -->
      <div class="wrapper">
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               
               <div class="header-title">
                  <h1>Change Password</h1>
                  <small>Change Password</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        
                        <div class="panel-body">
                          
                           <form action="{{ url('admin/changePassword/'.$apd->id) }}" method="post" enctype="multipart/form-data">
                           	@csrf
                           	
                              
                              <div class="form-group {{ $errors->has('current_password') ? 'has-error' : '' }}">
                                 <label> Current Password</label>
                                 <input type="password" class="form-control" name="current_password" id="current_password" required autocomplete="off">
                                 <span class="text-danger">{{ $errors->first('current_password') }}</span>
                              </div>
                              <div class="form-group {{ $errors->has('new_password') ? 'has-error' : '' }}">
                                 <label>New Password</label>
                                 <input type="password" class="form-control" name="new_password" required>
                                 <span class="text-danger">{{ $errors->first('new_password') }}</span>
                              </div>
                              <div class="form-group {{ $errors->has('new_confirm_password') ? 'has-error' : '' }}">
                                 <label>Confirm Password</label>
                                 <input type="password" class="form-control" name="new_confirm_password" required>
                                 <span class="text-danger">{{ $errors->first('new_confirm_password') }}</span>
                              </div>
                              
                            
                           	
                          <div class="reset-button">
                             <button type="reset" class="btn btn-warning">Reset</button>
                             <button type="submit" class="btn btn-success">Update Password</button>
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