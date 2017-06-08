<!DOCTYPE HTML>
<html>
<head>
    <title>
        @yield('getTitle')
    </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lato|Raleway:200|Questrial" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-push-4">
            <a href="login">
                <button type="button" class="btn-primary btn-home">LOGIN</button>
            </a>
        </div>
        <div class="col-md-6 col-md-offset-0">
            <a href="register">
                <button type="button" class="btn-primary btn-home">REGISTER</button>
            </a>
        </div>
    </div>
</div>
@yield('body')
</body>
</html>