<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Datatable | Obama - Responsive admin template.</title>
        <link rel="shortcut icon" href="img/favicon.ico">
        <!--STYLESHEET-->
        <!--=================================================-->
        <!--Roboto Slab Font [ OPTIONAL ] -->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400" rel="stylesheet">
        <!--Bootstrap Stylesheet [ REQUIRED ]-->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
        <!--Jasmine Stylesheet [ REQUIRED ]-->
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
        <!--Font Awesome [ OPTIONAL ]-->
        <link href="{{asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <!--Switchery [ OPTIONAL ]-->
        <link href="{{asset('assets/plugins/switchery/switchery.min.css')}}" rel="stylesheet">
        <!--Bootstrap Select [ OPTIONAL ]-->
        <link href="{{asset('assets/plugins/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet">
        <!--Bootstrap Table [ OPTIONAL ]-->
        <link href="{{asset('assets/plugins/datatables/media/css/dataTables.bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('assets/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css')}}" rel="stylesheet">
        <!--Demo [ DEMONSTRATION ]-->
        <link href="{{asset('assets/css/demo/jasmine.css')}}" rel="stylesheet">
        <!--SCRIPT-->
        <!--=================================================-->
        <!--Page Load Progress Bar [ OPTIONAL ]-->
        <link href="{{asset('assets/plugins/pace/pace.min.css')}}" rel="stylesheet">
        <script src="{{asset('assets/plugins/pace/pace.min.js')}}"></script>
    </head>
    <body>
        <div id="container" class="effect mainnav-sm navbar-fixed mainnav-fixed">
            <!--NAVBAR-->
            <!--===================================================-->
            <header id="navbar">
                <div id="navbar-container" class="boxed">
                    <!--Navbar Dropdown-->
                    <!--================================-->
                    <div class="navbar-content clearfix">
                        <ul class="nav navbar-top-links pull-left">
                            <!--Navigation toogle button-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li class="tgl-menu-btn">
                                <a class="mainnav-toggle" href="#"> <i class="fa fa-navicon fa-lg"></i> </a>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End Navigation toogle button-->
                            <!--Messages Dropdown-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End message dropdown-->
                            <!--Notification dropdown-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End notifications dropdown-->
                        </ul>
                        <ul class="nav navbar-top-links pull-right">
                            <!--Profile toogle button-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li class="hidden-xs" id="toggleFullscreen">
                                <a class="fa fa-expand" data-toggle="fullscreen" href="#" role="button">
                                <span class="sr-only">Toggle fullscreen</span>
                                </a>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End Profile toogle button-->
                            <!--User dropdown-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li id="dropdown-user" class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                    <span class="pull-right"> <img class="img-circle img-user media-object" src="img/av1.png" alt="Profile Picture"> </span>
                                    <div class="username hidden-xs">John Doe</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right with-arrow">
                                    <!-- User dropdown menu -->
                                    <ul class="head-list">
                                        <li>
                                            <a href="#"> <i class="fa fa-user fa-fw fa-lg"></i> Profile </a>
                                        </li>
                                        <li>
                                            <a href="#">  <i class="fa fa-envelope fa-fw fa-lg"></i> Messages </a>
                                        </li>
                                        <li>
                                            <a href="#">  <i class="fa fa-gear fa-fw fa-lg"></i> Settings </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fa fa-sign-out fa-fw"></i> Logout </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End user dropdown-->
                        </ul>
                    </div>
                    <!--================================-->
                    <!--End Navbar Dropdown-->
                </div>
            </header>
            <!--===================================================-->
            <!--END NAVBAR-->
            <div class="boxed">
                <!--CONTENT CONTAINER-->
                <!--===================================================-->
                <div id="content-container">
                    <div class="pageheader hidden-xs">
                        <h3><i class="fa fa-home"></i> Datatable Table </h3>
                        <div class="breadcrumb-wrapper">
                            <span class="label">You are here:</span>
                            <ol class="breadcrumb">
                                <li> <a href="#"> Home </a> </li>
                                <li class="active"> datatable Table </li>
                            </ol>
                        </div>
                    </div>
                    <!--Page content-->
                    <!--===================================================-->
                    <div id="page-content">
                       <div class="row">
                             <div class="col-md-12">

     
                      
                        <!-- Add Row -->
                        <!--===================================================-->
                        <div class="panel">

                            <div id="demo-custom-toolbar2" class="table-toolbar-left">
                            </div>
                            <div class="panel-body">

            @yield('content')
                            </div>
                        </div>
                        <!--===================================================-->
                        <!-- End Add Row -->
                    </div>
                    <!--===================================================-->
                    <!--End page content-->
                </div>
                <!--===================================================-->
                <!--END CONTENT CONTAINER-->
                <!--MAIN NAVIGATION-->
                <!--===================================================-->
                <nav id="mainnav-container">
                    <!--Brand logo & name-->
                    <!--================================-->
                    <div class="navbar-header">
                        <a href="index.html" class="navbar-brand">
                            <i class="fa fa-forumbee brand-icon"></i>
                            <div class="brand-title">
                                <span class="brand-text">WOW</span>
                            </div>
                        </a>
                    </div>
                    <!--================================-->
                    <!--End brand logo & name-->
                    <div id="mainnav">
                        <!--Menu-->
                        <!--================================-->
                        <div id="mainnav-menu-wrap">
                            <div class="nano">
                                <div class="nano-content">
                                        <ul id="mainnav-menu" class="list-group">
                                                <!--Category name-->
                                                <li class="list-header">Navigation</li>
                                                <!--Menu list item-->
                                                <li> <a href="index.html"> <i class="fa fa-home"></i> <span class="menu-title"> Dashboard </span> </a> </li>
                                                </ul>
                                    <!--Widget-->
                                    <!--================================-->

                                    <!--================================-->
                                    <!--End widget-->
                                </div>
                            </div>
                        </div>
                        <!--================================-->
                        <!--End menu-->
                    </div>
                </nav>
                <!--===================================================-->
                <!--END MAIN NAVIGATION-->
            </div>
            <!-- FOOTER -->
            <!--===================================================-->
            <footer id="footer">
                <!-- Visible when footer positions are fixed -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <div class="show-fixed pull-right">
                    <ul class="footer-list list-inline">
                        <li>
                            <p class="text-sm">SEO Proggres</p>
                            <div class="progress progress-sm progress-light-base">
                                <div style="width: 80%" class="progress-bar progress-bar-danger"></div>
                            </div>
                        </li>
                        <li>
                            <p class="text-sm">Online Tutorial</p>
                            <div class="progress progress-sm progress-light-base">
                                <div style="width: 80%" class="progress-bar progress-bar-primary"></div>
                            </div>
                        </li>
                        <li>
                            <button class="btn btn-sm btn-dark btn-active-success">Checkout</button>
                        </li>
                    </ul>
                </div>
                <!-- Visible when footer positions are static -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <div class="hide-fixed pull-right pad-rgt">Currently v2.2</div>
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <!-- Remove the class name "show-fixed" and "hide-fixed" to make the content always appears. -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <p class="pad-lft">&#0169; 2015 Your Company</p>
            </footer>
            <!--===================================================-->
            <!-- END FOOTER -->
            <!-- SCROLL TOP BUTTON -->
            <!--===================================================-->
            <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
            <!--===================================================-->
        </div>
        <!--===================================================-->
        <!-- END OF CONTAINER -->
        <!--JAVASCRIPT-->
        <!--=================================================-->
        <!--jQuery [ REQUIRED ]-->
        <script src="{{asset('assets/js/jquery-2.1.1.min.js')}}"></script>
        <!--BootstrapJS [ RECOMMENDED ]-->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <!--Fast Click [ OPTIONAL ]-->
        <script src="{{asset('assets/plugins/fast-click/fastclick.min.js')}}"></script>
        <!--Jasmine Admin [ RECOMMENDED ]-->
        <script src="{{asset('assets/js/scripts.js')}}"></script>
        <!--Jquery Nano Scroller js [ REQUIRED ]-->
        <script src="{{asset('assets/plugins/nanoscrollerjs/jquery.nanoscroller.min.js')}}"></script>
        <!--Metismenu js [ REQUIRED ]-->
        <script src="{{asset('assets/plugins/metismenu/metismenu.min.js')}}"></script>
        <!--Switchery [ OPTIONAL ]-->
        <script src="{{asset('assets/plugins/switchery/switchery.min.js')}}"></script>
        <!--Bootstrap Select [ OPTIONAL ]-->
        <script src="{{asset('assets/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
        <!--DataTables [ OPTIONAL ]-->
        <script src="{{asset('assets/plugins/datatables/media/js/jquery.dataTables.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables/media/js/dataTables.bootstrap.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>
        <!--Fullscreen jQuery [ OPTIONAL ]-->
        <script src="{{asset('assets/plugins/screenfull/screenfull.js')}}"></script>
        <!--DataTables Sample [ SAMPLE ]-->
        <script src="{{asset('assets/js/demo/tables-datatables.js')}}"></script>



        <!-- DataTables -->
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <!-- App scripts -->
        @stack('scripts')
    </body>
</html>