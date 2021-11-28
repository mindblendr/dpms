<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="ie ie6 lte9 lte8 lte7 no-js"> <![endif]-->
<!--[if IE 7]>     <html class="ie ie7 lte9 lte8 lte7 no-js"> <![endif]-->
<!--[if IE 8]>     <html class="ie ie8 lte9 lte8 no-js">      <![endif]-->
<!--[if IE 9]>     <html class="ie ie9 lte9 no-js">           <![endif]-->
<!--[if gt IE 9]>  <html class="no-js">                       <![endif]-->
<!--[if !IE]><!-->
<html class="no-js" ng-app="main_app" lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    ng-controller="mainController">
<!--<![endif]-->


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- // Stylesheets // -->

    <!-- Custom -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />

    <!-- // Stylesheets // -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap.min.css" integrity="sha512-dhpxh4AzF050JM736FF+lLVybu28koEYRrSJtTKfA4Z7jKXJNQ5LcxKmHEwruFN2DuOAi9xeKROJ4Z+sttMjqw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ mix('karma/bootstrap/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ mix('karma/bootstrap/datepicker/css/datepicker.css') }}" />
    <link rel="stylesheet" href="{{ mix('karma/bootstrap/fileupload/bootstrap-fileupload.min.css') }}" />
    <link rel="stylesheet" href="{{ mix('karma/bootstrap/typeahead/typeahead.min.css') }}" />
    <link rel="stylesheet" href="{{ mix('karma/bootstrap/colorpicker/css/colorpicker.css') }}" />
    <link rel="stylesheet" href="{{ mix('karma/bootstrap/timepicker/css/bootstrap-timepicker.min.css') }}" />
    {{-- <link rel="stylesheet" href="{{ mix('karma/fontawesome/css/font-awesome.min.css') }}" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ mix('karma/css/bootstrap-custom.css') }}" />
    <link rel="stylesheet" href="{{ mix('karma/css/bootstrap-extended.css') }}" />
    <link rel="stylesheet" href="{{ mix('karma/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ mix('karma/css/helpers.css') }}" />
    <link rel="stylesheet" href="{{ mix('karma/css/base.css') }}" />
    <link rel="stylesheet" href="{{ mix('karma/css/light-theme.css') }}" />
    <link rel="stylesheet" href="{{ mix('karma/css/mediaqueries.css') }}" />

    <!-- // Helpers // -->

    <script src="{{ mix('karma/js/plugins/modernizr.min.js') }}"></script>
    <script src="{{ mix('karma/js/plugins/mobiledevices.js') }}"></script>

    <!-- // jQuery core // -->

    <script src="{{ mix('karma/js/libs/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ mix('karma/js/libs/jquery-ui-1.10.4.min.js') }}"></script>

    <!-- // Bootstrap // -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/js/bootstrap.min.js" integrity="sha512-28e47INXBDaAH0F91T8tup57lcH+iIqq9Fefp6/p+6cgF7RKnqIMSmZqZKceq7WWo9upYMBLMYyMsFq7zHGlug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ mix('karma/bootstrap/select2/select2.min.js') }}"></script>
    <script src="{{ mix('karma/bootstrap/bootboxjs/bootboxjs.min.js') }}"></script>
    <script src="{{ mix('karma/bootstrap/holder/holder.min.js') }}"></script>
    <script src="{{ mix('karma/bootstrap/typeahead/typeahead.min.js') }}"></script>
    <script src="{{ mix('karma/bootstrap/datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ mix('karma/bootstrap/fileupload/bootstrap-fileupload.min.js') }}"></script>
    <script src="{{ mix('karma/bootstrap/inputmask/bootstrap-inputmask.min.js') }}"></script>
    <script src="{{ mix('karma/bootstrap/colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ mix('karma/bootstrap/timepicker/js/bootstrap-timepicker.min.js') }}"></script>

    <!-- // Custom/premium plugins // -->

    <script src="{{ mix('karma/js/plugins/responsivetables.1.0.min.js') }}"></script>
    <script src="{{ mix('karma/js/plugins/responsivehelper.1.0.min.js') }}"></script>
    <script src="{{ mix('karma/js/plugins/mainmenu.1.0.min.js') }}"></script>
    <script src="{{ mix('karma/js/plugins/easyfiletree.1.0.min.js') }}"></script>
    <script src="{{ mix('karma/js/plugins/autosaveforms.1.0.min.js') }}"></script>
    <script src="{{ mix('karma/js/plugins/chainedinputs.1.0.min.js') }}"></script>
    <script src="{{ mix('karma/js/plugins/checkboxtoggle.1.0.min.js') }}"></script>
    <script src="{{ mix('karma/js/plugins/bootstraptabsextend.1.0.min.js') }}"></script>
    <script src="{{ mix('karma/js/plugins/lockscreen.1.0.min.js') }}"></script>
    <script src="{{ mix('karma/js/plugins/autoexpand.1.0.min.js') }}"></script>
    <script src="{{ mix('karma/js/plugins/notify.1.0.min.js') }}"></script>
    <script src="{{ mix('karma/js/plugins/nanogress.1.0.min.js') }}"></script>
    <script src="{{ mix('karma/js/plugins/powerwizard.1.0.min.js') }}"></script>
    <script src="{{ mix('karma/js/plugins/simpleselect.1.0.min.js') }}"></script>
    <script src="{{ mix('karma/js/plugins/tinycontextmenu.1.0.min.js') }}"></script>

    <!-- // Third-party plugins // -->

    <script src="{{ mix('karma/js/plugins/tinyscrollbar.min.js') }}"></script>
    <script src="{{ mix('karma/js/plugins/jquery.knob.js') }}"></script>
    <script src="{{ mix('karma/js/plugins/prism.min.js') }}"></script>
    <script src="{{ mix('karma/js/plugins/h5f.min.js') }}"></script>
    {{-- <script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script> --}}
    <script src="{{ mix('karma/js/plugins/gmap3.min.js') }}"></script>
    <script src="{{ mix('karma/js/plugins/jquery.tablesorter.min.js') }}"></script>
    <script src="{{ mix('karma/js/plugins/jquery.tablesorter.widgets.min.js') }}"></script>
    <script src="{{ mix('karma/js/plugins/jquery.tablesorter.pager.min.js') }}"></script>
    <script src="{{ mix('karma/js/plugins/fullcalendar.min.js') }}"></script>
    <script src="{{ mix('karma/js/plugins/hogan-2.0.0.js') }}"></script>
    <script src="{{ mix('karma/js/plugins/jquery.nouislider.min.js') }}"></script>
    <script src="{{ mix('karma/js/plugins/jquery.autosize-min.js') }}"></script>
    <script src="{{ mix('karma/js/plugins/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ mix('karma/js/plugins/jquery.pwstrength.min.js') }}"></script>
    <script src="{{ mix('karma/js/plugins/jquery.mixitup.min.js') }}"></script>
    <script src="{{ mix('karma/js/plugins/jquery.vticker.min.js') }}"></script>
    <script src="{{ mix('karma/js/flot/jquery.flot.min.js') }}"></script>
    <script src="{{ mix('karma/js/flot/jquery.flot.resize.min.js') }}"></script>
    <script src="{{ mix('karma/js/flot/excanvas.min.js') }}"></script>
    <script src="{{ mix('karma/js/plugins/layout.min.js') }}"></script>
    <script src="{{ mix('karma/js/plugins/masonry.pkgd.min.js') }}"></script>
    <script src="{{ mix('karma/js/plugins/json2.js') }}"></script>

    <script src="{{ mix('karma/js/plugins/plugins.js') }}"></script>
    <script src="{{ mix('karma/js/plugins/demo.js') }}"></script>
    <script src="{{ mix('karma/js/plugins/main.js') }}"></script>
