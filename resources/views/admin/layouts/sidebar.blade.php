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
               <li><a href="{{ url('admin/viewCategory') }}">View category</a></li>
            </ul>
         </li>
         <li>
            <a href="{{ url('admin/banner') }}">
            <i class="fa fa-product-hunt"></i><span>Banner</span>
            
            </a>
            
         </li>
         <!-- pages -->
         <li class="treeview">
            <a href="#">
            <i class="fa fa-product-hunt"></i><span>Blogs</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
               <li><a href="{{ url('admin/addBlog') }}">Add new Blog</a></li>
               <li><a href="{{ url('admin/viewblog') }}">View all blogs</a></li>
            </ul>
         </li>
         <!-- pages ends -->
      </ul>
   </div>
   <!-- /.sidebar -->
</aside>