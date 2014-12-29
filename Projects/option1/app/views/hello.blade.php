
@extends('layouts.master')


@section('content')

<div class="container theme-showcase" role="main">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <h1>Welcome To {{$projectName}}</h1>
        <p>This is a simple proof of concept project.  This project will showcase a stripe payment gateway
            implementation by displaying a dummy shopping cart and allowing you to proceed through the
            checkout process.  Simply click the start button below to begin!</p>
        <a href="checkout" class="btn btn-lg btn-primary">Begin!</a>
    </div>
 </div>

@stop