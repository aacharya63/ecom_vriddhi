<?php function auto_copyright($year = 'auto'){ ?>
   <?php if(intval($year) == 'auto'){ $year = date('Y'); } ?>
   <?php if(intval($year) == date('Y')){ echo intval($year); } ?>
   <?php if(intval($year) < date('Y')){ echo intval($year) . ' - ' . date('Y'); } ?>
   <?php if(intval($year) > date('Y')){ echo date('Y'); } ?>
<?php } ?>
<footer class="main-footer">
   <strong>Copyright &copy; <?php
   auto_copyright();?> <a href="#">Maximon Solution</a>.</strong> All rights reserved.
</footer>
<script src="{{ asset('admin_assets/plugins/jQuery/jquery-1.12.4.min.js') }}" type="text/javascript"></script>
        <!-- bootstrap js -->
        <script src="{{ asset('admin_assets/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script type="text/javascript">
            window.setTimeout(function() {
                $(".alert").fadeTo(5100, 0).slideUp(10, function(){
                    $(this).remove(); 
                });
            }, 2000);
        </script>