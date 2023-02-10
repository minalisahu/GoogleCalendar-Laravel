<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <title>
                NoteBook App
            </title>
            <link href="{{asset('dist/css/main.css')}}" rel="stylesheet">
                <link href="{{asset('/dist/css/bootstrap.css')}}" rel="stylesheet">
                </link>
            </link>
        </meta>
    </head>
    <body>
        <div class="container-fluid">
            <nav class="navbar navbar-dark bg-primary">
                <button aria-controls="navbar-header" class="navbar-toggler hidden-sm-up" data-target="#navbar-header" data-toggle="collapse" type="button">
                    ☰
                </button>
                <div class="collapse navbar-toggleable-xs pull-xs-left" id="navbar-header">
                    <a class="navbar-brand" href="#">
                        Google Event
                    </a>
                </div>
                

            </nav>
            <!-- /navbar -->
            <!-- Main component for call to action -->
            @yield('content')
        </div>
        <!-- /container -->
        <script src="{{asset('dist/js/jquery3.min.js')}}">
        </script>
        <script src="{{asset('dist/js/bootstrap.js')}}">
        </script>
    </body>
</html>
