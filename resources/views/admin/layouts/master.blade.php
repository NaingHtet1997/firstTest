
<!DOCTYPE html>
<html lang="en">
  <head>   
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Travel and Tour | Dashboard</title>
  <!-- ================== GOOGLE FONTS ==================-->
  <link href="https://fonts.googleapis.com/css?family=Gentium+Book+Basic&display=swap" rel="stylesheet">
  <!-- ======================= GLOBAL VENDOR STYLES ========================-->
  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.min.css')}}">
 
  <link rel="stylesheet" href="{{asset('css/metisMenu.css')}}">
  <link rel="stylesheet" href="{{asset('css/index.css')}}">
  <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.css')}}">
  <!-- ======================= LINE AWESOME ICONS ===========================-->
  <link rel="stylesheet" href="{{asset('css/line-awesome.min.css')}}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  
 
 
  <!-- ======================= GLOBAL COMMON STYLES ============================-->
  <link rel="stylesheet" href="{{asset('css/main.bundle.css')}}">

  <!-- ======================= LAYOUT TYPE ===========================-->
  <link rel="stylesheet" href="{{asset('css/main.css')}}">
  <!-- ======================= MENU TYPE ===========================================-->
  <link rel="stylesheet" href="{{asset('css/content.css')}}">
  <link rel="stylesheet" href="{{asset('css/default.css')}}">
  <link rel="stylesheet" href="{{asset('css/custom.css')}}">
  <!-- ======================= THEME COLOR STYLES ===========================-->
  <link rel="stylesheet" href="{{asset('css/theme-i.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/dataTables.bootstrap4.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-fileinput.css')}}">
   <link href="https://transloadit.edgly.net/releases/uppy/v1.6.0/uppy.min.css" rel="stylesheet">
   <style type="text/css">
      body{
          font-family: 'Gentium Book Basic', serif;
        }

  </style>
</head>

<body class="content-menu">
  <!-- CONTENT WRAPPER -->
  <div id="app">
    <!-- TOP TOOLBAR WRAPPER -->
    @include('admin.layouts.header')
    <!-- END TOP TOOLBAR WRAPPER -->
    <div class="content-wrapper">
      <!-- MENU SIDEBAR WRAPPER -->
      <aside class="sidebar sidebar-left">
        <div class="sidebar-content">
         
          @include('admin.layouts.sidebar')
         

          </div>
        </aside>

        <!-- END MENU SIDEBAR WRAPPER -->
        <div class="content container-fluid">
          
          <!--START PAGE HEADER -->
          <header class="page-header">
            <div class="d-flex align-items-center">
              <div class="mr-auto">
                <h1>@yield('page-title')</h1>
              </div>
            </div>
          </header>
          <!--END PAGE HEADER -->

          <!--START PAGE CONTENT -->
          <section class="page-content container-fluid">
            <div class="card">
            @yield('content')
            </div>
          </section>

          <!--END PAGE CONTENT -->

        </div>


        <!-- SIDEBAR QUICK PANNEL WRAPPER -->
        <aside class="sidebar sidebar-right">
        </aside>
        <!-- END SIDEBAR QUICK PANNEL WRAPPER -->

      </div>
      <!-- END CONTENT WRAPPER -->
    </div>

    <!-- ================== GLOBAL VENDOR SCRIPTS ==================-->
   <script src="{{asset('js/jquery.js')}}"></script> 
    <script src="{{asset('js/modernizr.custom.js')}}"></script>
   

    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/js.storage.js')}}"></script>
    <script src="{{asset('js/js.cookie.js')}}"></script>
    <script src="{{asset('js/pace.js')}}"></script>
    <script src="{{asset('js/metisMenu.js')}}"></script>
    <script src="{{asset('js/index.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
    <!-- <script src="{{asset('js/jquery.dataTables.js')}}"></script> -->
    <!-- <script src="{{asset('js/dataTables.bootstrap4.js')}}"></script> -->
    <script src="{{asset('js/bootstrap-fileinput.js')}}"></script>
    
    <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/horizontal-wizard-init.js')}}"></script>
    
    <script src="https://transloadit.edgly.net/releases/uppy/v1.6.0/uppy.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script src="https://www.jquery-az.com/boots/js/bootstrap-colorpicker/bootstrap-colorpicker.js"></script>
    <!-- ================== GLOBAL APP SCRIPTS ==================-->

    <script src="{{asset('js/app.js')}}"></script>

      <script type="text/javascript">
    (function(window, document, $, undefined) {
  "use strict";
    $(function() {

      $('#bs4-table').DataTable();

    });

})(window, document, window.jQuery);
</script>
   

    <!-- Javascript for specific page -->
    @stack('page_scripts')
  </body>
</html>