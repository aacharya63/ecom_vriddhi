@extends('admin.layouts.master')
@section('title', 'Add new blog')
@section('content')
<body class="hold-transition sidebar-mini">
   <!-- Site wrapper -->
   <div class="wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <section class="content-header">
            <div class="header-title">
               <h1>Add Blog</h1>
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
                        <form action="{{ url('admin/addBlog') }}" method="post" enctype="multipart/form-data">
                           @csrf
                           <div class="form-group">
                              <div class="col-xs-6">
                                 <label>Blog title</label>
                                 <div class="input-group {{ $errors->has('title') ? 'has-error' : '' }}">
                                    <input type="text" class="form-control" name="title" id="title" required="required" placeholder="input blog title" value="{{old('title')}}" />
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                 </div>
                                 <br>
                                 <label>Link URL</label>
                                 <div class="input-group {{ $errors->has('url') ? 'has-error' : '' }}">
                                    <input type="text" class="form-control" name="url" id="url" placeholder="Enter Link URL" required value="{{old('url')}}">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                    <span class="text-danger">{{ $errors->first('url') }}</span>
                                 </div>
                                 <hr>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-xs-6">
                                 <label>Image upload</label>
                                 <div class="input-group {{ $errors->has('img') ? 'has-error' : '' }}">
                                    <input type="file" name="img" id="img" class="form-control">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                    <span class="text-danger">{{ $errors->first('img') }}</span>
                                 </div>
                                 <br>
                                 <label>Slug</label>
                                 <div class="input-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                                    <input type="text" class="form-control" name="slug" id="slug" required="required" placeholder="input slug" value="{{old('slug')}}"/>
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
                                    <textarea class="form-control" name="description" id="description">{{old('description')}}</textarea>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                    <span class="text-danger">{{ $errors->first('desciption') }}</span>
                                 </div>
                                 <br>
                                 <label>Author Name</label>
                                 <div class="input-group">
                                    <input type="text" class="form-control" name="author" id="author" placeholder="input author name" value="{{old('author')}}" />
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                 </div>
                                 <hr>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-xs-6">
                                 <label>SEO Description</label>
                                 <div class="input-group">
                                    <textarea class="form-control" name="seo_description" id="seo_description">{{old('seo_description')}}</textarea>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                 </div>
                                 <br>
                                 <label>Keywords</label>
                                 <div class="input-group">
                                    <input type="text" class="form-control" name="Keyword" id="Keyword" placeholder="input Keywords" value="{{old('Keyword')}}" />
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                 </div>
                                 <hr>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-xs-6">
                                 <label>OG Title</label>
                                 <div class="input-group">
                                    <input type="text" class="form-control" name="og_title" id="og_title" placeholder="input OG title" value="{{old('og_title')}}" />
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                 </div>
                                 <br>
                                 <label>OG Description</label>
                                 <div class="input-group">
                                    <textarea class="form-control" name="og_description" id="og_description">{{old('og_description')}}</textarea>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                 </div>
                                 <hr>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-xs-6">
                                 <label>OG Type</label>
                                 <div class="input-group">
                                    <input type="text" class="form-control" name="og_type" id="og_type" placeholder="input OG Type" value="{{old('og_type')}}" />
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                 </div>
                                 <br>
                                 <label>OG URL</label>
                                 <div class="input-group">
                                    <input type="text" class="form-control" name="og_url" id="og_url" placeholder="input OG URL" value="{{old('og_url')}}" />
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                 </div>
                                 <hr>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-xs-12">
                                 <label>OG Image</label>
                                 <div class="input-group">
                                    <input type="file" class="form-control" name="og_img" id="og_img" />
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                 </div>
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