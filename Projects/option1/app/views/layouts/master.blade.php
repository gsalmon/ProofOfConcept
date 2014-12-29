<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="Proof Of Concept - Option 1">
    <meta name="author" content="Geoff Salmon">

    <title>{{ $projectName }} @yield('title')</title>

    <!-- load bootstrap  -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/option1.css')}}">
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
</head>
<body>

@include('partials.header')

<div class="container">
    @yield('content')
</div>

@include('partials.footer')

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>

</body>
</html>