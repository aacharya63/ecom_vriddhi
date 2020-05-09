@extends('admin.layouts.master')
@section('title', 'Edit Page')
@section('content')
<body class="hold-transition sidebar-mini">
   <!-- Site wrapper -->
   <div class="wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <section class="content-header">
            <div class="header-title">
               <h1>Edit Page</h1>
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
                           <a class="btn btn-add " href="{{ url('admin/page') }}"> 
                           <i class="fa fa-eye"></i> View Page </a>  
                        </div>
                     </div>
                     <div class="panel-body">
                        <form action="{{ route('page.update',$fp_data->id) }}" method="post" enctype="multipart/form-data">
                           @csrf
                           @method('put')
                           <div class="form-group">
                              <div class="col-xs-6">
                                 <label>Page title</label>
                                 <div class="input-group {{ $errors->has('title') ? 'has-error' : '' }}">
                                    <input type="text" name="title" id="title" class="form-control" value="{{ $fp_data->title }}">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                 </div>
                                 <br>
                                 <label>Slug</label>
                                 <div class="input-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                                    <input type="text" class="form-control" name="slug" id="slug" value="{{ $fp_data->slug }}" placeholder="" required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                    <span class="text-danger">{{ $errors->first('slug') }}</span>
                                 </div>
                                 <hr>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-xs-6">
                                 <label>Page Link URL</label>
                                 <div class="input-group {{ $errors->has('url') ? 'has-error' : '' }}">
                                    <input type="text" class="form-control" name="url" id="url" placeholder="Enter Page Link URL" required value="{{ $fp_data->link_url }}">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                    <span class="text-danger">{{ $errors->first('url') }}</span>
                                 </div>
                                 <br>
                                 <div class="row">
                                  <div class="col-xs-8">
                                    <label>Page header image</label>
                                    <div class="input-group {{ $errors->has('img') ? 'has-error' : '' }}">
                                       <input type="file" name="img" id="img" class="form-control">
                                       <input type="hidden" name="current_img" id="current_img" class="form-control" value="{{ $fp_data->header_img }}">
                                       <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                       <span class="text-danger">{{ $errors->first('img') }}</span>
                                    </div>
                                  </div>
                                  <div class="col-xs-4">
                                    @if(!empty($fp_data->header_img))
                                    <img src="{{ url('uploads/frontPages/'.$fp_data->header_img) }}" class="img-circle" alt="" width="50" height="50">
                                    @endif
                                 </div>
                                </div>
                                 
                                 <hr>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-xs-6">
                                 <label>Page Description</label>
                                 <div class="input-group {{ $errors->has('description') ? 'has-error' : '' }}">
                                    <textarea class="form-control" name="description" id="editPageTextarea">{{ $fp_data->description }}</textarea>
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                 </div>
                                 <br>
                                 <label>Author Name</label>
                                 <div class="input-group">
                                    <input type="text" class="form-control" name="author" id="author" placeholder="input author name" value="{{ $fp_data->author }}" />
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                 </div>
                                 <hr>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-xs-6">
                                 <label>SEO Description</label>
                                 <div class="input-group">
                                    <textarea class="form-control" name="seo_description" id="seo_description">{{ $fp_data->seo_description }}</textarea>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                 </div>
                                 <br>
                                 <label>Keywords</label>
                                 <div class="input-group">
                                    <input type="text" class="form-control" name="Keyword" id="Keyword" placeholder="input Keywords" value="{{ $fp_data->keywords }}" />
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                 </div>
                                 <hr>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-xs-6">
                                 <label>OG Title</label>
                                 <div class="input-group">
                                    <input type="text" class="form-control" name="og_title" id="og_title" placeholder="input OG title" value="{{ $fp_data->og_title }}" />
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                 </div>
                                 <br>
                                 <label>OG Description</label>
                                 <div class="input-group">
                                    <textarea class="form-control" name="og_description" id="og_description">{{$fp_data->og_description}}</textarea>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                 </div>
                                 <hr>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-xs-6">
                                 <label>OG Type</label>
                                 <div class="input-group">
                                    <input type="text" class="form-control" name="og_type" id="og_type" placeholder="input OG Type" value="{{$fp_data->og_type}}" />
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                 </div>
                                 <br>
                                 <label>OG URL</label>
                                 <div class="input-group">
                                    <input type="text" class="form-control" name="og_url" id="og_url" placeholder="input OG URL" value="{{$fp_data->og_url}}" />
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                 </div>
                                 <hr>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-xs-12">
                                 <!-- xxxxxxxx -->
                                <div class="row">
                                  <div class="col-xs-8">
                                    <label>OG Image</label>
                                    <div class="input-group {{ $errors->has('og_img') ? 'has-error' : '' }}">
                                       <input type="file" name="og_img" id="og_img" class="form-control">
                                       <input type="hidden" name="current_imgp" id="current_imgp" class="form-control" value="{{ $fp_data->og_image }}">
                                       <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                       <span class="text-danger">{{ $errors->first('og_img') }}</span>
                                    </div>
                                  </div>
                                  <div class="col-xs-4">
                                    @if(!empty($fp_data->og_image))
                                    <img src="{{ url('uploads/seo/frontPages/'.$fp_data->og_image) }}" class="img-circle" alt="" width="50" height="50">
                                    @endif
                                  </div>
                                </div>
                                <!-- fffffffffff -->
                                 <hr>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="input-group-addon">
                                 <button type="reset" class="btn btn-warning pull-left">Reset</button>
                                 <button type="submit" class="btn btn-success pull-right">Save</button>
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