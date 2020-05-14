@extends('admin.layouts.master')
@section('title', 'Add Banner')
@section('content')
   <body class="hold-transition sidebar-mini">
   <!-- Site wrapper -->
      <div class="wrapper">
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-title">
                  <h1>Add Banner</h1>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd">
                        <div class="panel-heading">
                           
                        </div>
                        <div class="panel-body">
                          @if(Session::has('flsMsgSucBan'))
                          <div class="alert alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Successfully!</strong> {{ Session::get('flsMsgSucBan') }}
                          </div>
                          @endif
                           <form action="{{ url('admin/addBanner') }}" method="post" enctype="multipart/form-data">
                           	@csrf
                           	<!-- hhhhhhh -->
                            <div class="form-group">
                              <h2 class="heading">Banner Details</h2>
                              <div class="controls {{ $errors->has('banner_name') ? 'has-error' : '' }}">
                                 <label>Banner name</label>
                                 <input type="text" class="floatLabel" name="banner_name" id="banner_name" placeholder="Enter Banner Name" required>
                                 <span class="text-danger">{{ $errors->first('banner_name') }}</span>
                              </div>
                              <div class="controls {{ $errors->has('text_style') ? 'has-error' : '' }}">
                                 <label>Text Style</label>
                                 <input type="text" class="floatLabel" name="text_style" id="text_style" placeholder="Enter text style" required>
                                 <span class="text-danger">{{ $errors->first('text_style') }}</span>
                              </div>
                           </div>
                           <div class="controls {{ $errors->has('banner_content') ? 'has-error' : '' }}">
                              <label>Banner content</label>
                              <textarea class="floatLabel" name="banner_content" id="banner_content"></textarea>
                              <span class="text-danger">{{ $errors->first('banner_content') }}</span>
                           </div>
                           <div class="controls {{ $errors->has('banner_link') ? 'has-error' : '' }}">
                              <label>Banner link</label>
                              <input type="text" class="floatLabel" name="banner_link" id="banner_link" placeholder="Enter Banner Link" required>
                              <span class="text-danger">{{ $errors->first('banner_link') }}</span>
                           </div>
                           <div class="controls {{ $errors->has('sort_order') ? 'has-error' : '' }}">
                             <label>Sort Order</label>
                             <input type="text" class="floatLabel" name="sort_order" id="sort_order" required="required" placeholder="sort order" />
                             <span class="text-danger">{{ $errors->first('sort_order') }}</span>
                           </div>
                           <div class="controls {{ $errors->has('banner_img') ? 'has-error' : '' }}">
                             <label>Banner image</label>
                             <input type="file" name="banner_img" id="banner_img" class="floatLabel">
                             <span class="text-danger">{{ $errors->first('banner_img') }}</span>
                           </div>
                           <div class="form-group">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="controls">
                                       <button style="background-color: red !important" type="reset">Reset Form</button>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="controls">
                                       <button>Submit</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                            <!-- iiiiiiiiiii -->
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