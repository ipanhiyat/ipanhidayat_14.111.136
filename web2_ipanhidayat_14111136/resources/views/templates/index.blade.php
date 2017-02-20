
<html>
<head> <title>Latihan Blade Templates </title>
</head>

<link = rel="stylesheet" href="css/style.css" type="text/css">

<body>
<div class-"container">
@include('templates.header')
@yield('content')
@include('templates.footer')
</body>
</html>