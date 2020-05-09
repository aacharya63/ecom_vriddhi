@extends('admin.layouts.master')
@section('title', 'Edit Category')
@section('content')
<body class="hold-transition sidebar-mini">
   <!-- Site wrapper -->
   <div class="wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <section class="content-header">
            <div class="header-title">
               <h1>Edit Category</h1>
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
                           <a class="btn btn-add " href="{{ url('admin/viewCategory') }}"> 
                           <i class="fa fa-eye"></i> View Category </a>  
                        </div>
                     </div>
                     <div class="panel-body">
                        @if(Session::has('fls_suc_msg_ec'))
                        <div class="alert alert-success" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                           <strong>Successfully!</strong> {{ Session::get('fls_suc_msg_ec') }}
                        </div>
                        @endif
                        <form action="{{ url('admin/editCategory/'.$category_dtl->id) }}" method="post" enctype="multipart/form-data">
                           @csrf
                           <!--  -->
                           <div class="form-group">
                              
                              <div class="col-xs-6">
                                 <label>Category Name</label>
                                 <div class="input-group {{ $errors->has('category_name') ? 'has-error' : '' }}">
                                    <input type="text" class="form-control" name="category_name" id="category_name" value="{{ $category_dtl->name }}" placeholder="Enter Category Name" required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                    <span class="text-danger">{{ $errors->first('category_name') }}</span>
                                 </div>
                                 <br>
                                 <label>Parent Category</label>
                                 <div class="input-group {{ $errors->has('parent_category') ? 'has-error' : '' }}">
                                    <select class="form-control" name="parent_category" id="parent_category">
                                       <option value="0" selected="selected">Parent Category</option>
                                       @foreach($sc as $lvl)
                                       <option value="{{ $lvl->id }}">{{ $lvl->name }}</option>
                                       @endforeach
                                    </select>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                    <span class="text-danger">{{ $errors->first('parent_category') }}</span>
                                 </div>
                                 <hr>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-xs-6">
                                 <label>Category URL</label>
                                 <div class="input-group {{ $errors->has('category_url') ? 'has-error' : '' }}">
                                    <input type="text" class="form-control" name="category_url" id="category_url" value="{{ $category_dtl->url }}" placeholder="Enter Category URL" required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                    <span class="text-danger">{{ $errors->first('category_url') }}</span>
                                 </div>
                                 <br>
                                 <label>Category Description</label>
                                 <div class="input-group {{ $errors->has('category_description') ? 'has-error' : '' }}">
                                    <textarea class="form-control" name="category_description" id="category_description">{{ $category_dtl->description }}</textarea>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                    <span class="text-danger">{{ $errors->first('category_description') }}</span>
                                 </div>
                                 <hr>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-xs-6">
                                 <label>Status</label>
                                 <div class="input-group">
                                    <select class="form-control" name="category_status" id="category_status">
                                    <option @if($category_dtl->status == 1) selected  @endif
                                    value="1"
                                    >Active</option>
                                    <option @if($category_dtl->status == 0) selected  @endif
                                    value="0"
                                    >InActive</option>   
                                    </select>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                 </div>
                                 <hr>
                              </div>
                              <div class="col-xs-6">
                                 <label>Author Name</label>
                                 <div class="input-group">
                                    <input type="text" class="form-control" name="author" id="author" placeholder="input author name" value="{{$category_dtl->author}}" />
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                 </div>
                                 <hr>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-xs-6">
                                 <label>SEO Description</label>
                                 <div class="input-group">
                                    <textarea class="form-control" name="seo_description" id="seo_description">{{$category_dtl->seo_description}}</textarea>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                 </div>
                                 <br>
                                 <label>Keywords</label>
                                 <div class="input-group">
                                    <input type="text" class="form-control" name="Keyword" id="Keyword" placeholder="input Keywords" value="{{$category_dtl->keywords}}" />
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                 </div>
                                 <hr>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-xs-6">
                                 <label>OG Title</label>
                                 <div class="input-group">
                                    <input type="text" class="form-control" name="og_title" id="og_title" placeholder="input OG title" value="{{$category_dtl->og_title}}" />
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                 </div>
                                 <br>
                                 <label>OG Description</label>
                                 <div class="input-group">
                                    <textarea class="form-control" name="og_description" id="og_description">{{$category_dtl->og_description}}</textarea>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                 </div>
                                 <hr>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-xs-6">
                                 <label>OG Type</label>
                                 <div class="input-group">
                                    <input type="text" class="form-control" name="og_type" id="og_type" placeholder="input OG Type" value="{{$category_dtl->og_type}}" />
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                 </div>
                                 <hr>
                              </div>
                              <div class="col-xs-6">
                                 <label>OG URL</label>
                                 <div class="input-group">
                                    <input type="text" class="form-control" name="og_url" id="og_url" placeholder="input OG URL" value="{{$category_dtl->og_url}}" />
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                 </div>
                                 <hr>
                              </div>
                           </div>
                           
                           <div class="form-group">
                            <div class="col-xs-6">
                              <div class="row">
                                  <div class="col-xs-8">
                                    <label>OG Image</label>
                                    <div class="input-group {{ $errors->has('og_image') ? 'has-error' : '' }}">
                                       <input type="file" name="og_image" id="og_image" class="form-control">
                                       <input type="hidden" name="current_img_og" id="current_img_og" class="form-control" value="{{ $category_dtl->og_image }}">
                                       <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                       <span class="text-danger">{{ $errors->first('og_image') }}</span>
                                    </div>
                                  </div>
                                  <div class="col-xs-4">
                                    @if(!empty($category_dtl->og_image))
                                    <img src="{{ url('uploads/seo/category/'.$category_dtl->og_image) }}" class="img-circle" alt="" width="50" height="50">
                                    @endif
                                  </div>
                              </div>
                              <hr>
                            </div>
                              <div class="col-xs-6">
                                <div class="row">
                                  <div class="col-xs-8">
                                    <label>Category Image</label>
                                    <div class="input-group {{ $errors->has('category_img') ? 'has-error' : '' }}">
                                       <input type="file" name="category_img" id="category_img" class="form-control">
                                       <input type="hidden" name="current_img_cat" id="current_img_cat" class="form-control" value="{{ $category_dtl->category_img }}">
                                       <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                       <span class="text-danger">{{ $errors->first('category_img') }}</span>
                                    </div>
                                  </div>
                                  <div class="col-xs-4">
                                    @if(!empty($category_dtl->category_img))
                                    <img src="{{ url('uploads/category/'.$category_dtl->category_img) }}" class="img-circle" alt="" width="50" height="50">
                                    @endif
                                  </div>
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
                           <!--  -->
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