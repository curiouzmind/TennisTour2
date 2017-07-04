@extends('layouts.app')

@section('content')
    <h3 class="page-title">Payment Page</h3>
    @can('player_create')
    <p>
        <a href="{{ route('admin.players.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan
        <form method="POST" action="https://payments.securetrading.net/process/payments/choice">
        {{ csrf_field() }}
            <input type="hidden" name="sitereference" value="test_woooba53679">
            <input type="hidden" name="stprofile" value="default">
            <input type="hidden" name="currencyiso3a" value="USD">
            <input type="hidden" name="mainamount" value="100.00">
            <input type="hidden" name="version" value="2">
            <input type="submit" value="Pay" class="btn btn-success">
        </form>
    
@stop

@section('javascript') 
    <script>
        @can('player_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.players.mass_destroy') }}';
        @endcan

    </script>
@endsection