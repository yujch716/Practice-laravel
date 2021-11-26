<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Laravel')</title>
</head>
<body>
    <ui>
        <li> <a href="/aa">aa</a> </li>
        <li><a href="/bb">bb</a></li>
        <li><a href="/cc">cc</a></li>
    </ui>
    @yield('content')
</body>
</html>