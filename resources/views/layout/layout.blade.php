<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Quick Notes App</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<div class=".container-fluid">
    <div class="row">
        <div class="col-3 mt-5"></div>
        <div class="col-6 mt-5">
            @yield('content')
        </div>
        <div class="col-3 mt-5"></div>
    </div>
</div>
</body>
</html>
