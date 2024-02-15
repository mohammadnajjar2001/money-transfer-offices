@vite(['resources/sass/createoffice.scss', 'resources/js/home.js'])
@extends('layouts.app')

@section('content')
<div class="recent-orders" style="text-align: center">
    <div class="login-card">
        <h2 style="color: red">i cant send this transfer because its bigger than blance</h2>
    </div>
    <h1><a href="{{ route('transfers.create') }}" type="button">  back </a></h1>

</div>



@endsection