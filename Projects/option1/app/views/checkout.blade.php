@extends('layouts.master')




@section('content')

    @include('partials.cart.cart_contents')

    <form action="" method="POST">
        <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="{{ $_ENV['STRIPE_PUBLIC_KEY']  }}"
                data-amount="{{$totalPrice}}"
                data-name="{{ $projectName }}"
                data-description="{{count($items)}} items (${{ number_format($totalPrice / 100, 2)}})"
                data-image="/128x128.png">
        </script>
    </form>
@stop



