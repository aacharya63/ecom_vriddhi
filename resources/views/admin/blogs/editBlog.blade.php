@extends('admin.layouts.master')
@section('title', 'Edit blog')
@section('content')
   <body class="hold-transition sidebar-mini">
   <!-- Site wrapper -->
      <div class="wrapper">
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               
               <div class="header-title">
                  <h1>Edit Blog</h1>
                  
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
                              <a class="btn btn-add " href="{{ url('admin/viewBlog') }}"> 
                              <i class="fa fa-list"></i>  Blog List </a>  
                           </div>
                        </div>
                        <div class="panel-body">
                          <form action="{{ url('admin/editBlog/'.$get_id) }}" method="post" enctype="multipart/form-data">
                           	@csrf
                            <div class="form-group">
                               <div class="col-xs-6">
                                  <label>Blog title</label>
                                  <div class="input-group {{ $errors->has('title') ? 'has-error' : '' }}">
                                    <input type="text" class="form-control" name="title" id="title" required="required" placeholder="input blog title" value="{{ $blog_data->title }}" />
                                     <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                     <span class="text-danger">{{ $errors->first('title') }}</span>
                                  </div>
                                  <br>
                                  <label>Link URL</label>
                                  <div class="input-group {{ $errors->has('url') ? 'has-error' : '' }}">
                                     <input type="text" class="form-control" name="url" id="url" placeholder="Enter Link URL" required  value="{{ $blog_data->url }}">
                                     <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                     <span class="text-danger">{{ $errors->first('url') }}</span>
                                  </div>
                                  <hr>
                               </div>
                            </div>
                            <div class="form-group">
                               <div class="col-xs-6">
                                <!-- xxxxxxxx -->
                                <div class="row">
                                  <div class="col-xs-8">
                                    <label>Image upload</label>
                                    <div class="input-group {{ $errors->has('img') ? 'has-error' : '' }}">
                                       <input type="file" name="img" id="img" class="form-control">
                                       <input type="hidden" name="current_img" id="current_img" class="form-control" value="{{ $blog_data->image }}">
                                       <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                       <span class="text-danger">{{ $errors->first('img') }}</span>
                                    </div>
                                  </div>
                                  <div class="col-xs-4">
                                    @if(!empty($blog_data->image))
                                    <img src="{{ url('uploads/blogs/'.$blog_data->image) }}" class="img-circle" alt="" width="50" height="50">
                                    @endif
                                  </div>
                                </div>
                                <!-- fffffffffff -->
                                  
                                  <br>
                                  <label>Slug</label>
                                  <div class="input-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                                     <input type="text" class="form-control" name="slug" id="slug" required="required" placeholder="input slug" value="{{ $blog_data->slug }}"/>
                                     <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                     <span class="text-danger">{{ $errors->first('slug') }}</span>
                                  </div>
                                  <hr>
                               </div>
                            </div>
                            <div class="form-group">
                               <div class="col-xs-6">
                                  <label>Description</label>
                                  <div class="input-group {{ $errors->has('desciption') ? 'has-error' : '' }}">
                                     <textarea class="form-control" name="description" id="description"> {{ $blog_data->description }}</textarea>
                                     <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                     <span class="text-danger">{{ $errors->first('desciption') }}</span>
                                  </div>
                                  <br>
                                  <label>Author Name</label>
                                  <div class="input-group">
                                     <input type="text" class="form-control" name="author" id="author" placeholder="input author name" value="{{ $blog_data->author }}" />
                                     <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                  </div>
                                  <hr>
                               </div>
                            </div>
                            <div class="form-group">
                               <div class="col-xs-6">
                                  <label>SEO Description</label>
                                  <div class="input-group">
                                     <textarea class="form-control" name="seo_description" id="seo_description">{{$blog_data->seo_description}}</textarea>
                                     <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                  </div>
                                  <br>
                                  <label>Keywords</label>
                                  <div class="input-group">
                                     <input type="text" class="form-control" name="Keyword" id="Keyword" placeholder="input Keywords" value="{{$blog_data->keywords}}" />
                                     <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                  </div>
                                  <hr>
                               </div>
                            </div>
                            <div class="form-group">
                               <div class="col-xs-6">
                                  <label>OG Title</label>
                                  <div class="input-group">
                                     <input type="text" class="form-control" name="og_title" id="og_title" placeholder="input OG title" value="{{$blog_data->og_title}}" />
                                     <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                  </div>
                                  <br>
                                  <label>OG Description</label>
                                  <div class="input-group">
                                     <textarea class="form-control" name="og_description" id="og_description">{{$blog_data->og_description}}</textarea>
                                     <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                  </div>
                                  <hr>
                               </div>
                            </div>
                            <div class="form-group">
                               <div class="col-xs-6">
                                  <label>OG Type</label>
                                  <div class="input-group">
                                     <input type="text" class="form-control" name="og_type" id="og_type" placeholder="input OG Type" value="{{$blog_data->og_type}}" />
                                     <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                  </div>
                                  <br>
                                  <label>OG URL</label>
                                  <div class="input-group">
                                     <input type="text" class="form-control" name="og_url" id="og_url" placeholder="input OG URL" value="{{$blog_data->og_url}}" />
                                     <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                  </div>
                                  <hr>
                               </div>
                            </div>
                            <div class="form-group">
                               <div class="col-xs-12">
                                  <div class="row">
                                  <div class="col-xs-8">
                                    <label>OG Image</label>
                                    <div class="input-group">
                                       <input type="file" name="og_image" id="og_image" class="form-control">
                                       <input type="hidden" name="current_imgo" id="current_imgo" class="form-control" value="{{ $blog_data->og_image }}">
                                       <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                       
                                    </div>
                                  </div>
                                  <div class="col-xs-4">
                                    @if(!empty($blog_data->og_image))
                                    <img src="{{ url('uploads/seo/blogs/'.$blog_data->og_image) }}" class="img-circle" alt="" width="50" height="50">
                                    @endif
                                  </div>
                                </div><br>
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