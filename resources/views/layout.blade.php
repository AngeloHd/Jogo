<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentallela Alela! | </title>

    <!-- Bootstrap core CSS -->

    <link href="{{ url('admin/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{ url('admin/fonts/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ url('admin/css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{{ url('admin/css/custom.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('admin/css/maps/jquery-jvectormap-2.0.1.css')}}" />
    <link href="{{ url('admin/css/icheck/flat/green.css')}}" rel="stylesheet" />
    <link href="{{ url('admin/css/floatexamples.css')}}" rel="stylesheet" type="text/css" />

    @yield('css')

    <script src="{{ url('admin/js/jquery.min.js')}}"></script>
    <script src="{{ url('admin/js/nprogress.js')}}"></script>
    <script>
        NProgress.start();
    </script>

</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>{{ Auth::user()->name }}</h2>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">

                                <li><a><i class="fa fa-edit"></i> Utilitarios <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="{{ route('pergunta.index') }}">Perguntas</a>
                                        </li>
                                        <li><a href="{{ route('jogo') }}">Jogar</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-danger"> <i class="bx-log-out-circle"></i>Logout</button>
                                </form>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->


            <!-- page content -->
            <div class="right_col" role="main">

                <div class="row">
                    <!--  corpo -->
                         @yield('corpo')
                </div>
                <br />

                <footer>
                    <div class="">
                        <p class="pull-right">Gentelella Alela! a Bootstrap 3 template by <a>Kimlabs</a>. |
                            <span class="lead"> <i class="fa fa-paw"></i> Gentelella Alela!</span>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
            <!-- /page content -->

        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <script src="{{ url('admin/js/bootstrap.min.js')}}"></script>

    <!-- gauge js -->
    <script type="text/javascript" src="{{ url('admin/js/gauge/gauge.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('admin/js/gauge/gauge_demo.js')}}"></script>
    <!-- chart js -->
    <script src="{{ url('admin/js/chartjs/chart.min.js')}}"></script>
    <!-- bootstrap progress js -->
    <script src="{{ url('admin/js/progressbar/bootstrap-progressbar.min.js')}}"></script>
    <script src="{{ url('admin/js/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <!-- icheck -->
    <script src="{{ url('admin/js/icheck/icheck.min.js')}}"></script>
    <!-- daterangepicker -->
    <script type="text/javascript" src="{{ url('admin/js/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('admin/js/datepicker/daterangepicker.js')}}"></script>

    <script src="{{ url('admin/js/custom.js')}}"></script>

    <!-- flot js -->
    <!--[if lte IE 8]><script type="text/javascript" src="{{ url('admin/js/excanvas.min.js')}}"></script><![endif]-->
    <script type="text/javascript" src="{{ url('admin/js/flot/jquery.flot.js')}}"></script>
    <script type="text/javascript" src="{{ url('admin/js/flot/jquery.flot.pie.js')}}"></script>
    <script type="text/javascript" src="{{ url('admin/js/flot/jquery.flot.orderBars.js')}}"></script>
    <script type="text/javascript" src="{{ url('admin/js/flot/jquery.flot.time.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('admin/js/flot/date.js')}}"></script>
    <script type="text/javascript" src="{{ url('admin/js/flot/jquery.flot.spline.js')}}"></script>
    <script type="text/javascript" src="{{ url('admin/js/flot/jquery.flot.stack.js')}}"></script>
    <script type="text/javascript" src="{{ url('admin/js/flot/curvedLines.js')}}"></script>
    <script type="text/javascript" src="{{ url('admin/js/flot/jquery.flot.resize.js')}}"></script>

    <!-- worldmap -->
    <script type="text/javascript" src="{{ url('admin/js/maps/jquery-jvectormap-2.0.1.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('admin/js/maps/gdp-data.js')}}"></script>
    <script type="text/javascript" src="{{ url('admin/js/maps/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script type="text/javascript" src="{{ url('admin/js/maps/jquery-jvectormap-us-aea-en.js')}}"></script>
    <script>
        $(function () {
            $('#world-map-gdp').vectorMap({
                map: 'world_mill_en',
                backgroundColor: 'transparent',
                zoomOnScroll: false,
                series: {
                    regions: [{
                        values: gdpData,
                        scale: ['#E6F2F0', '#149B7E'],
                        normalizeFunction: 'polynomial'
                    }]
                },
                onRegionTipShow: function (e, el, code) {
                    el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
                }
            });
        });
    </script>
    <!-- skycons -->
    <script src="{{ url('admin/js/skycons/skycons.js')}}"></script>
    <script>
        var icons = new Skycons({
                "color": "#73879C"
            }),
            list = [
                "clear-day", "clear-night", "partly-cloudy-day",
                "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                "fog"
            ],
            i;

        for (i = list.length; i--;)
            icons.set(list[i], list[i]);

        icons.play();
    </script>

    <!-- dashbord linegraph -->
    <script>
        var doughnutData = [
            {
                value: 30,
                color: "#455C73"
            },
            {
                value: 30,
                color: "#9B59B6"
            },
            {
                value: 60,
                color: "#BDC3C7"
            },
            {
                value: 100,
                color: "#26B99A"
            },
            {
                value: 120,
                color: "#3498DB"
            }
    ];
        var myDoughnut = new Chart(document.getElementById("canvas1").getContext("2d")).Doughnut(doughnutData);
    </script>
    <!-- /dashbord linegraph -->
    <!-- datepicker -->
    <script type="text/javascript">
        $(document).ready(function () {

            var cb = function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
            }

            var optionSet1 = {
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2015',
                dateLimit: {
                    days: 60
                },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'left',
                buttonClasses: ['btn btn-default'],
                applyClass: 'btn-small btn-primary',
                cancelClass: 'btn-small',
                format: 'MM/DD/YYYY',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Clear',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            };
            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
            $('#reportrange').daterangepicker(optionSet1, cb);
            $('#reportrange').on('show.daterangepicker', function () {
                console.log("show event fired");
            });
            $('#reportrange').on('hide.daterangepicker', function () {
                console.log("hide event fired");
            });
            $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
                console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
            });
            $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
                console.log("cancel event fired");
            });
            $('#options1').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
            });
            $('#options2').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
            });
            $('#destroy').click(function () {
                $('#reportrange').data('daterangepicker').remove();
            });
        });
    </script>
    <script>
        NProgress.done();
    </script>
     @yield('js')
    <!-- /datepicker -->
    <!-- /footer content -->
</body>

</html>