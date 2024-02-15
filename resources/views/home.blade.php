@php
$totalUsersCount = \App\Models\User::count();
$lastLoggedInUser = \App\Models\User::latest('updated_at')->first();
$secondLastLoggedInUser = \App\Models\User::latest('updated_at')->skip(1)->first();
$thirdLastLoggedInUser = \App\Models\User::latest('updated_at')->skip(2)->first();
$Offices = \App\Models\Office::latest()->take(5)->get();
$totalOfficesCount = $Offices->count();
@endphp

@extends('layouts.app')

@section('content')  
    <!-- Main Content -->
    <main>
        <h1>Analytics</h1>
        <!-- Analyses -->
        <div class="analyse">
            <div class="sales">
                <div class="status">
                    <div class="info">
                        <h3>We have<br> customers</h3>
                        <h1> {{ $totalUsersCount }}</h1>
                    </div>
                    <div class="progresss">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="percentage">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="visits">
                <div class="status">
                    <div class="info">
                        <h3>We have<br> offices</h3>
                        <h1> {{ $totalOfficesCount }}</h1>
                    </div>
                    <div class="progresss">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="percentage">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="searches">
                <div class="status">
                    <div class="info">
                        <h3>Searches</h3>
                        <h1>14,147</h1>
                    </div>
                    <div class="progresss">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="percentage">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Analyses -->

        <!-- New Users Section -->
        
        <div class="new-users">
            <h2>New Users</h2>
            <div class="user-list">
                @if(auth()->check())
                    <div class="user">
                        <img src="img/6.jpg">
                        <h2>{{auth()->user()->name}}</h2>
                        <p>Now</p>
                    </div>
                @endif
        
                @if(isset($lastLoggedInUser))
                    <div class="user">
                        <img src="img/profile-3.jpg">
                        <h2>{{ $lastLoggedInUser->name }}</h2>
                        <p>{{ $lastLoggedInUser->updated_at->diffForHumans() }}</p>
                    </div>
                @endif
        
                @if(isset($secondLastLoggedInUser))
                    <div class="user">
                        <img src="img/2.jpg">
                        <h2>{{$secondLastLoggedInUser->name}}</h2>
                        <p>{{ $secondLastLoggedInUser->updated_at->diffForHumans() }}</p>
                    </div>
                @endif
        
                @if(isset($thirdLastLoggedInUser))
                    <div class="user">
                        <img src="img/plus.png">
                        <p><a href="{{ route('offices.create') }}" class="btn btn-primary">New User</a></p>
                        
                    </div>
                @endif
            </div>
        </div>
        
        <!-- End of New Users Section -->

        <!-- Recent Orders Table -->
        <div class="recent-orders" style="text-align: center">
            <h2>{{__('mycostm.some of offices')}}</h2>
            <table class="table">
                <thead>
                    <tr>
                        @if (auth()->user()->role_id=='admin'||auth()->user()->role_id=='super')
                        <th scope="col">ID</th>
                        @endif
                        <th scope="col" style="margin: 10">Name</th>
                        <th scope="col" style="margin: 10">Address</th>
                        <th scope="col" style="margin: 10">Country</th>
                        <th scope="col" style="margin: 10">Current Balance</th>
                        <th scope="col" style="margin: 10">created at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Offices as $course)
                        <tr>
                            @if (auth()->user()->role_id=='admin'||auth()->user()->role_id=='super')
                            <td>{{ $course->id }}</td>@endif
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->address }}</td>
                            <td>{{ $course->location }}</td>
                            <td>{{ $course->balance_now }}</td>
                            <td>{{ $course->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- End of Recent Orders -->

    </main>
    <!-- End of Main Content -->
    @if (auth()->user()->role_id=='unknown')
    <script>location.reload();</script>
    @endif

@endsection
