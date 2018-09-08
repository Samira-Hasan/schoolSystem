<html lang="en"><head><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>School Management System 1.2</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="http://public/css/sb-admin.css" rel="stylesheet">
    <link href="http://public/css/morris.css" rel="stylesheet">

    <link href="http://demo.swot.co.in/sms/public/font-awesome/css/font-awesome.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
    <script src="http://demo.swot.co.in/sms/public/js/sortable.js"></script>



    <script>
        $('.tool-tip').tooltip()
    </script>
    <!-- Fonts -->
    <link href="//fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        <!--
        tr.ok td{
            text-decoration: line-through;
        }



        -->
    </style>

    <script src="/google_analytics_auto.js"></script></head>
<body>
<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://demo.swot.co.in/sms/public/home">
                <img src="http://demo.swot.co.in/sms/public/images/sms-logo.png" class="img-responsive" style="width:80%" alt="SMS 2.0">
            </a>


        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-line-chart"></i>      Reports  <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="http://demo.swot.co.in/sms/public/report/revenue"><i class="fa fa-line-chart"></i>&nbsp;Revenue Stat </a></li>
                    <li><a href="http://demo.swot.co.in/sms/public/report/growth"><i class="fa fa-w fa-bar-chart-o"></i>&nbsp;Growth Report </a></li>
                    <li><a href="http://demo.swot.co.in/sms/public/report/libstats"><i class="fa fa-pie-chart"></i>&nbsp;Library Stats </a></li>
                    <li><a href="http://demo.swot.co.in/sms/public/salary/report"><i class="fa fa-money"></i>&nbsp;Salary Stats</a></li>
                    <li><a href="http://demo.swot.co.in/sms/public/fees/report"><span class="glyphicon glyphicon-search"></span>&nbsp;Fees Report</a></li>


                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i>      Settings  <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="http://demo.swot.co.in/sms/public/subjects"><i class="fa fa-tasks"></i>&nbsp;Subject</a></li>

                    <li><a href="http://demo.swot.co.in/sms/public/exams"><i class="fa fa-tasks"></i>&nbsp;Exam </a></li>



                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>      Karthik  <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <!--<li>
                            <a href="http://demo.swot.co.in/sms/public/auth/profile"><i class="fa fa-fw fa-user"></i> Change Password</a>
                        </li> -->

                    <li>
                        <a href="http://demo.swot.co.in/sms/public/auth/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">


                <li>
                    <a href="javascript:;" class="mtop" data-toggle="collapse" data-target="#stu">   <i class="fa fa-graduation-cap"></i>&nbsp;&nbsp;Students <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="stu" class="collapse">
                        <li>
                            <a href="http://demo.swot.co.in/sms/public/student"><span class="glyphicon glyphicon-user"></span>&nbsp;Student List</a>
                        </li>
                        <li><a href="http://demo.swot.co.in/sms/public/student/create"> <span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;&nbsp;New Admission</a></li>

                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="mtop" data-toggle="collapse" data-target="#fee">   <i class="fa fa-graduation-cap"></i>&nbsp;&nbsp;Fees <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="fee" class="collapse">
                        <li>
                            <a href="http://demo.swot.co.in/sms/public/fees"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Fees List</a>
                        </li>
                        <li><a href="http://demo.swot.co.in/sms/public/fees/create"><i class="fa fa-plus"></i> Fee Entry</a></li>
                        <li><a href="http://demo.swot.co.in/sms/public/fees/report"><span class="glyphicon glyphicon-search"></span>&nbsp;Fees Report</a></li>
                    </ul>
                </li>



                <li>
                    <a href="javascript:;" class="mtop" data-toggle="collapse" data-target="#classes"> <span class="glyphicon glyphicon-bell"></span>&nbsp;&nbsp;&nbsp;Class<span class="caret"></span> </a>
                    <ul id="classes" class="collapse">
                        <li><a href="http://demo.swot.co.in/sms/public/class"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Class List</a></li>


                        <li><a href="http://demo.swot.co.in/sms/public/class/create"><i class="fa fa-plus"></i> Add Class</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:;" class="mtop" data-toggle="collapse" data-target="#marks"> <span class="glyphicon glyphicon-stats"></span>&nbsp;&nbsp;&nbsp;Marks<span class="caret"></span> </a>
                    <ul id="marks" class="collapse">
                        <li><a href="http://demo.swot.co.in/sms/public/marks"><span class="glyphicon glyphicon-list-alt"></span> &nbsp;Marks list</a></li>
                        <li><a href="http://demo.swot.co.in/sms/public/rank"><span class="glyphicon glyphicon-th-list"></span> &nbsp;Rank list</a></li>



                        <li><a href="http://demo.swot.co.in/sms/public/marks/create"><i class="fa fa-plus"></i> Add Marks</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:;" class="mtop" data-toggle="collapse" data-target="#teachers"> <i class="fa fa-users"></i>&nbsp;&nbsp;Teachers<span class="caret"></span> </a>
                    <ul id="teachers" class="collapse">
                        <li><a href="http://demo.swot.co.in/sms/public/teacherslist"> <span class="glyphicon glyphicon-list-alt"></span> Teachers List</a></li>
                        <li><a href="http://demo.swot.co.in/sms/public/teachers/create"><i class="fa fa-plus"></i> Add Teacher</a></li>

                        <li><a href="http://demo.swot.co.in/sms/public/teachers/salaries"><i class="fa fa-usd"></i>&nbsp;Teacher's Salary List</a></li>
                        <li><a href="http://demo.swot.co.in/sms/public/teachers/salary"><i class="fa fa-plus"></i> Add Teacher Salary</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:;" class="mtop" data-toggle="collapse" data-target="#staffs"> <i class="fa fa-users"></i> &nbsp;Staffs<span class="caret"></span> </a>
                    <ul id="staffs" class="collapse">

                        <li><a href="http://demo.swot.co.in/sms/public/staffslist"> <span class="glyphicon glyphicon-th-list"></span> Staffs List</a></li>
                        <li><a href="http://demo.swot.co.in/sms/public/staffs/create"><i class="fa fa-plus"></i> Add Staff</a></li>

                        <li><a href="http://demo.swot.co.in/sms/public/staffs/salaries"><i class="fa fa-inr"></i> &nbsp;Staff's Salary List</a></li>
                        <li><a href="http://demo.swot.co.in/sms/public/staffs/salary"><i class="fa fa-plus"></i> Add Staff Salary</a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript:;" class="mtop" data-toggle="collapse" data-target="#events"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Events<span class="caret"></span> </a>
                    <ul id="events" class="collapse">
                        <li><a href="http://demo.swot.co.in/sms/public/events"><i class="fa fa-calendar"></i>&nbsp;Events list </a></li>




                        <li><a href="http://demo.swot.co.in/sms/public/events/create"><i class="fa fa-plus"></i> Add Events</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:;" class="mtop" data-toggle="collapse" data-target="#scholar"> <i class="fa fa-gift"></i>&nbsp;&nbsp;Scholarship<span class="caret"></span> </a>
                    <ul id="scholar" class="collapse">
                        <li><a href="http://demo.swot.co.in/sms/public/scholar"><i class="fa fa-gift"></i>Scholarship list </a></li>
                        <li><a href="http://demo.swot.co.in/sms/public/scholar/create"><i class="fa fa-plus"></i> Add Scholarship</a></li>

                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="mtop" data-toggle="collapse" data-target="#timetable"><i class="fa fa-clock-o"></i>&nbsp;&nbsp;Time Table<span class="caret"></span> </a>
                    <ul id="timetable" class="collapse">
                        <li><a href="http://demo.swot.co.in/sms/public/timetables"><i class="fa fa-clock-o"></i> TimeTable list </a></li>
                        <li><a href="http://demo.swot.co.in/sms/public/timetable/create"><i class="fa fa-plus"></i> Add TimeTable</a></li>


                    </ul>
                </li>

                <li>
                    <a href="javascript:;" class="mtop" data-toggle="collapse" data-target="#library"><i class="fa fa-book"></i>&nbsp;&nbsp;Library Management<span class="caret"></span> </a>
                    <ul id="library" class="collapse">
                        <li><a href="http://demo.swot.co.in/sms/public/books"><i class="fa fa-book"></i>&nbsp;Books List</a></li>
                        <li><a href="http://demo.swot.co.in/sms/public/books/create"><i class="fa fa-plus"></i> Add Books</a></li>
                        <li><a href="http://demo.swot.co.in/sms/public/authors"><i class="fa fa-tasks"></i>&nbsp;Authors list </a></li>



                        <li><a href="http://demo.swot.co.in/sms/public/publishers"><i class="fa fa-tasks"></i>&nbsp;Publishers list </a></li>

                        <li><a href="http://demo.swot.co.in/sms/public/books/booksissue"><i class="fa fa-paper-plane"></i>&nbsp;Issue List</a></li>
                        <li><a href="http://demo.swot.co.in/sms/public/books/issuebooks"><i class="fa fa-plus"></i> Issue Books</a></li>
                        <li><a href="http://demo.swot.co.in/sms/public/books/returnbooks"><i class="fa fa-paper-plane"></i>&nbsp;Return Books</a></li>
                        <li><a href="http://demo.swot.co.in/sms/public/books/issualreport"><i class="fa fa-check-square"></i>&nbsp;Issual Report</a></li>
                        <li><a href="http://demo.swot.co.in/sms/public/books/duereport"><i class="fa fa-check-square-o"></i>&nbsp;Due Report</a></li>
                        <li><a href="http://demo.swot.co.in/sms/public/books/topbooks"><i class="fa fa-book"></i>&nbsp;Top Books</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="mtop" data-toggle="collapse" data-target="#attendance"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Attendance<span class="caret"></span> </a>
                    <ul id="attendance" class="collapse">
                        <li><a href="http://demo.swot.co.in/sms/public/attendance/report"><i class="fa fa-th"></i>&nbsp;Student  Report</a></li>
                        <li><a href="http://demo.swot.co.in/sms/public/attendance"><i class="fa fa-plus"></i>&nbsp; Student Attendance </a></li>
                        <li><a href="http://demo.swot.co.in/sms/public/attendance/teacherreport"><i class="fa fa-th"></i>&nbsp;Teacher  Report</a></li>
                        <li><a href="http://demo.swot.co.in/sms/public/attendance/teacher"><i class="fa fa-plus"></i>&nbsp; Teacher Attendance </a></li>
                        <li><a href="http://demo.swot.co.in/sms/public/attendance/staffreport"><i class="fa fa-th"></i>&nbsp;&nbsp;Staff Report</a></li>
                        <li><a href="http://demo.swot.co.in/sms/public/attendance/staff"><i class="fa fa-plus"></i>&nbsp;Staff Attendance </a></li>
                        <li><a href="http://demo.swot.co.in/sms/public/attendance/classreport"><i class="fa fa-th"></i>&nbsp;Class Attendance</a></li>
                        <li><a href="http://demo.swot.co.in/sms/public/attendance/dayreport"><i class="fa fa-th"></i>&nbsp;Class Attendance/Day </a></li>


                    </ul>
                </li>



            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
    <div id="page-wrapper">

        <div class="container-fluid">



            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Dashboard
                    </h1>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">

                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-th-large fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">4</div>
                                    <div>Classes</div>
                                </div>
                            </div>
                        </div>
                        <a href="http://demo.swot.co.in/sms/public/class">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">10</div>
                                    <div>Total Students</div>
                                </div>
                            </div>
                        </div>
                        <a href="http://demo.swot.co.in/sms/public/student">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">4</div>
                                    <div>Teachers</div>
                                </div>
                            </div>
                        </div>
                        <a href="http://demo.swot.co.in/sms/public/student">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-book fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">86</div>
                                    <div>Books</div>
                                </div>
                            </div>
                        </div>
                        <a href="http://demo.swot.co.in/sms/public/books">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-lg-6">


                    <div id="pieChart" class="chart"></div>
                    <h4>Library Stats:</h4>
                    <div id="donut-example"><svg height="342" version="1.1" width="799" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="none" stroke="#4b4ba0" d="M399.5,282.5A109,109,0,1,0,381.8446544864663,281.0606283674363" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#4b4ba0" stroke="#ffffff" d="M399.5,285.5A112,112,0,1,0,381.3587275457269,284.02101263443L373.8268599642653,329.90696877283176A158.5,158.5,0,1,1,399.5,332Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#5cb85c" d="M381.8446544864663,281.0606283674363A109,109,0,0,0,394.4675462239234,282.38376558969503" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#5cb85c" stroke="#ffffff" d="M381.3587275457269,284.02101263443A112,112,0,0,0,394.32903832182956,285.38056647748476L391.9513193358851,336.82564838454255A163.5,163.5,0,0,1,373.0169817296995,334.8409425511545Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#d9534f" d="M394.4675462239234,282.38376558969503A109,109,0,0,0,399.46575664063926,282.49999462106564" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#d9534f" stroke="#ffffff" d="M394.32903832182956,285.38056647748476A112,112,0,0,0,399.4648141628587,285.4999944730216L399.4502057572598,331.9999921783386A158.5,158.5,0,0,1,392.1821658393749,331.83098023822623Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="399.5" y="163.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 800 15px Arial;" font-size="15px" font-weight="800" transform="matrix(2.4773,0,0,2.4773,-590.1589,-257.7841)" stroke-width="0.4036697247706422"><tspan dy="6" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Lend</tspan></text><text x="399.5" y="183.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 14px Arial;" font-size="14px" transform="matrix(2.2708,0,0,2.2708,-507.6781,-223.0313)" stroke-width="0.4403669724770642"><tspan dy="5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">1</tspan></text></svg></div>

                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <h4>Revenue Stats:</h4>
                        <div id="line-example" style="position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="342" version="1.1" width="814" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="42.84375" y="308" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.34375,308H789" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.84375" y="237.25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">750</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.34375,237.25H789" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.84375" y="166.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">1,500</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.34375,166.5H789" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.84375" y="95.75" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2,250</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.34375,95.75H789" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.84375" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">3,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.34375,25H789" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="789" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">9</tspan></text><text x="642.26875" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">8</tspan></text><text x="495.53749999999997" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">7</tspan></text><text x="348.80625" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">6</tspan></text><text x="202.075" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">5</tspan></text><text x="55.34375" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">4</tspan></text><path fill="none" stroke="#4b4ba0" d="M55.34375,308C92.0265625,308,165.39218749999998,308,202.075,308C238.7578125,308,312.12343749999997,308,348.80625,308C385.4890625,308,458.85468749999995,308,495.53749999999997,308C532.2203125,308,605.5859375,308,642.26875,308C678.9515624999999,308,752.3171875,308,789,308" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#4b4ba0" d="M55.34375,308C92.0265625,308,165.39218749999998,308,202.075,308C238.7578125,308,312.12343749999997,308,348.80625,308C385.4890625,308,458.85468749999995,308,495.53749999999997,308C532.2203125,308,605.5859375,308,642.26875,308C678.9515624999999,272.625,752.3171875,95.75,789,25" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="55.34375" cy="308" r="4" fill="#4b4ba0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="202.075" cy="308" r="4" fill="#4b4ba0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="348.80625" cy="308" r="4" fill="#4b4ba0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="495.53749999999997" cy="308" r="7" fill="#4b4ba0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="642.26875" cy="308" r="4" fill="#4b4ba0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="789" cy="308" r="4" fill="#4b4ba0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="55.34375" cy="308" r="4" fill="#4b4ba0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="202.075" cy="308" r="4" fill="#4b4ba0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="348.80625" cy="308" r="4" fill="#4b4ba0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="495.53749999999997" cy="308" r="7" fill="#4b4ba0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="642.26875" cy="308" r="4" fill="#4b4ba0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="789" cy="25" r="4" fill="#4b4ba0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 457.537px; top: 223px;"><div class="morris-hover-row-label">7</div><div class="morris-hover-point" style="color: #4B4BA0">
                                    Income:
                                    0
                                </div><div class="morris-hover-point" style="color: #4B4BA0">
                                    Expense:
                                    0
                                </div></div></div>
                    </div>
                </div>

            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-6">
                    <h4>Growth Stats:</h4>
                    <div id="bar-example" style="position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="342" version="1.1" width="799" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="19.5" y="308" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M32,308H774" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="19.5" y="237.25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2</tspan></text><path fill="none" stroke="#aaaaaa" d="M32,237.25H774" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="19.5" y="166.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">4</tspan></text><path fill="none" stroke="#aaaaaa" d="M32,166.5H774" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="19.5" y="95.75" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">6</tspan></text><path fill="none" stroke="#aaaaaa" d="M32,95.75H774" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="19.5" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">8</tspan></text><path fill="none" stroke="#aaaaaa" d="M32,25H774" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="712.1666666666666" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2018</tspan></text><text x="588.5" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2017</tspan></text><text x="464.8333333333333" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2016</tspan></text><text x="341.1666666666667" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2015</tspan></text><text x="217.5" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2014</tspan></text><text x="93.83333333333334" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan></text><rect x="47.458333333333336" y="308" width="92.75" height="0" r="0" rx="0" ry="0" fill="#4b4ba0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="171.12500000000003" y="308" width="92.75" height="0" r="0" rx="0" ry="0" fill="#4b4ba0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="294.7916666666667" y="25" width="92.75" height="283" r="0" rx="0" ry="0" fill="#4b4ba0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="418.4583333333333" y="237.25" width="92.75" height="70.75" r="0" rx="0" ry="0" fill="#4b4ba0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="542.1250000000001" y="308" width="92.75" height="0" r="0" rx="0" ry="0" fill="#4b4ba0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="665.7916666666667" y="308" width="92.75" height="0" r="0" rx="0" ry="0" fill="#4b4ba0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect></svg><div class="morris-hover morris-default-style" style="left: 55.3333px; top: 145px;"><div class="morris-hover-row-label">2013</div><div class="morris-hover-point" style="color: #4B4BA0">
                                Students:
                                0
                            </div></div></div>
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-default" style="height:350px;">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Tasks Panel</h3>
                        </div>
                        <div class="panel-body">
                            <div class="list-group">

                                <a href="#" class="list-group-item">
                                    <span class="badge">2016-01-09 14:54:34</span>
                                    <i class="fa fa-fw fa-check"></i>Event Added
                                </a>

                                <a href="#" class="list-group-item">
                                    <span class="badge">2016-01-09 14:36:39</span>
                                    <i class="fa fa-fw fa-check"></i>Teacher Added
                                </a>



                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <!--	Welcome back Karthik,<br /> -->


            <!-- /.row -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"> </script>
            <script src="http://demo.swot.co.in/sms/public/js/morris/raphael.min.js"></script>
            <script src="http://demo.swot.co.in/sms/public/js/morris/morris.min.js"></script>
            <script src="http://demo.swot.co.in/sms/public/js/morris/morris-data.js"></script>

            <script>
                Morris.Donut({
                    element: 'donut-example',
                    data: [
                        {label: "Books", value:86},
                        {label: "Lend", value:1},
                        {label: "Today Issue", value:0}
                    ] ,
                    colors:['#4B4BA0', '#5CB85C','#D9534F'],
                });

            </script>



            <script type="text/javascript">
                Morris.Line({
                    element: 'line-example',
                    data: [





                        { m: 4, a: 0, b: 0 },






                        { m: 5, a: 0, b: 0 },






                        { m: 6, a: 0, b: 0 },






                        { m: 7, a: 0, b: 0 },






                        { m: 8, a: 0, b: 0 },






                        { m: 9, a: 3000, b: 0 },






                    ],
                    xkey: 'm',
                    ykeys: ['a', 'b'],
                    parseTime:false,
                    lineColors: ['#4B4BA0','#4B4BA0'],


                    labels: ['Income', 'Expense']
                });

            </script>
            <script>

                Morris.Bar({
                    element: 'bar-example',
                    data: [
                        { y: 2013, a:0 },
                        { y: 2014, a:0 },
                        { y: 2015, a:8 },
                        { y: 2016, a:2 },
                        { y: 2017, a:0 },
                        { y: 2018, a:0 },
                    ],
                    xkey: 'y',
                    ykeys: ['a'],
                    labels: ['Students'],
                    barColors: ["#4B4BA0"],
                });

            </script>





            <script>
                $(function(){

                    $("#pieChart").drawPieChart([
                        { title: "Cash",              value : 40,  color: "#2C3E50" },
                        { title: "Fixed Interest",    value:  8,   color: "#fe4400" },
                        { title: "Property",          value:  24,   color: "#018ab6" },
                        { title: "Australian shares", value : 16,   color: "#fff100" },
                        { title: "Intl. shares",      value : 12,   color: "#D7DADB" }
                    ]);
                });

                /*!
                 * jquery.drawPieChart.js
                 * Version: 0.3(Beta)
                 * Inspired by Chart.js(http://www.chartjs.org/)
                 *
                 * Copyright 2013 hiro
                 * https://github.com/githiro/drawPieChart
                 * Released under the MIT license.
                 */
                (function($, undefined) {
                    $.fn.drawPieChart = function(data, options) {

                        var $this = this,
                                W = $this.width(),
                                H = $this.height(),
                                centerX = W/2,
                                centerY = H/2,
                                cos = Math.cos,
                                sin = Math.sin,
                                PI = Math.PI,
                                settings = $.extend({
                                    segmentShowStroke : true,
                                    segmentStrokeColor : "#fff",
                                    segmentStrokeWidth : 1,
                                    baseColor: "#fff",
                                    baseOffset: 15,
                                    edgeOffset: 30,//offset from edge of $this
                                    pieSegmentGroupClass: "pieSegmentGroup",
                                    pieSegmentClass: "pieSegment",
                                    lightPiesOffset: 12,//lighten pie's width
                                    lightPiesOpacity: .3,//lighten pie's default opacity
                                    lightPieClass: "lightPie",
                                    animation : true,
                                    animationSteps : 90,
                                    animationEasing : "easeInOutExpo",
                                    tipOffsetX: -15,
                                    tipOffsetY: -45,
                                    tipClass: "pieTip",
                                    beforeDraw: function(){  },
                                    afterDrawed : function(){  },
                                    onPieMouseenter : function(e,data){  },
                                    onPieMouseleave : function(e,data){  },
                                    onPieClick : function(e,data){  }
                                }, options),
                                animationOptions = {
                                    linear : function (t){
                                        return t;
                                    },
                                    easeInOutExpo: function (t) {
                                        var v = t<.5 ? 8*t*t*t*t : 1-8*(--t)*t*t*t;
                                        return (v>1) ? 1 : v;
                                    }
                                },
                                requestAnimFrame = function(){
                                    return window.requestAnimationFrame ||
                                            window.webkitRequestAnimationFrame ||
                                            window.mozRequestAnimationFrame ||
                                            window.oRequestAnimationFrame ||
                                            window.msRequestAnimationFrame ||
                                            function(callback) {
                                                window.setTimeout(callback, 1000 / 60);
                                            };
                                }();

                        var $wrapper = $('<svg width="' + W + '" height="' + H + '" viewBox="0 0 ' + W + ' ' + H + '" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"></svg>').appendTo($this);
                        var $groups = [],
                                $pies = [],
                                $lightPies = [],
                                easingFunction = animationOptions[settings.animationEasing],
                                pieRadius = Min([H/2,W/2]) - settings.edgeOffset,
                                segmentTotal = 0;

                        //Draw base circle
                        var drawBasePie = function(){
                            var base = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
                            var $base = $(base).appendTo($wrapper);
                            base.setAttribute("cx", centerX);
                            base.setAttribute("cy", centerY);
                            base.setAttribute("r", pieRadius+settings.baseOffset);
                            base.setAttribute("fill", settings.baseColor);
                        }();

                        //Set up pie segments wrapper
                        var pathGroup = document.createElementNS('http://www.w3.org/2000/svg', 'g');
                        var $pathGroup = $(pathGroup).appendTo($wrapper);
                        $pathGroup[0].setAttribute("opacity",0);

                        //Set up tooltip
                        var $tip = $('<div class="' + settings.tipClass + '" />').appendTo('body').hide(),
                                tipW = $tip.width(),
                                tipH = $tip.height();

                        for (var i = 0, len = data.length; i < len; i++){
                            segmentTotal += data[i].value;
                            var g = document.createElementNS('http://www.w3.org/2000/svg', 'g');
                            g.setAttribute("data-order", i);
                            g.setAttribute("class", settings.pieSegmentGroupClass);
                            $groups[i] = $(g).appendTo($pathGroup);
                            $groups[i]
                                    .on("mouseenter", pathMouseEnter)
                                    .on("mouseleave", pathMouseLeave)
                                    .on("mousemove", pathMouseMove)
                                    .on("click", pathClick);

                            var p = document.createElementNS('http://www.w3.org/2000/svg', 'path');
                            p.setAttribute("stroke-width", settings.segmentStrokeWidth);
                            p.setAttribute("stroke", settings.segmentStrokeColor);
                            p.setAttribute("stroke-miterlimit", 2);
                            p.setAttribute("fill", data[i].color);
                            p.setAttribute("class", settings.pieSegmentClass);
                            $pies[i] = $(p).appendTo($groups[i]);

                            var lp = document.createElementNS('http://www.w3.org/2000/svg', 'path');
                            lp.setAttribute("stroke-width", settings.segmentStrokeWidth);
                            lp.setAttribute("stroke", settings.segmentStrokeColor);
                            lp.setAttribute("stroke-miterlimit", 2);
                            lp.setAttribute("fill", data[i].color);
                            lp.setAttribute("opacity", settings.lightPiesOpacity);
                            lp.setAttribute("class", settings.lightPieClass);
                            $lightPies[i] = $(lp).appendTo($groups[i]);
                        }

                        settings.beforeDraw.call($this);
                        //Animation start
                        triggerAnimation();

                        function pathMouseEnter(e){
                            var index = $(this).data().order;
                            $tip.text(data[index].title + ": " + data[index].value).fadeIn(200);
                            if ($groups[index][0].getAttribute("data-active") !== "active"){
                                $lightPies[index].animate({opacity: .8}, 180);
                            }
                            settings.onPieMouseenter.apply($(this),[e,data]);
                        }
                        function pathMouseLeave(e){
                            var index = $(this).data().order;
                            $tip.hide();
                            if ($groups[index][0].getAttribute("data-active") !== "active"){
                                $lightPies[index].animate({opacity: settings.lightPiesOpacity}, 100);
                            }
                            settings.onPieMouseleave.apply($(this),[e,data]);
                        }
                        function pathMouseMove(e){
                            $tip.css({
                                top: e.pageY + settings.tipOffsetY,
                                left: e.pageX - $tip.width() / 2 + settings.tipOffsetX
                            });
                        }
                        function pathClick(e){
                            var index = $(this).data().order;
                            var targetGroup = $groups[index][0];
                            for (var i = 0, len = data.length; i < len; i++){
                                if (i === index) continue;
                                $groups[i][0].setAttribute("data-active","");
                                $lightPies[i].css({opacity: settings.lightPiesOpacity});
                            }
                            if (targetGroup.getAttribute("data-active") === "active"){
                                targetGroup.setAttribute("data-active","");
                                $lightPies[index].css({opacity: .8});
                            } else {
                                targetGroup.setAttribute("data-active","active");
                                $lightPies[index].css({opacity: 1});
                            }
                            settings.onPieClick.apply($(this),[e,data]);
                        }
                        function drawPieSegments (animationDecimal){
                            var startRadius = -PI/2,//-90 degree
                                    rotateAnimation = 1;
                            if (settings.animation) {
                                rotateAnimation = animationDecimal;//count up between0~1
                            }

                            $pathGroup[0].setAttribute("opacity",animationDecimal);

                            //draw each path
                            for (var i = 0, len = data.length; i < len; i++){
                                var segmentAngle = rotateAnimation * ((data[i].value/segmentTotal) * (PI*2)),//start radian
                                        endRadius = startRadius + segmentAngle,
                                        largeArc = ((endRadius - startRadius) % (PI * 2)) > PI ? 1 : 0,
                                        startX = centerX + cos(startRadius) * pieRadius,
                                        startY = centerY + sin(startRadius) * pieRadius,
                                        endX = centerX + cos(endRadius) * pieRadius,
                                        endY = centerY + sin(endRadius) * pieRadius,
                                        startX2 = centerX + cos(startRadius) * (pieRadius + settings.lightPiesOffset),
                                        startY2 = centerY + sin(startRadius) * (pieRadius + settings.lightPiesOffset),
                                        endX2 = centerX + cos(endRadius) * (pieRadius + settings.lightPiesOffset),
                                        endY2 = centerY + sin(endRadius) * (pieRadius + settings.lightPiesOffset);
                                var cmd = [
                                    'M', startX, startY,//Move pointer
                                    'A', pieRadius, pieRadius, 0, largeArc, 1, endX, endY,//Draw outer arc path
                                    'L', centerX, centerY,//Draw line to the center.
                                    'Z'//Cloth path
                                ];
                                var cmd2 = [
                                    'M', startX2, startY2,
                                    'A', pieRadius + settings.lightPiesOffset, pieRadius + settings.lightPiesOffset, 0, largeArc, 1, endX2, endY2,//Draw outer arc path
                                    'L', centerX, centerY,
                                    'Z'
                                ];
                                $pies[i][0].setAttribute("d",cmd.join(' '));
                                $lightPies[i][0].setAttribute("d", cmd2.join(' '));
                                startRadius += segmentAngle;
                            }
                        }

                        var animFrameAmount = (settings.animation)? 1/settings.animationSteps : 1,//if settings.animationSteps is 10, animFrameAmount is 0.1
                                animCount =(settings.animation)? 0 : 1;
                        function triggerAnimation(){
                            if (settings.animation) {
                                requestAnimFrame(animationLoop);
                            } else {
                                drawPieSegments(1);
                            }
                        }
                        function animationLoop(){
                            animCount += animFrameAmount;//animCount start from 0, after "settings.animationSteps"-times executed, animCount reaches 1.
                            drawPieSegments(easingFunction(animCount));
                            if (animCount < 1){
                                requestAnimFrame(arguments.callee);
                            } else {
                                settings.afterDrawed.call($this);
                            }
                        }
                        function Max(arr){
                            return Math.max.apply(null, arr);
                        }
                        function Min(arr){
                            return Math.min.apply(null, arr);
                        }
                        return $this;
                    };
                })(jQuery);

            </script>






        </div>
    </div>
</div>

<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.0.3/js/buttons.flash.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/buttons/1.0.3/js/buttons.html5.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.0.3/js/buttons.print.min.js"></script>







<script>
    $('[data-toggle="tooltip"]').tooltip({
        'placement': 'top'
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        orientation: 'auto top',
        startDate: '+1d'
    });
</script>
<script>
    $(function () {
        // bind change event to select
        $('#group_select').bind('change', function () {
            var url = $(this).val(); // get selected value
            if (url) { // require a URL
                window.location = url; // redirect
            }

            return false;
        });
        $('#milestone_select').bind('change', function () {
            var url = $(this).val(); // get selected value
            if (url) { // require a URL
                window.location = url; // redirect
            }

            return false;
        });
        $('#priority_select').bind('change', function () {
            var url = $(this).val(); // get selected value
            if (url) { // require a URL
                window.location = url; // redirect
            }

            return false;
        });
    });
</script>
<!--AngularJS-->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.12/angular.min.js"></script>
<script src="js/app.js"></script>




</body></html>