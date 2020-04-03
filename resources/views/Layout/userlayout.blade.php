<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
{{-- <script src="{{asset('public/js/app.js')}}"></script>
<script src="{{asset('public/js/jquery-3.4.1.min.js')}}"></script> --}}
<script src="/js/app.js"></script>
<script src="js/jquery-3.4.1.min.js"></script>

    <title>Employe Register Portal</title>

</head>
<body>
    <div class="container">
        <h3>Welcome Here</h3>
    </div>
<div class="container">
@yield('userMainContent')
</div>
@yield('scriptContent')

</body>
</html>
