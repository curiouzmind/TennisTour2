@extends('layouts.app')

@section('content')
    <h3 class="page-title">Payment Page</h3>
    @can('player_create')
    <p>
        <a href="{{ route('admin.players.create') }}" class="btn btn-success">Top up your Wallet</a>
        
    </p>
    @endcan
        <div id="st-message"></div>
        <form id="st-payment" action="/admin/players/payment_cached" method="POST">
        {{ csrf_field() }}
    <!--Ensure all payment details use the data-st-field attribute.-->
        Amount:
        <input type="text" autocomplete="off" placeholder="Enter amount to transfer to your wallet" name="amount" class="form-control" /></br>
        Card Number(16 digits number in your card): 
        <input type="text" data-st-field="pan" autocomplete="off" class="form-control" /></br>
        Expiry Month: 
        <input type="text" data-st-field="expirymonth" autocomplete="off" class="form-control"/></br>
        Expiry Year: 
        <input type="text" data-st-field="expiryyear" autocomplete="off" class="form-control" /></br>
        Security Code: 
        <input type="text" data-st-field="securitycode" autocomplete="off" class="form-control" /></br>
    <!--You can submit your own custom fields within this form, e.g. discount code-->
        Discount Code: 
        <input type="text" name="discountcode" autocomplete="off" class="form-control" /></br>
        <input type="submit" name="mybtn" class="btn btn-success" />
    </form>
    
@stop

@section('javascript') 
    <script>
        new SecureTrading.Standard({
            sitereference: '{{config('payment.test_site_reference')}}', locale: "en_gb"
        });
    </script>
    <script>
        @can('player_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.players.mass_destroy') }}';
        @endcan

    </script>
@endsection