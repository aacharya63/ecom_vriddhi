<!DOCTYPE html>
<html lang="en">
   

<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>@yield('title') - Maxmoon</title>
      <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
      <!-- Favicon and touch icons -->
      <link rel="shortcut icon" href="{{ asset('admin_assets/dist/img/ico/favicon.png') }}" type="image/x-icon">
      <!-- Start Global Mandatory Style
         =====================================================================-->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.20.0/ui/trumbowyg.min.css">
      <!-- jquery-ui css -->
      <link href="{{ asset('admin_assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css') }}" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap -->
      <link href="{{ asset('admin_assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap toggle -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css" rel="stylesheet" type="text/css"/>
      <!-- Lobipanel css -->
      <link href="{{ asset('admin_assets/plugins/lobipanel/lobipanel.min.css') }}" rel="stylesheet" type="text/css"/>
      <!-- Pace css -->
      <link href="{{ asset('admin_assets/plugins/pace/flash.css') }}" rel="stylesheet" type="text/css"/>
      <!-- Font Awesome -->
      <link href="{{ asset('admin_assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
      <!-- Pe-icon -->
      <link href="{{ asset('admin_assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}" rel="stylesheet" type="text/css"/>
      <!-- Themify icons -->
      <link href="{{ asset('admin_assets/themify-icons/themify-icons.css') }}" rel="stylesheet" type="text/css"/>
      <!-- End Global Mandatory Style
         =====================================================================-->
      <!-- Start page Label Plugins 
         =====================================================================-->
      <!-- Emojionearea -->
      <link href="{{ asset('admin_assets/plugins/emojionearea/emojionearea.min.css') }}" rel="stylesheet" type="text/css"/>
      <!-- Monthly css -->
      <link href="{{ asset('admin_assets/plugins/monthly/monthly.css') }}" rel="stylesheet" type="text/css"/>
      <!-- End page Label Plugins 
         =====================================================================-->
      <!-- Start Theme Layout Style
         =====================================================================-->
      <!-- Theme style -->
      <link href="{{ asset('admin_assets/dist/css/stylecrm.css') }}" rel="stylesheet" type="text/css"/>
      <!-- Theme style rtl -->
      <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
      <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
      <!-- End Global Mandatory Style
         =====================================================================-->
      <!-- Start Theme Layout Style
         =====================================================================-->
      <!-- Theme style -->
      <!-- End Theme Layout Style
         =====================================================================-->
   </head>
   <body class="hold-transition sidebar-mini">
      <!--preloader-->
      <div id="preloader">
         <div id="status"></div>
      </div>
      <div class="wrapper">
         @include('admin.layouts.header')
         @include('admin.layouts.sidebar')
         @yield('content')
         @include('admin.layouts.footer')
      </div>

      <!-- Start Core Plugins
         =====================================================================-->
      <!-- jQuery -->
      <script src="{{ asset('admin_assets/plugins/jQuery/jquery-1.12.4.min.js') }}" type="text/javascript"></script>
      <!-- jquery-ui --> 
      <script src="{{ asset('admin_assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js') }}" type="text/javascript"></script>
      <!-- Bootstrap -->
      <script src="{{ asset('admin_assets/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
      <!-- lobipanel -->
      <script src="{{ asset('admin_assets/plugins/lobipanel/lobipanel.min.js') }}" type="text/javascript"></script>
      <!-- Pace js -->
      <script src="{{ asset('admin_assets/plugins/pace/pace.min.js') }}" type="text/javascript"></script>
      <!-- SlimScroll -->
      <script src="{{ asset('admin_assets/plugins/slimScroll/jquery.slimscroll.min.js') }}" type="text/javascript">    </script>
      <!-- FastClick -->
      <script src="{{ asset('admin_assets/plugins/fastclick/fastclick.min.js') }}" type="text/javascript"></script>
      <!-- CRMadmin frame -->
      <script src="{{ asset('admin_assets/dist/js/custom.js') }}" type="text/javascript"></script>
      <!-- End Core Plugins
         =====================================================================-->
      <script src="http://cdn.tinymce.com/4/tinymce.min.js" referrerpolicy="origin"></script>
      <!-- Start Page Lavel Plugins
         =====================================================================-->
      
      <!-- Counter js -->
      <script src="{{ asset('admin_assets/plugins/counterup/waypoints.js') }}" type="text/javascript"></script>
      <script src="{{ asset('admin_assets/plugins/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>
      <!-- Monthly js -->
      <script src="{{ asset('admin_assets/plugins/monthly/monthly.js') }}" type="text/javascript"></script>
      <!-- End Page Lavel Plugins
         =====================================================================-->
      <!-- Start Theme label Script
         =====================================================================-->
      <!-- Dashboard js -->
      <script src="{{ asset('admin_assets/dist/js/dashboard.js') }}" type="text/javascript"></script>
      <script type="text/javascript" src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
      <!-- End Theme label Script==========-->
      <script type="text/javascript">
         $(document).ready( function () {
            $('#viewProductTable').DataTable();
            $('#tablePage').DataTable();
         });
      </script>

      <script type="text/javascript">
        $(function() {
          $('.toggle-class').change(function() {
              var status = $(this).prop('checked') == true ? 1 : 0; 
              var _id = $(this).data('id'); 
               
              $.ajax({
                  type: "GET",
                  dataType: "json",
                  url: '/admin/updateProductStatus',
                  data: {'status': status, id: _id},
                  success: function(data){
                    console.log(data.success)
                    $('#status_success').show();
                    setTimeout(function(){
                       $('#status_success').fadeOut('slow');
                    }, 3000);
                  }
              });
          })
        })
      </script>
      <!-- category status -->
      <script type="text/javascript">
        $(function() {
          $('.toggle-class-category').change(function() {
              var status = $(this).prop('checked') == true ? 1 : 0; 
              var _id = $(this).data('id'); 
               
              $.ajax({
                  type: "GET",
                  dataType: "json",
                  url: '/admin/updateCategoryStatus',
                  data: {'status': status, id: _id},
                  success: function(data){
                    console.log(data.success)
                    $('#status_success_cat').show();
                    setTimeout(function(){
                       $('#status_success_cat').fadeOut('slow');
                    }, 3000);
                  }
              });
          })
        })
      </script>
      <!-- banner status -->
      <script type="text/javascript">
        $(function() {
          $('.toggle-class-banner').change(function() {
              var status = $(this).prop('checked') == true ? 1 : 0; 
              var _id = $(this).data('id'); 
               
              $.ajax({
                  type: "GET",
                  dataType: "json",
                  url: '/admin/updateBannerStatus',
                  data: {'status': status, id: _id},
                  success: function(data){
                    console.log(data.success)
                    $('#status_success_ban').show();
                    setTimeout(function(){
                       $('#status_success_ban').fadeOut('slow');
                    }, 3000);
                  }
              });
          })
        })
      </script>
      <!-- page toggle -->
      <script type="text/javascript">
        $(function() {
          $('.toggle-class-page').change(function() {
              var status = $(this).prop('checked') == true ? 1 : 0; 
              var _id = $(this).data('id'); 
               
              $.ajax({
                  type: "GET",
                  dataType: "json",
                  url: '/admin/updatePageStatus',
                  data: {'status': status, id: _id},
                  success: function(data){
                    console.log(data.success)
                    $('#status_success_page').show();
                    setTimeout(function(){
                       $('#status_success_page').fadeOut('slow');
                    }, 3000);
                  }
              });
          })
        })
      </script>
      <!-- page toggle ends -->
      <!-- add remove fields -->
      <script type="text/javascript">
        $(document).ready(function(){

    var counter = 2;

    $("#addButton").click(function () {

  if(counter>10){
            alert("Only 10 textboxes allow");
            return false;
  }

  var newTextBoxDiv = $(document.createElement('div'))
       .attr("id", 'TextBoxDiv' + counter);

  newTextBoxDiv.after().html('<hr><div class="form-group {{ $errors->has("sku") ? "has-error" : "" }}"><label>Product SKU</label><input type="textbox" id="sku" name="sku[]" placeholder="Stock keeping unit" class="form-control" value=""></div><div class="form-group {{ $errors->has("size") ? "has-error" : "" }}"><label>Product Size</label><input type="textbox" id="size" name="size[]" placeholder="Product Size" class="form-control" value=""></div><div class="form-group {{ $errors->has("price") ? "has-error" : "" }}"><label>Product price</label><input type="textbox" id="price" name="price[]" placeholder="product price" class="form-control" value=""></div><div class="form-group {{ $errors->has("stock") ? "has-error" : "" }}"><label>Product stock</label><input type="textbox" id="stock" name="stock[]" placeholder="product stock" class="form-control" value=""></div>');

  newTextBoxDiv.appendTo("#TextBoxesGroup");


  counter++;
     });

     $("#removeButton").click(function () {
  if(counter==1){
          alert("No more textbox to remove");
          return false;
       }

  counter--;

        $("#TextBoxDiv" + counter).remove();

     });

     
  });
      </script>
      
      <script src="{{ asset('admin_assets/dist/js/bootstrap-toggle.js') }}" type="text/javascript"></script>
      @include('sweetalert::alert')
      <script type="text/javascript">
        $('li a').click(function(e) {
            $(this).closest("li").find("[class^='ul_submenu']").slideToggle();
        });
      </script>
      <!-- <script>
        tinymce.init({
                    selector: "#editPageTextarea",  // change this value according to your HTML
                    toolbar: "image,paste",
                    plugins: "image,paste",
                    menubar: "insert,edit",
                    paste_data_images: true,
        });
      </script> -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.20.0/trumbowyg.min.js"></script>
      <script type="text/javascript">
        $('#editPageTextarea').trumbowyg();
        $('#pgCon').trumbowyg();
        
      </script>
      <script type="text/javascript">
        $("#submit-form-page").submit(function(e){
            $('#deletePage').modal('show');
            return false;
        });
      </script>
      <script type="text/javascript">

