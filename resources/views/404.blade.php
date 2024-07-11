<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ env('APP_URL') }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>404</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,700" rel="stylesheet">

    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="{{asset('404page/custom404.css')}}">

</head>

<body>

    <div id=" notfound">
        <div class="notfound">
            <div class="notfound-404">
                <h1>4<span></span>4</h1>
            </div>
            <h2>Oops! Page Not Be Found</h2>
            <p>Sorry but the page you are looking for does not exist, have been removed. name changed or is temporarily
                unavailable</p>
            <a href="{{route('login')}}">Back to homepage</a>
        </div>
    </div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>