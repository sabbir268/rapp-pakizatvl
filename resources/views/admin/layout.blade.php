<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{url('admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{url('admin/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{url('admin/dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{url('admin/vendor/morrisjs/morris.css')}}" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="{{url('admin/vendor/datatables-plugins/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{url('admin/vendor/datatables-responsive/dataTables.responsive.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{url('admin/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

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
                <a class="navbar-brand" href="{{route('dashboard')}}">Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="{{route('dashboard')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="{{route('content',['products'])}}"><i class="fa fa-table fa-fw"></i> Products</a>
                        </li>
                        <li>
                            <a href="{{route('content',['solutions'])}}"><i class="fa fa-table fa-fw"></i> Solutions</a>
                        </li>
                        <li>
                            <a href="{{route('content',['services'])}}"><i class="fa fa-table fa-fw"></i>Services</a>
                        </li>
                        <li>
                            <a href="{{route('content',['about'])}}"><i class="fa fa-table fa-fw"></i>About</a>
                        </li>
                        <!-- <li>
                            <a href="{{route('content',['awards'])}}"><i class="fa fa-table fa-fw"></i>Awards</a>
                        </li> -->
                        <li>
                            <a href="{{URL::to('/gallary')}}"><i class="fa fa-table fa-fw"></i>Gallary</a>
                        </li>
                        <li>
                            <a href="{{URL::to('/gallary/category')}}"><i class="fa fa-table fa-fw"></i>Gallary Category</a>
                        </li>
                        <!-- <li>
                            <a href="{{route('content',['leadership'])}}"><i class="fa fa-table fa-fw"></i>Leadership</a>
                        </li> -->
                        <li>
                            <a href="{{URL::to('leadership')}}"><i class="fa fa-table fa-fw"></i>Leadership</a>
                        </li>
                        <li>
                            <a href="{{route('content',['clients'])}}"><i class="fa fa-table fa-fw"></i>clients</a>
                        </li>
                        <li>
                            <a href="{{route('content',['brands'])}}"><i class="fa fa-table fa-fw"></i>brands</a>
                        </li>
                        <li>
                            <a href="{{route('settings',['we-belive-in'])}}"><i class="fa fa-table fa-fw"></i>We Belive In</a>
                        </li>
                        <li>
                            <a href="{{route('settings',['information'])}}"><i class="fa fa-table fa-fw"></i>Information</a>
                        </li>
                        <li>
                            <a href="{{route('settings',['page-image'])}}"><i class="fa fa-table fa-fw"></i>Page Image</a>
                        </li>
                        <li>
                            <a href="{{route('admin_query')}}"><i class="fa fa-table fa-fw"></i>Query</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            @yield('content')
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
     <script src="https://cdn.ckeditor.com/ckeditor5/11.1.1/classic/ckeditor.js"></script>

    <!-- jQuery -->
    <script src="{{url('admin/vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{url('admin/vendor/metisMenu/metisMenu.min.js')}}"></script>
    <!-- DataTables JavaScript -->
    <script src="{{url('admin/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('admin/vendor/datatables-plugins/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{url('admin/vendor/datatables-responsive/dataTables.responsive.js')}}"></script>
    <!-- Morris Charts JavaScript -->
    <script src="{{url('admin/vendor/raphael/raphael.min.js')}}"></script>
    

    <!-- Custom Theme JavaScript -->
    <script src="{{url('admin/dist/js/sb-admin-2.js')}}"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
    <script>
    ClassicEditor
        .create( document.querySelector( '#editor_summery' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>
    <script>
    ClassicEditor
        .create( document.querySelector( '#editor_details' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>

</body>

</html>
