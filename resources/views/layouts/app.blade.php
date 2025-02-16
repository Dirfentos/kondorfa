<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @include('includes.links') 
    
    <title>@yield('title')</title>
</head>
<body style="background-color: #b3d9ff; font-family: 'DM Serif Text', serif; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @include('includes.nav')
    
    
     @yield('content')
    


    @include('includes.footer')
    
    @include('includes.scripts')
</body>
</html>