@extends('admin.layouts.master')
@section('title', 'Edit Profile')
@section('content')
   <body class="hold-transition sidebar-mini">
   <!-- Site wrapper -->
      <div class="wrapper">
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               
               <div class="header-title">
                  <h1>Edit Profile</h1>
                  <small>Edit Profile</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        
                        <div class="panel-body">
                          @if(Session::has('fls_suc_msg_ep'))
                          <div class="alert alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Successfully!</strong> {{ Session::get('fls_suc_msg_ep') }}
                          </div>
                          @endif
                           <form action="{{ url('admin/adminEditProfile/'.$apd->id) }}" method="post" enctype="multipart/form-data">
                           	@csrf
                           	<div class="col-sm-6">
                              
                              <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                 <label> Name</label>
                                 <input type="text" class="form-control" name="name" id="name" value="{{ $apd->name }}" required>
                                 <span class="text-danger">{{ $errors->first('name') }}</span>
                              </div>
                              <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                 <label>Email</label>
                                 <input type="email" class="form-control" name="email" value="{{ $apd->email }}" required>
                                 <span class="text-danger">{{ $errors->first('email') }}</span>
                              </div>
                              
                              
                            </div>
                           	<div class="col-sm-6">
                              <div class="form-group {{ $errors->has('mobile') ? 'has-error' : '' }}">
                                 <label>Mobile</label>
                                 <input type="tel" class="form-control" name="mobile" value="{{ $apd->mobile }}" required>
                                 <span class="text-danger">{{ $errors->first('mobile') }}</span>
                              </div>
                              <div class="row">
                                
                                <div class="col-sm-6">
                                  <div class="form-group {{ $errors->has('profile_img') ? 'has-error' : '' }}">
                                    <label>Profile Image upload</label>
                                    <input type="file" name="profile_img" id="profile_img" class="form-control">
                                    <input type="hidden" name="current_img" id="current_img" class="form-control" value="{{ $apd->img }}">
                                    
                                    <span class="text-danger">{{ $errors->first('profile_img') }}</span>
                                 </div>
                                </div>
                                <div class="col-sm-4">
                                  @if(!empty($apd->img))
                                  <img src="{{ url('uploads/profile/'.$apd->img) }}" class="img-circle" alt="" width="50" height="50" style="margin-top: 10%">
                                  @endif
                                </div>
                               </div> 
                            </div>
                          <div class="reset-button">
                             <button type="reset" class="btn btn-warning">Reset</button>
                             <button type="submit" class="btn btn-success">Update Profile</button>
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