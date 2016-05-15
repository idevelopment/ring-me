<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Ring Me</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-notifications.css') }}">
    <link rel="stylesheet" href="{{ asset('js/icheck-1/skins/all.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

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
                    <li><a href="{{ url('/home') }}">{{ trans('app.home')}}</a></li>
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
                    <li><a href="{{ url('/home') }}">{{ trans('app.home')}}</a></li>
                    <li><a href="{{ url('/customers') }}">{{ trans('app.customers')}}</a></li>                    
                    <li><a href="{{ url('/settings') }}">{{ trans('app.settings')}}</a></li>
                    <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ trans('app.settings')}} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="navbar-menu-item">
               <div class="label">{{ Lang::get('app.staff') }}</div>
            </li>          
            <li><a href="">{{ trans('app.general') }}</a>
            <li><a href="#">Email</a>
            <li role="separator" class="divider"></li>            
            <li class="navbar-menu-item">
               <div class="label">{{ Lang::get('app.staff') }}</div>
            </li>
            <li><a href="#">Departments</a></li>
            <li><a href="#">Staff</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Roles</a></li>
          </ul>
        </li>
                </ul>
                 <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">

            <li class="dropdown dropdown-notifications">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i data-count="1" class="fa fa-bell notification-icon"></i>
            </a>

            <div class="dropdown-container">

              <div class="dropdown-toolbar">
                <div class="dropdown-toolbar-actions">
                  <a href="#">{{ trans('notifications.markAll') }}</a>
                </div>
                <h3 class="dropdown-toolbar-title">{{ trans('notifications.title', ['count' => '1']) }}</h3>
              </div><!-- /dropdown-toolbar -->

              <ul class="dropdown-menu">
                <li class="notification">
                 <div class="media">
                  <div class="media-left">
                   <div class="media-object">
                    <img src="{{ asset('img/user-icon.png') }}" width="50" height="50" class="img-circle" alt="Name">
                   </div>
                  </div>

           <div class="media-body">
           <strong class="notification-title">
            <a href="#">Glenn Hermans</a> resolved <a href="#">B-007 - Desolve Spectre organization</a></strong>
             <div class="notification-meta">
              <small class="timestamp">1. 9. 2015, 08:00</small>
             </div>
        </div>
      </div>
  </li>
              </ul>

              <div class="dropdown-footer text-center">
                <a href="{{ url('notifications') }}">{{ trans('notifications.viewAll') }}</a>
              </div><!-- /dropdown-footer -->

            </div><!-- /dropdown-container -->
          </li><!-- /dropdown -->
                <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    <i class="fa fa-user"></i> <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                 <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-key"></i>Change password</a></li>
                 <li role="separator" class="divider"></li>
                            <li class="navbar-menu-item">
                                <div class="label">{{ Lang::get('app.setStatus') }}</div>
                            </li>
                            <li><a href=""><i class="fa fa-check"></i> {{ Lang::get('app.available') }}</a></li>
                            <li><a href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ Lang::get('app.unavailable') }}</a></li>
                            <li role="separator" class="divider"></li>                 
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
     $('[data-toggle="tooltip"]').tooltip()
     $('input').iCheck({
        checkboxClass: 'icheckbox_square-grey',
        radioClass: 'iradio_square-grey',
  });
});
</script>
</body>
</html>
