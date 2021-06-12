<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets-home/img/favicon.png">
  <link rel="icon" type="image/png" href="assets-home/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Patient Profile
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{asset('assets-user/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('assets-user/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('assets-user/demo/demo.css')}}" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="{{asset('assets-home/img/favicon.png')}}">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="/patient" class="simple-text logo-normal">
          DadeLab
          <!-- <div class="logo-image-big">
            <img src="assets-user/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <div class="container">
          <img class="mt-3 mb-2" src="{{asset('assets-user/img/1533790.png')}}" alt="">
        </div>
        <table class="table borderless">
          <tr>
              <td><b>Name: </b></td>
              <td >{{ Auth::user()->name }}</td>
          </tr>
          <tr>
              <td><b>ID: </b></td>
              <td >P0001<span id="docsID"></span></td>
          </tr>
          <tr>
              <td><b>Phone: </b></td>
              <td id="docphone">032128312</td>
          </tr>
          <tr>
            <td><b>Gender: </b></td>
            <td id="docphone">Male</td>
          </tr>
          <tr>
            <td><b>Date of Birth: </b></td>
            <td id="docphone">19-08-1990</td>
          </tr>
      </table>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Patient Profile</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Logout</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                  </a> 
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>               
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title col-md-6">Appointment</h5>
              </div>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Patient Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Symtom</th>
                    <th scope="col">Appointment Date</th>
                    <th scope="col">Phone Number</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Sok San</td>
                    <td>Male</td>
                    <td>Stomache probably cancer</td>
                    <td>23-05-2021</td>
                    <td>032128312</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">History</h5>
              </div>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Diagnoses</th>
                    <th scope="col">Symptom</th>
                    <th scope="col">Appointment Date</th>
                    <th scope="col">Prescription</th>
                    <th scope="col">Doctor</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Stomache</td>
                    <td>Threw up and hurt in the stomach</td>
                    <td>01-05-2021</td>
                    <td>Dolypran and pain reliever</td>
                    <td>Doctor Sam</td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Stomache</td>
                    <td>Stomache</td>
                    <td>01-04-2021</td>
                    <td>Dolypran and pain reliever</td>
                    <td>Doctor Sam</td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Stomache</td>
                    <td>Threw up and hurt in the stomach</td>
                    <td>01-03-2021</td>
                    <td>Dolypran and pain reliever</td>
                    <td>Doctor Sam</td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Stomache</td>
                    <td>Threw up and hurt in the stomach</td>
                    <td>01-02-2021</td>
                    <td>Dolypran and pain reliever</td>
                    <td>Doctor Sam</td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Stomache</td>
                    <td>Threw up and hurt in the stomach</td>
                    <td>01-01-2021</td>
                    <td>Dolypran and pain reliever</td>
                    <td>Doctor Sam</td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Stomache</td>
                    <td>stomachache</td>
                    <td>01-12-2020</td>
                    <td>Dolypran and pain reliever</td>
                    <td>Doctor Sam</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('assets-user/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('assets-user/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets-user/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets-user/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{asset('assets-user/js/plugins/chartjs.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('assets-user/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('assets-user/js/paper-dashboard.min.js?v=2.0.1')}}" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('assets-user/demo/demo.js')}}"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>
