@vite(['resources/sass/createoffice.scss', 'resources/js/home.js'])
@extends('layouts.app')
@section('content')  
@if(auth()->user()->role_id == 'super'||auth()->user()->role_id == 'admin')

<main>
    <br><br>
    <div class="recent-orders" style="text-align: center">
        <h2>Browes Offices for shoose your Transfer</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" style="margin: 10">ID</th>
                    <th scope="col" style="margin: 10">Name</th>
                    <th scope="col" style="margin: 10">Address</th>
                    <th scope="col" style="margin: 10">location</th>
                    <th scope="col" style="margin: 10">balance_now</th>
                    <th scope="col" style="margin: 10">take action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($offices as $office)
                <tr>
                    <td>{{ $office->id }}  </td>
                    <td>{{ $office->name }} </td>
                    <td>{{ $office->address }}</td>
                    <td>{{ $office->location }}</td>
                    <td>{{ $office->balance_now }}</td>
                    <td>  
                        @if(auth()->user()->role_id == 'admin')
                            <a id="btnb" href="{{route('offices.edit', $office->id)}}" role="button">{{__('mycostm.update')}}</a>
                            <form action="{{route('offices.destroy', $office->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button id="btnd" class="btn btn-danger" type="submit">{{__('mycostm.delete')}}</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach             
            </tbody>
        </table>
    </div>
    </main>
@endif
@endsection