</head>

<body>
    <div id="container" class="clearfix">

        <!-- ******************************************** 
     * SIDEBAR MAIN:                            *
     *                                          *
     * the part which contains the main         *
     * navigation, logo, search and more...     *
     ******************************************** -->

        <aside id="sidebar-main" class="sidebar">

            <div class="sidebar-logo">
                <a href="index.html" id="logo-big">
                    <h1>{{ config('app.name') }}</h1>
                    <h2>/webapp</h2>
                </a>
            </div><!-- End .sidebar-logo -->

            <!-- ********** -->
            <!-- NEW MODULE -->
            <!-- ********** -->

            <div class="sidebar-module">
                <div class="sidebar-profile">
                    <img src="{{ mix('karma/images/users/user-1.jpg') }}" alt="" class="avatar" />
                    <span class="indicator-dot">2</span>
                    <ul class="sidebar-profile-list">
                        <li>
                            <h3>Hi, Steven Watson</h3>
                        </li>
                        <li><a href="#">Profile</a> | <a href="#">Logout</a></li>
                    </ul>
                </div><!-- End .sidebar-profile -->
            </div><!-- End .sidebar-module -->

            <div class="sidebar-line">
                <!-- A seperator line -->
            </div>

            <!-- * Tabs can be removed, if so dont forget * -->
            <!-- * to remove the .tab-pane divs(wrapper). * -->

            <ul class="ext-tabs-sidebar">
                <li class="active">
                    <a href="#sidebar-tab-1"><i class="fa fa-bars"></i> Navigation</a>
                </li>
            </ul><!-- End .ext-tabs-sidebar -->
            <div class="tab-content">
                <div id="sidebar-tab-1" class="tab-pane active clearfix">

                    <!-- ********** -->
                    <!-- NEW MODULE -->
                    <!-- ********** -->

                    <div class="sidebar-module">
                        <nav class="sidebar-nav-v2">
                            <ul>
                                <li class="page-arrow active-page">
                                    <a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-dashboard"></i> Patients
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-dashboard"></i> Patients
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav><!-- End .sidebar-nav-v1 -->
                    </div><!-- End .sidebar-module -->
                </div>
            </div><!-- End .tab-content -->
        </aside><!-- End aside -->

        <div id="main" class="clearfix">

            <!-- ******************************************** 
                 * MAIN HEADER:                             *
                 *                                          *  
                 * the part which contains the breadcrumbs, *
                 * dropdown menus, toggle sidebar button    *
                 ******************************************** -->

            <header id="header-main">
                <div class="header-main-top">
                    <div class="pull-left">

                        <!-- * This is the responsive logo * -->

                        <a href="index.html" id="logo-small">
                            <h4>{{ config('app.name') }}</h4>
                            <h5>/webapp</h5>
                        </a>
                    </div>
                    <div class="pull-right">

                        <!-- * This is the trigger that will show/hide the menu * -->
                        <!-- * if the layout is in responsive mode              * -->

                        <a href="#" id="responsive-menu-trigger">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                </div><!-- End #header-main-top -->
            </header><!-- End #header-main -->

            <div id="content" class="clearfix">

                <!-- ********************************************
                     * HEADER SEC:                              *
                     *                                          *   
                     * the part which contains the page title,  *
                     * buttons and dropdowns.                   *
                     ******************************************** -->

                <header id="header-sec">
                    <div class="inner-padding">
                        <div class="pull-left">
                            <h2>Dashboard</h2>
                        </div>
                        <div class="pull-right">
                        </div>
                    </div><!-- End .inner-padding -->
                </header><!-- End #header-sec -->

                <!-- ********************************************
                         * WINDOW:                                  *
                         *                                          *
                         * the part which contains the main content *
                         ******************************************** -->

                <div class="window">
                </div><!-- End .window -->

                <!-- ********************************************
                         * FOOTER MAIN:                             *
                         *                                          *
                         * the part which contains things like      * 
                         * chat, buttons, copyright and             *
                         * dropup menu(s).                          *
                         ******************************************** -->

                <footer id="footer-main" class="footer-sticky">
                    <div class="footer-main-inner">
                        <div class="pull-left">
                        </div>
                        <div class="pull-right">
                            <p>Copyright © {{ date('Y')}} {{ config('app.name') }}</p>
                        </div>
                    </div><!-- End .footer-main-inner -->
                </footer><!-- End #footer-main -->
            </div><!-- End #content -->
        </div><!-- End #main -->
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
        integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.2/angular.min.js"
        integrity="sha512-7oYXeK0OxTFxndh0erL8FsjGvrl2VMDor6fVqzlLGfwOQQqTbYsGPv4ZZ15QHfSk80doyaM0ZJdvkyDcVO7KFA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-cookies/1.8.2/angular-cookies.min.js"
        integrity="sha512-5MlJcQrhy663S1tAEEQGHzoqqdsCIoFYA2ZLajvSeZl4uVxbBvive9hqpiIqHl3CEQfe7WlI/S1lbjsdoEBnRA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>