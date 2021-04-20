<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <title>{{ config("app.name", "Laravel") }}</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">

  <!-- Fonts -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet" />

  <!-- Styles -->
  <link href="{{ asset('./css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('./css/bootstrap-responsive.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('./css/font-awesome.css') }}" rel="stylesheet" />
  <link href="{{ asset('./css/style.css') }}" rel="stylesheet" />
  <link href="{{ asset('./css/pages/dashboard.css') }}" rel="stylesheet" />
</head>

<body>
  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="#">Bootstrap Admin Template </a>
        <div class="nav-collapse">
          <ul class="nav pull-right">
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i>
                Account <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="javascript:;">Settings</a></li>
                <li><a href="javascript:;">Help</a></li>
              </ul>
            </li>
            @guest

            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i>
                Iniciar Sesion<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                @if (Route::has('register'))
                <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @endif
              </ul>
            </li>
            @else
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i>
                {{ Auth::user()->name }} <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <!--<li><a href="javascript:;">Profile</a></li>-->
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </li>
              </ul>
            </li>
            @endguest
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
      <!-- /container -->
    </div>
    <!-- /navbar-inner -->
  </div>
  <!-- /navbar -->
  <div class="subnavbar">
    <div class="subnavbar-inner">
      <div class="container">
        <ul class="mainnav">
          <li class="active"><a href="/home"><i class="icon-dashboard"></i><span>Dashboard</span> </a>
          </li>
          <li><a href="reports.html"><i class="icon-list-alt"></i><span>Reports</span> </a> </li>
          <li><a href="guidely.html"><i class="icon-facetime-video"></i><span>App Tour</span> </a></li>
          <li><a href="charts.html"><i class="icon-bar-chart"></i><span>Charts</span> </a> </li>
          <li><a href="shortcodes.html"><i class="icon-code"></i><span>Shortcodes</span> </a> </li>
          <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>Drops</span> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="/estado">Estados</a></li>
              <li><a href="faq.html">FAQ</a></li>
              <li><a href="pricing.html">Pricing Plans</a></li>
              <li><a href="login.html">Login</a></li>
              <li><a href="signup.html">Signup</a></li>
              <li><a href="error.html">404</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- /container -->
    </div>
    <!-- /subnavbar-inner -->
  </div>
  <!-- /subnavbar -->
  @yield('contenido')
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="{{ asset('js/jquery-1.7.2.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/excanvas.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/chart.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/bootstrap.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/full-calendar/fullcalendar.min.js') }}" type="text/javascript"></script>

  <script src="{{ asset('js/base.js') }}" type="text/javascript"></script>
  <script language="javascript" type="text/javascript">
    var lineChartData = {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [{
        fillColor: "rgba(220,220,220,0.5)",
        strokeColor: "rgba(220,220,220,1)",
        pointColor: "rgba(220,220,220,1)",
        pointStrokeColor: "#fff",
        data: [65, 59, 90, 81, 56, 55, 40]
      }, {
        fillColor: "rgba(151,187,205,0.5)",
        strokeColor: "rgba(151,187,205,1)",
        pointColor: "rgba(151,187,205,1)",
        pointStrokeColor: "#fff",
        data: [28, 48, 40, 19, 96, 27, 100]
      }]
    }
    console.log("lineChartData");

    var myLine = new Chart(document.getElementById("area-chart").getContext("2d")).Line(lineChartData);


    var barChartData = {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [{
        fillColor: "rgba(220,220,220,0.5)",
        strokeColor: "rgba(220,220,220,1)",
        data: [65, 59, 90, 81, 56, 55, 40]
      }, {
        fillColor: "rgba(151,187,205,0.5)",
        strokeColor: "rgba(151,187,205,1)",
        data: [28, 48, 40, 19, 96, 27, 100]
      }]

    }

    $(document).ready(function() {
      var date = new Date();
      var d = date.getDate();
      var m = date.getMonth();
      var y = date.getFullYear();
      var calendar = $('#calendar').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay'
        },
        selectable: true,
        selectHelper: true,
        select: function(start, end, allDay) {
          var title = prompt('Event Title:');
          if (title) {
            calendar.fullCalendar('renderEvent', {
                title: title,
                start: start,
                end: end,
                allDay: allDay
              },
              true // make the event "stick"
            );
          }
          calendar.fullCalendar('unselect');
        },
        editable: true,
        events: [{
          title: 'All Day Event',
          start: new Date(y, m, 1)
        }, {
          title: 'Long Event',
          start: new Date(y, m, d + 5),
          end: new Date(y, m, d + 7)
        }, {
          id: 999,
          title: 'Repeating Event',
          start: new Date(y, m, d - 3, 16, 0),
          allDay: false
        }, {
          id: 999,
          title: 'Repeating Event',
          start: new Date(y, m, d + 4, 16, 0),
          allDay: false
        }, {
          title: 'Meeting',
          start: new Date(y, m, d, 10, 30),
          allDay: false
        }, {
          title: 'Lunch',
          start: new Date(y, m, d, 12, 0),
          end: new Date(y, m, d, 14, 0),
          allDay: false
        }, {
          title: 'Birthday Party',
          start: new Date(y, m, d + 1, 19, 0),
          end: new Date(y, m, d + 1, 22, 30),
          allDay: false
        }, {
          title: 'EGrappler.com',
          start: new Date(y, m, 28),
          end: new Date(y, m, 29),
          url: 'http://EGrappler.com/'
        }]
      });
    });
  </script>
  <!-- /Calendar -->
  <!-- Scripts -->

</body>

</html>
