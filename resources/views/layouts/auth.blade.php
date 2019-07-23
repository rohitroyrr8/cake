<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    
    @include('include.header')
    
</head>
<body class="bg-gradient-primary">
    
	<div class="container">
        @yield('content')
    </div>

    @include('include.script')
</body>
</html>
