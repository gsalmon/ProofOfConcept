@section('content')
    <div class="bs-callout bs-callout-info" >
        <h4>Completing The Transaction</h4>
        <p>Below is a list of the items in your shopping cart.  Clicking the 'Pay With Card' button will launch a stripe
            checkout form, which will allow you to enter test credit card info, and complete this dummy transaction.</p>
        <code>Credit Card #: 4242 4242 4242 4242 <BR>
            Expiry Date: Any date in the future <BR>
            Card CVN: Any 3-digit number
        </code>

        <h4>Testing Failure:</h4>
        <P>The following codes will result in an error code being returned:</P>
        <code>
          Credit Card #:  4000 0000 0000 0002 - Card Declined <BR>
          Credit Card #:  4000 0000 0000 0069 - Card Expired <BR>
          Credit Card #:  4000 0000 0000 0119 - Processing Error <BR>
        </code>
        <BR><BR>
        <p class="bg-danger">NOTE: In order to be able to run through this process a number of times the contents of the
            cart will NOT be removed upon the completion of the transaction.</p>
    </div>

    @if (isset($message))
        @include('partials.cart.error_message')
    @endif

    <div class="table-responsive">
    <h2>Cart Contents:</h2>
        <table class="table table-striped">
           <thead>
           <TR>
               <TH>Item #</TH>
               <TH>Item Name</TH>
               <TH>Unit Price</TH>
           </TR>
           </thead>
            <tbody>
                @foreach ($items as $item)
                    <TR>
                        <TD>{{$item->id}}</TD>
                        <TD>{{$item->name}}</TD>
                        <TD>${{ number_format($item->price / 100, 2)}}</TD>
                    </TR>
                @endforeach
                <TR>
                    <TD colspan="2" align="right">Total Price: </TD>
                    <TD>${{ number_format($totalPrice / 100, 2)}}</TD>
                    <TD></TD>
                </TR>
            </tbody>
        </table>
</div>

@parent
@stop