@vite(['resources/sass/createoffice.scss', 'resources/js/home.js'])

@php
    $offices = \App\Models\Office::all();
    $transfers = \App\Models\Transfers::all();     
@endphp

@extends('layouts.app')
@section('content')  
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <div class="recent-orders" style="text-align: center">
        <div class="login-card">
            <h2>{{__('mycostm.Create transfers')}}</h2>
            <form class="login-form" method="post" action="{{ route('transfers.store') }}">
                @csrf
                <label for="sender_office_id">{{__('mycostm.Sender Office')}}</label>
                <select id="select" name="sender_office_id" id="sender_office_id" required>
                    @foreach($offices as $officeOption)
                        <option value="{{ $officeOption->id }}">{{ $officeOption->name }}</option>
                    @endforeach
                </select>
                <label for="receiver_office_id">{{__('mycostm.Receiver Office')}}</label>
                <select id="select" name="receiver_office_id" id="receiver_office_id" required>
                    @foreach($offices as $officeOption)
                        <option value="{{ $officeOption->id }}">{{ $officeOption->name }}</option>
                    @endforeach
                </select>
                <label for="amount_transferred">{{__('mycostm.Amount Transferred')}}</label>
                <input placeholder="{{__('mycostm.enter amount_transferred')}}" type="number" name="amount_transferred" id="amount_transferred" required>
                <label for="transfer_date">{{__('mycostm.Transfer Date')}}</label>
                <input placeholder="{{__('mycostm.enter transfer_date')}}" type="date" name="transfer_date" id="transfer_date" required>
                <button type="submit">{{__('mycostm.create')}}</button>
            </form>
        </div>
    </div>
@endsection
