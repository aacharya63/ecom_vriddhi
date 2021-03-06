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
                     <div class="panel-body">
                        <form action="{{ route('page.update',$fp_data->id) }}" method="post" enctype="multipart/form-data">
                           @csrf
                           @method('put')
                           <!-- ffffffff -->
                           <!--  Page Detail -->
                           <div class="form-group">
                              <h2 class="heading">Page Details</h2>
                              <div class="controls {{ $errors->has('title') ? 'has-error' : '' }}">
                                 <label>Page Title</label>
                                 <input type="text" name="title" id="title" class="floatLabel" value="{{ $fp_data->title }}">
                                 <span class="text-danger">{{ $errors->first('title') }}</span>
                              </div>
                              <div class="controls">
                                 <div class="row">
                                    <div class="col-md-11">
                                       <div class="controls {{ $errors->has('img') ? 'has-error' : '' }}">
                                          <label>Header Image</label>
                                          <input type="file" name="img" id="img" class="floatLabel">
                                          <input type="hidden" name="current_img" id="current_img" class="" value="{{ $fp_data->header_img }}">
                                          <span class="text-danger">{{ $errors->first('img') }}</span>
                                       </div>
                                    </div>
                                    <div class="col-md-1">
                                       @if(!empty($fp_data->header_img))
                                       <img src="{{ url('uploads/frontPages/'.$fp_data->header_img) }}" class="img-circle" alt="" width="50" height="50" style="margin-top: 20px">
                                       @endif
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="{{ $errors->has('description') ? 'has-error' : '' }}">
                              <label>Page Description</label>
                              <textarea class="form-control" name="description" id="editPageTextarea">{{ $fp_data->description }}</textarea>
                              <span class="text-danger">{{ $errors->first('description') }}</span>
                           </div>
                           <!--  SEO Details -->
                           <div class="form-group">
                              <h2 class="heading">SEO Details</h2>
                              <div class="controls {{ $errors->has('author') ? 'has-error' : '' }}">
                                 <label>Author Name</label>
                                 <input type="text" class="floatLabel" name="author" id="author" placeholder="input author name" value="{{ $fp_data->author }}" />
                                 <span class="text-danger">{{ $errors->first('author') }}</span>
                              </div>
                              <div class="controls {{ $errors->has('Keyword') ? 'has-error' : '' }}">
                                 <label>Keywords</label>
                                 <input type="text" class="floatLabel" name="Keyword" id="Keyword" placeholder="input Keywords" value="{{ $fp_data->keywords }}" />
                                 <span class="text-danger">{{ $errors->first('Keyword') }}</span>
                              </div>
                              <!-- ssssssssssssss -->
                              <div class="controls {{ $errors->has('seo_description') ? 'has-error' : '' }}">
                                 <label>SEO Description</label>
                                 <textarea class="form-control" name="seo_description" id="seo_description">{{ $fp_data->seo_description }}</textarea>
                                 <span class="text-danger">{{ $errors->first('seo_description') }}</span>
                              </div>
                              <div class="controls {{ $errors->has('og_title') ? 'has-error' : '' }}">
                                 <label>OG Title</label>
                                 <input type="text" class="floatLabel" name="og_title" id="og_title" placeholder="input OG title" value="{{ $fp_data->og_title }}" />
                                 <span class="text-danger">{{ $errors->first('og_title') }}</span>
                              </div>
                              <div class="controls {{ $errors->has('og_description') ? 'has-error' : '' }}">
                                 <label>OG Description</label>
                                 <textarea class="form-control" name="og_description" id="og_description">{{$fp_data->og_description}}</textarea>
                                 <span class="text-danger">{{ $errors->first('og_description') }}</span>
                              </div>
                              <div class="controls {{ $errors->has('og_type') ? 'has-error' : '' }}">
                                 <label>OG Type</label>
                                 <input type="text" class="floatLabel" name="og_type" id="og_type" placeholder="input OG Type" value="{{$fp_data->og_type}}" />
                                 <span class="text-danger">{{ $errors->first('og_type') }}</span>
                              </div>
                              <div class="controls {{ $errors->has('og_url') ? 'has-error' : '' }}">
                                 <label>OG URL</label>
                                 <input type="text" class="floatLabel" name="og_url" id="og_url" placeholder="input OG URL" value="{{$fp_data->og_url}}" />
                                 <span class="text-danger">{{ $errors->first('og_url') }}</span>
                              </div>
                              <div class="controls">
                                 <div class="row">
                                    <div class="col-md-11">
                                       <div class="controls {{ $errors->has('og_img') ? 'has-error' : '' }}">
                                          <label>OG Image</label>
                                          <input type="file" name="og_img" id="og_img" class="floatLabel">
                                          <input type="hidden" name="current_imgp" id="current_imgp" class="" value="{{ $fp_data->og_image }}">
                                          <span class="text-danger">{{ $errors->first('og_img') }}</span>
                                       </div>
                                    </div>
                                    <div class="col-md-1">
                                       @if(!empty($fp_data->og_image))
                                       <img src="{{ url('uploads/seo/frontPages/'.$fp_data->og_image) }}" class="img-circle" alt="" width="50" height="50" style="margin-top: 20px">
                                       @endif
                                    </div>
                                 </div>
                              </div>
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
                           <!-- yyyyyyy -->
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