$(document).ready(function(){

    var counter = 2;

    $("#add").click(function () {

  if(counter>10){
            alert("Only 10 textboxes allow");
            return false;
  }

  var newTextBoxDiv = $(document.createElement('div'))
       .attr("id", 'subcontentDiv' + counter);

  newTextBoxDiv.after().html('' +
        '<div class="container-fluid"><div class="form-group"><label>Title</label><div class="input-group {{ $errors->has("subcontentTitle") ? "has-error" : "" }}"><input type="text" class="form-control" name="subcontentTitle[]" id="subcontentTitle" placeholder="Enter Page title" required value="{{old("subcontentTitle")}}"><span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span><span class="text-danger">{{ $errors->first("subcontentTitle") }}</span></div></div><div class="form-group"><label>Description</label><div class="input-group {{ $errors->has("subcontentDis") ? "has-error" : "" }}"><textarea class="form-control" name="subcontentDis[]" id="subcontentDis"></textarea><span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span><span class="text-danger">{{ $errors->first("subcontentTitle") }}</span></div></div></div>');

  newTextBoxDiv.appendTo("#subcontentGroup");


  counter++;
     });

     $("#remove").click(function () {
  if(counter==1){
          alert("No more textbox to remove");
          return false;
       }

  counter--;

        $("#subcontentDiv" + counter).remove();

     });

     
  });
</script>
   </body>
   </html>