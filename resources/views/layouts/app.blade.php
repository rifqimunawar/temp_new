<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>AspStudio | Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- ================== BEGIN core-css ================== -->
  <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">
  <!-- ================== END core-css ================== -->

  {{-- datatable --}}
  <link href="/assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
  <link href="/assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet">
  <link href="/assets/plugins/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet">
  {{-- datatable --}}
</head>

<body>
  <!-- BEGIN #app -->
  <div id="app" class="app">
    <!-- BEGIN #header -->
    @include('partials.header')
    <!-- END #header -->

    <!-- BEGIN #sidebar -->
    <div id="sidebar" class="app-sidebar">
      <!-- BEGIN scrollbar -->
      @include('partials.sidebar')
      <!-- END scrollbar -->

      <!-- BEGIN mobile-sidebar-backdrop -->
      <button class="app-sidebar-mobile-backdrop" data-dismiss="sidebar-mobile"></button>
      <!-- END mobile-sidebar-backdrop -->
    </div>
    <!-- END #sidebar -->

    @yield('content')

    <!-- BEGIN btn-scroll-top -->
    <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
    <!-- END btn-scroll-top -->
    <!-- BEGIN theme-panel -->
    @include('partials.theme-panel')
    <!-- END theme-panel -->
  </div>
  <!-- END #app -->
  @include('sweetalert::alert')

  <!-- ================== BEGIN core-js ================== -->
  <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
  <script src="{{ asset('assets/js/app.min.js') }}"></script>
  <!-- ================== END core-js ================== -->

  <!-- ================== BEGIN page-js ================== -->
  <script src="{{ asset('assets/plugins/apexcharts/dist/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/js/demo/dashboard.demo.js') }}"></script>
  <!-- ================== END page-js ================== -->

  {{-- datatable --}}
  <!-- required js -->
  <script src="/assets/plugins/datatables.net/js/dataTables.min.js"></script>
  <script src="/assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
  <script src="/assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="/assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js"></script>
  <script src="/assets/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="/assets/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="/assets/plugins/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
  <script src="/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
  <script src="/assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
  {{-- datatable --}}


  {{-- <script>
    $('#datatableDefault').DataTable({
      dom: "<'row mb-3'<'col-sm-4'l><'col-sm-8 text-end'<'d-flex justify-content-end'fB>>>t<'d-flex align-items-center mt-3'<'me-auto'i><'mb-0'p>>",
      lengthMenu: [10, 20, 30, 40, 50, 100, 500, 1000],
      responsive: true,
      buttons: [{
          extend: 'print',
          className: 'btn btn-default'
        },
        {
          extend: 'csv',
          className: 'btn btn-default'
        }
      ]
    });
  </script> --}}
  <script>
    $(document).ready(function() {
      const table = $('#datatableDefault').DataTable({
        dom: "<'row mb-3'<'col-sm-4'l><'col-sm-6'f><'col-sm-2 text-center custom-toolbar'>>" +
          "t" +
          "<'d-flex align-items-center mt-3'<'me-auto'i><'mb-0'p>>",
        lengthMenu: [10, 20, 30, 40, 50, 100, 500, 1000],
        responsive: true
      });

      // Inject tombol "Tambah"
      const addButton = $('#customAddButtonTemplate').html();
      $('.custom-toolbar').html(addButton);
    });
  </script>


</body>

</html>
