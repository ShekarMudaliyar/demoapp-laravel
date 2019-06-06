<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Demo App</title>
</head>
<body>
    @include('includes.navbar')
    <div class="container">
    @include('includes.messages')
</div>
<div class="container">
   @yield('content')
</div>
</body>
</html>