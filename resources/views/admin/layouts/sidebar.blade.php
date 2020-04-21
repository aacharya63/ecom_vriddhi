<aside class="main-sidebar">
   <!-- sidebar -->
   <div class="sidebar">
      <!-- sidebar menu -->
      <ul class="sidebar-menu">
         <li class="active">
            <a href="{{ url('admin/dashboard') }}"><i class="fa fa-tachometer"></i><span>Dashboard</span>
            <span class="pull-right-container">
            </span>
            </a>
         </li>
         <li class="treeview">
            <a href="#">
            <i class="fa fa-product-hunt"></i><span>Products</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
               <li><a href="{{ url('admin/addProduct') }}">Add product</a></li>
               <li><a href="{{ url('admin/viewProduct') }}">View product</a></li>
            </ul>
         </li>
         <li class="treeview">
            <a href="#">
            <i class="fa fa-product-hunt"></i><span>Category</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
               <li><a href="{{ url('admin/addCategory') }}">Add category</a></li>
               <li><a href="{{ url('admin/viewCategory') }}">View product</a></li>
            </ul>
         </li>
      </ul>
   </div>
   <!-- /.sidebar -->
</aside>