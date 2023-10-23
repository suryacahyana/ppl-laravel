<!DOCTYPE html>
<html>
<head>
    <title>Akar Kuadrat</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/css/main.css" />
</head>
<body>
<div class="container">
<h2> Program Akar Kuadrat </h2>
</div>
<div class="container">
    @yield('content')
</div>
 
@yield('script')
</body>
</html>