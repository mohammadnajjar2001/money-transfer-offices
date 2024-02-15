@vite(['resources/sass/createoffice.scss', 'resources/js/home.js'])
@extends('layouts.app')
@section('content')  

<main>
    <br><br>
        <div class="recent-orders" style="text-align: center">
            <h2>Browes Offices for shoose your Transfer</h2>
              <table class="table">
                    <thead>
                        <tr>
                            <th  scope="col" style="margin: 10">ID</th>
                            <th  scope="col" style="margin: 10">sender_office</th>
                            <th  scope="col" style="margin: 10">receiver_office_id</th>
                            <th  scope="col" style="margin: 10">amount_transferred</th>
                            <th  scope="col" style="margin: 10">transfer_date</th>
                            <th scope="col" style="margin: 10">take action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transfers as $transfer)
                            <tr>
                                <td>{{ $transfer->id }}  </td>
                                <td>{{ $transfer->senderOffice->name }} </td>
                                <td>{{ $transfer->receiverOffice->name }}</td>
                                <td>{{ $transfer->amount_transferred }}</td>
                                <td>{{ $transfer->transfer_date }}</td>
                                <td>  
                                    @if(auth()->user()->role_id == 'admin')
                                    <a href="{{route('transfers.edit', $transfer->id)}}" id="btnb" href="" role="button">update</a>
                                    <form action="{{ route('transfers.destroy', $transfer->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button id="btnd" class="btn btn-danger"  type="submit">delete</button>
                                    </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
</main>
@endsection