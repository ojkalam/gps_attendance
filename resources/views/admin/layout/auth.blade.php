<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <style>
        .adul a{
            text-decoration: underline;
        }
    </style>
</head>
<body>
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

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/admin') }}">
                    {{ config('app.name', 'Laravel Multi Auth Guard') }}: Admin
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Teachers Login</a></li>
                        <li><a href="{{ url('/admin/login') }}">Admin Login</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/admin/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                     @endif
                </ul>
            </div>
        </div>
    </nav>
     @if (!Auth::guest())
    <div class="container">
    <div class="row">


        <div class="col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="list-group adul">
                      <a href="{{ url('admin/home')}}" class="list-group-item">Home</a>
                      <a href="{{ route('admin.assigned_class.index') }}" class="list-group-item">Asigned Class Schedule</a>
                      <a href="{{ route('admin.assigned_class.create') }}" class="list-group-item">Asigne new Class Schedule</a>
                      <a href="{{ url('admin/teachers') }}" class="list-group-item">Teachers List</a>
                      <a href="{{ route('admin.subject.index') }}" class="list-group-item">Subjects</a>
                      <a href="{{ route('admin.subject.create') }}" class="list-group-item">Add Subjects</a>
                      <a href="{{ route('admin.batch.index') }}" class="list-group-item">Batches</a>
                      <a href="{{ route('admin.batch.create') }}" class="list-group-item">Add Batches</a>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @yield('content')
    
        </div>
    </div>
    <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
