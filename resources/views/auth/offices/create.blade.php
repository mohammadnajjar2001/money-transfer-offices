@vite(['resources/sass/createoffice.scss', 'resources/js/home.js'])

@extends('layouts.app')
@section('content')  
<main>
<div class="recent-orders" style="text-align: center">
    <div class="login-card">
        <h2>{{__('mycostm.Create Offices')}}</h2>
        <form method="POST" action="{{ route('offices.store') }}" class="login-form">
            @csrf
            <input type="text" class="form-control" id="name" name="name" placeholder="{{__('mycostm.enter name')}}" required>
            <input type="text" class="form-control" id="address" name="address" placeholder="{{__('mycostm.enter address')}}" required>
            <input type="text" class="form-control" id="location" name="location" placeholder="{{__('mycostm.enter location')}}" required>
            <input type="number" class="form-control" id="balance_now" name="balance_now" placeholder="{{__('mycostm.enter balance now')}}" required>

            <button type="submit" class="btn btn-primary">{{__('mycostm.create')}}</button>
        </form>
    </div>
</div>
</main>
@endsection
