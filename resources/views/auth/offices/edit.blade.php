@vite(['resources/sass/createoffice.scss', 'resources/js/home.js'])
@extends('layouts.app')
@section('content')  

@if(auth()->check() && auth()->user()->role_id == 'admin')
    <h2 style="font-size: 30px; font-weight: 600; margin: 0 0 12px; text-align: center;">تعديل المكاتب</h2>
    <div class="recent-orders" style="text-align: center">
        <div class="login-card">
            <form action="{{ route('offices.update', $office->id) }}" method="post" class="login-form">
                @csrf
                @method('PATCH')

                <label for="name" class="form-label">{{__('mycostm.Office Name')}}</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $office->name }}" required>

                <label for="address" class="form-label">{{__('mycostm.Office Address')}}</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $office->address }}" required>

                <label for="location" class="form-label">{{__('mycostm.Location')}}</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ $office->location }}" required>

                <label for="balance_now" class="form-label">{{__('mycostm.Current Balance')}}</label>
                <input type="number" class="form-control" id="balance_now" name="balance_now" value="{{ $office->balance_now }}" required>
                
                <button type="submit" class="btn btn-success">{{__('mycostm.Update')}}</button>
            </form>
        </div>
    </div>
@endif
@endsection
