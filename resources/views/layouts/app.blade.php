<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ring Me</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-notifications.css') }}">
    <link rel="stylesheet" href="{{ asset('js/icheck-1/skins/all.css') }}">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn{ margin-right: 6px; }
        .team{ padding: 1px 0; }
    h6.description{
    font-weight: bold;
    letter-spacing: 2px;
    color: #999;
    border-bottom: 1px solid rgba(0, 0, 0,0.1);
    padding-bottom: 5px;
}
.modal-full.modal-dialog {
    width: 99%;
}

.white-overlay {
    background-color: rgba(255,255,255,0.85);
}
.dark-overlay {
    background-color: rgba(0,0,0,0.85);
}

.modal-content {
    border-radius: 4px !important;
}

.modal-title {
    margin-bottom: 0;
    font-weight: bold;
}

.modal-content {
    border: none;
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
    border-radius: 0 !important;
}

.modal-content .form-horizontal .control-label{
    text-align: left;
}

.modal-header, .modal-footer {
    border: none;
}

.profile{
    margin-top: 25px;
}
.profile h1{
    font-weight: normal;
    font-size: 20px;
    margin:10px 0 0 0;
}
.profile h2{
    font-size: 13px;
    margin-top: 6px;
    color: #000000;
}
.profile .img-box{
    opacity: 1;
    display: block;
    position: relative;
}
    </style>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>

</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <i class="fa fa-phone fa-lg"></i> Ring Me
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
              @if (Auth::guest())
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                 </ul>                        
                    @else
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="{{ url('/home') }}">Settings</a></li>
                    <li><a href="{{ url('/home') }}">Staff</a></li>
                </ul>
                 <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
<li class="dropdown dropdown-notifications">
            <a href="#notifications-panel" class="dropdown-toggle">
              <i data-count="2" class="glyphicon glyphicon-bell notification-icon"></i>
            </a>

            <div class="dropdown-container">

              <div class="dropdown-toolbar">
                <div class="dropdown-toolbar-actions">
                  <a href="#">Mark all as read</a>
                </div>
                <h3 class="dropdown-toolbar-title">Notifications (2)</h3>
              </div><!-- /dropdown-toolbar -->

              <ul class="dropdown-menu">
                  ...
              </ul>

              <div class="dropdown-footer text-center">
                <a href="#">View All</a>
              </div><!-- /dropdown-footer -->

            </div><!-- /dropdown-container -->
          </li><!-- /dropdown -->
                <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                 <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                </ul>
              </li>
                </ul>

                    @endif
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <script src="{{ asset('js/icheck-1/icheck.js') }}"></script>
    <script>
    $(document).ready(function(){
     $('input').iCheck({
        checkboxClass: 'icheckbox_square-grey',
        radioClass: 'iradio_square-grey',
  });
});
</script>
</body>
</html>
