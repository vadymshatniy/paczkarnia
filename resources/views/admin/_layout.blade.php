 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Admin Dashboard</title>
     @include('admin._include.styles')
 </head>

 <body class="hold-transition sidebar-mini layout-fixed">
     <!-- Admin Container -->
     <div class="admin-container">
         @include('admin._include.sidebar')

         <div class="admin-main col-md-10">

             @yield('content')
             <footer class="admin-main-footer">
                 <strong>Copyright &copy; 2023. </strong>All rights reserved.
             </footer>
         </div>
     </div>
     @include('admin._include.scripts')
 </body>

 </html>
