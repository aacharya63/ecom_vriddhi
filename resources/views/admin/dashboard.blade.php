@extends('admin.layouts.master')
@section('title', 'Dashboard')
@section('content')
<style type="text/css">
   .box {
    border-radius: 3px;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    padding: 10px 25px;
    text-align: right;
    display: block;
    margin-top: 60px;
}
.box-icon {
    background-color: #57a544;
    border-radius: 50%;
    display: table;
    height: 100px;
    margin: 0 auto;
    width: 100px;
    margin-top: -61px;
}
.box-icon span {
    color: #fff;
    display: table-cell;
    text-align: center;
    vertical-align: middle;
}
.info h4 {
    font-size: 26px;
    letter-spacing: 2px;
    text-transform: uppercase;
}
.info > p {
    color: #717171;
    font-size: 16px;
    padding-top: 10px;
    text-align: justify;
}
.info > a {
    background-color: #03a9f4;
    border-radius: 2px;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    color: #fff;
    transition: all 0.5s ease 0s;
}
.info > a:hover {
    background-color: #0288d1;
    box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.16), 0 2px 5px 0 rgba(0, 0, 0, 0.12);
    color: #fff;
    transition: all 0.5s ease 0s;
}
</style>
   <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <!-- <section class="content-header">
         <div class="header-icon">
            <i class="fa fa-dashboard"></i>
         </div>
         <div class="header-title">
            <h1>CRM Admin Dashboard</h1>
            <small>Very detailed & featured admin.</small>
         </div>
      </section> -->
      <!-- Main content -->
      <section class="content">
         <div class="row">
                 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                     <div class="box">
                         <div class="box-icon">
                             <span class="fa fa-4x fa-html5"></span>
                         </div>
                         <div class="info">
                             <h4 class="text-center">Dummy Box</h4>
                             <p>All Dynamic content comes here from database</p>
                             <a href="" class="btn">Link</a>
                         </div>
                     </div>
                 </div>
                 
                 
         </div>
      </section>
      <!-- /.content -->
   </div>
@endsection      
   