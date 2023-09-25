
<!DOCTYPE html>
<html lang="en">
<head>
 @include('backend.layouts.head')
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  @include('backend.layouts.nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
   @include('backend.layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2"> 
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
      @yield('content')
  
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
 
  </aside>
 
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

@include('backend.layouts.script')
</body>
</html>
