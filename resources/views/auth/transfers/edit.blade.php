<!-- resources/views/auth/transfers/edit.blade.php -->
@vite(['resources/sass/createoffice.scss', 'resources/js/home.js'])
@extends('layouts.app')

@section('content')
<h2 style="font-size: 30px;
font-weight: 600;
margin: 0 0 12px; text-align: center;">Edit Transfers</h2>
    @php
    $offices = \App\Models\Office::all();
    $transfers= \App\Models\transfers::all(); // استبدل 1 بمعرف المكتب الذي تريد استخدامه
    @endphp
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="recent-orders" style="text-align: center">
        <div class="login-card">
            <form class="login-form" method="post" action="{{ route('transfers.update', $transfer->id) }}">
                @csrf
                @method('PATCH')

                <label for="sender_office_id">{{__('mycostm.Sender Office')}}</label>
                <select id="select" name="sender_office_id" id="sender_office_id" required>
                    <!-- قم بملء هذا القائم المنسدل ببيانات المكاتب من قاعدة البيانات الخاصة بك -->
                    @foreach($offices as $officeOption)
                    <option value="{{ $officeOption->id }}" @if($officeOption->id == $transfer->sender_office_id) selected @endif>{{ $officeOption->name }}</option>
                    @endforeach
                </select>

                <label for="receiver_office_id">{{__('mycostm.Receiver Office')}}</label>
                <select id="select" name="receiver_office_id" id="receiver_office_id" required>
                    <!-- قم بملء هذا القائم المنسدل ببيانات المكاتب من قاعدة البيانات الخاصة بك -->
                    @foreach($offices as $officeOption)
                    <option value="{{ $officeOption->id }}" @if($officeOption->id == $transfer->receiver_office_id) selected @endif>{{ $officeOption->name }}</option>
                    @endforeach
                </select>

                <label for="amount_transferred">{{__('mycostm.Amount Transferred')}}</label>
                <input type="number" name="amount_transferred" id="amount_transferred" value="{{ $transfer->amount_transferred }}" required>

                <label for="transfer_date">{{__('mycostm.Transfer Date')}}</label>
                <input type="date" name="transfer_date" id="transfer_date" value="{{ $transfer->transfer_date }}" required>

                <button type="submit">{{__('mycostm.Save edit')}}</button>
            </form>
        </div>
    </div>
@endsection