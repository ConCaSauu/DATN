<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Good Job | Management</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('assets/plugins')}}/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/dist')}}/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.dataTables.min.css">

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
  @include('admin.layout.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin.layout.sidebar')

    <!-- Sidebar -->
    
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->
    <section class="content">
    <!-- Main content -->
      @yield('content')
    <!-- /.content -->
    </section>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('assets/plugins')}}/jquery/jquery.min.js"></script>
<script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
<!-- Bootstrap -->
<script src="{{asset('assets/plugins')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="{{asset('assets/dist')}}/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('assets/plugins')}}/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('assets/dist')}}/js/pages/dashboard3.js"></script>
<!-- Ckeditor -->
<script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>

<script>
  // $( function() {
  //   $( "#return_day" ).datepicker();
  //   $( "#departure_day" ).datepicker();
  // } );
  let table = new DataTable('#tb');

  CKEDITOR.replace( 'description');
  CKEDITOR.replace( 'preview');
  CKEDITOR.replace( 'content');
</script>
</body>
</html>
