
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('dashboard/vendor/') }}/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('dashboard/vendor/') }}/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('dashboard/dist/') }}/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('dashboard/vendor/') }}/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->

    <link href="{{ asset('dashboard/vendor/') }}/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/richtext.min.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <!-- /.navbar-top-links -->

    @include('admin.inc.header.header')
    @include('admin.inc.sidebar.sidebar')
            <!-- /.navbar-static-side -->
        </nav>

<div id="page-wrapper">
@yield('content')
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('dashboard/vendor/') }}/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('dashboard/vendor/') }}/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('dashboard/vendor/') }}/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('dashboard/vendor/') }}/raphael/raphael.min.js"></script>
    <script src="{{ asset('dashboard/vendor/') }}/morrisjs/morris.min.js"></script>
    <script src="{{ asset('dashboard/data/') }}/morris-data.js"></script>
    {{-- <script src="{{ asset('dashboard/vendor/') }}/datatables/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('dashboard/vendor/') }}/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="{{ asset('dashboard/vendor/') }}/datatables-responsive/dataTables.responsive.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script src="{{ asset('js/jquery.richtext.min.js') }}" ></script>
    @yield('richtext_scr')
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('dashboard/dist/') }}/js/sb-admin-2.js"></script>
    <script>
      $(document).ready(function() {
          $('#dataTables').DataTable({
              "lengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]]
          });
      });
      </script>
        <script src="{{ asset('js/app.js') }}" ></script>
</body>

</html>
