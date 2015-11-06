<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Smsverktyg</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    </head>
    <body>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Startsida</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/auth/login') }}"><i class="fa fa-sign-in"></i> Logga in</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" id="content">

        <div class="row">

            @include('partials.notifications')

            @if (env('APP_INSTALL'))
                <div class="alert alert-purple alert-dismissable">
                    <span class="glyphicon glyphicon-certificate"></span>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Hörru!</strong> <code>APP_INSTALL</code> är satt till <code>true</code> i <code>.env</code> vilket medför extrema säkerhets risker, var vänlig sätt den till <code>false</code>! 
                    <br>
                    Eller gör klart installationen <a href="{{ url('/install') }}">här</a>
                </div>
            @endif

            <ol class="breadcrumb">
                @section('breadcrumb')
                    <li class="active">Startsida</li>
                @show
            </ol>
            @yield('content')
        </div>

    </div>        

    <footer class="footer">
        <div class="container">
            Copright 2015 &copy; smsverktyg.se

            <div class="pull-right">
                En tjänst av <a href="#">webbab</a>
            </div>
        </div>
    </footer>

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    </body>
</html>