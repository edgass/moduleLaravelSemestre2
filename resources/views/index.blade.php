<!DOCTYPE html>
<html lang="en">
@include('head')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">
  @include('header')
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar"> 
    @include('sidebar')
  </aside>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    @yield('contenu')
  </div>
  <!-- /.content-wrapper -->
  @include('footer')
</div>
<!-- ./wrapper --> 

@include('script')
</body>
</html>
