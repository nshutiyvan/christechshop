<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:12 GMT -->
<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Tech-Store | Dashboard</title>
    <meta name="description" content="Metro Admin Template.">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
    <link id="bootstrap-style" href="{{ asset('dash/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dash/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
    <link id="base-style" href="{{ asset('dash/css/style.css') }}" rel="stylesheet">
    <link id="base-style-responsive" href="{{ asset('dash/css/style-responsive.css') }}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->


    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link id="ie-style" href="{{ asset('dash/css/ie.css')}}" rel="stylesheet">
    <![endif]-->

    <!--[if IE 9]>
    <link id="ie9style" href="{{ asset('dash/css/ie9.css')}}" rel="stylesheet">
    <![endif]-->

    <!-- start: Favicon -->
    <link rel="shortcut icon" href="{{ URL::to('dash/img/fav.png') }}">
    <!-- end: Favicon -->




</head>

<body>
<!-- start: Header -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="index.html"><span>Admin area</span></a>

            <!-- start: Header Menu -->
            <div class="nav-no-collapse header-nav">
                <ul class="nav pull-right">
                    <!-- start: User Dropdown -->
                    <li class="dropdown">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="halflings-icon white user"></i> {{ Auth::user()->fullname }}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-menu-title">
                                <span>Logout</span>
                            </li>
                            {{--<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>--}}
                            {{--<li><a href="#"><i class="halflings-icon off"></i> Logout</a></li>--}}

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="halflings-icon off"></i>{{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </li>
                    <!-- end: User Dropdown -->
                </ul>
            </div>
            <!-- end: Header Menu -->
        </div>
    </div>
</div>
<!-- start: Header -->

<div class="container-fluid-full">
    <div class="row-fluid">

        <!-- start: Main Menu -->
        <div id="sidebar-left" class="span2">
            <div class="nav-collapse sidebar-nav">
                <ul class="nav nav-tabs nav-stacked main-menu">
                    <li><a href="{{ route('admin.home') }}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>
                    <li><a href="{{ route('categories') }}"><i class="icon-tasks"></i><span class="hidden-tablet"> All Categories</span></a></li>
                    <li><a href="{{ route('category_create') }}"><i class="icon-tasks"></i><span class="hidden-tablet"> Add Category</span></a></li>
                    <li>
                        <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Products</span><span class="label label-important"> 2 </span></a>
                        <ul>
                            <li><a class="submenu" href="{{ route('products') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> All Products</span></a></li>
                            <li><a class="submenu" href="{{ route('product_create') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Product</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Slider</span><span class="label label-important"> 2 </span></a>
                        <ul>
                            <li><a class="submenu" href="{{ route('sliders') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> All Sliders</span></a></li>
                            <li><a class="submenu" href="{{ route('slider_create') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Slider</span></a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('manage.payment') }}"><i class="icon-list-alt"></i><span class="hidden-tablet"> Manage Payment</span></a></li>
                    <li><a href="{{ route('view.order') }}"><i class="icon-font"></i><span class="hidden-tablet"> View Order</span></a></li>
                    <li><a href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Delivery Man</span></a></li>
                </ul>
            </div>
        </div>
        <!-- end: Main Menu -->
        <noscript>
            <div class="alert alert-block span10">
                <h4 class="alert-heading">Warning!</h4>
                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
            </div>
        </noscript>

        <!-- start: Content -->
        <div id="content" class="span10">

        @yield('content')

        </div>

</div>



<footer>

    <p>
        <span style="text-align:left;float:left">&copy; 2013 <a href="http://bootstrapmaster.com/" alt="Bootstrap Themes">creativeLabs</a></span>
    </p>

</footer>

<!-- start: JavaScript-->

<script src="{{ asset('dash/js/jquery-1.9.1.min.js') }}"></script>
<script src="{{ asset('dash/js/jquery-migrate-1.0.0.min.js') }}"></script>
<script src="{{ asset('dash/js/jquery-ui-1.10.0.custom.min.js') }}"></script>
<script src="{{ asset('dash/js/jquery.ui.touch-punch.js') }}"></script>
<script src="{{ asset('dash/js/modernizr.js') }}"></script>
<script src="{{ asset('dash/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('dash/js/jquery.cookie.js') }}"></script>
<script src='{{ asset('dash/js/fullcalendar.min.js') }}'></script>
<script src='{{ asset('dash/js/jquery.dataTables.min.js') }}'></script>
<script src="{{ asset('dash/js/excanvas.js') }}"></script>
<script src="{{ asset('dash/js/jquery.flot.js') }}"></script>
<script src="{{ asset('dash/js/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('dash/js/jquery.flot.stack.js') }}"></script>
<script src="{{ asset('dash/js/jquery.flot.resize.min.js') }}"></script>
<script src="{{ asset('dash/js/jquery.chosen.min.js') }}"></script>
<script src="{{ asset('dash/js/jquery.uniform.min.js') }}"></script>
<script src="{{ asset('dash/js/jquery.cleditor.min.js') }}"></script>
<script src="{{ asset('dash/js/jquery.noty.js') }}"></script>
<script src="{{ asset('dash/js/jquery.elfinder.min.js') }}"></script>
<script src="{{ asset('dash/js/jquery.raty.min.js') }}"></script>
<script src="{{ asset('dash/js/jquery.iphone.toggle.js') }}"></script>
<script src="{{ asset('dash/js/jquery.uploadify-3.1.min.js') }}"></script>
<script src="{{ asset('dash/js/jquery.gritter.min.js') }}"></script>
<script src="{{ asset('dash/js/jquery.imagesloaded.js') }}"></script>
<script src="{{ asset('dash/js/jquery.masonry.min.js') }}"></script>
<script src="{{ asset('dash/js/jquery.knob.modified.js') }}"></script>
<script src="{{ asset('dash/js/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('dash/js/counter.js') }}"></script>
<script src="{{ asset('dash/js/retina.js') }}"></script>
<script src="{{ asset('dash/js/custom.js') }}"></script>
<!-- end: JavaScript-->

</body>

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:47 GMT -->
</html>
