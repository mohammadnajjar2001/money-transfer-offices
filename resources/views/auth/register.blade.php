@extends('layouts.app')
@vite(['resources/sass/login.scss'])
@section('content')
<body>
    <div class="card-body" >
        <div class="login-card" style="width: 40%">
            <h2>Register</h2>
            <h3>Create your account</h3>

            <form method="POST" action="{{ route('register') }}" class="login-form">
            @csrf

            <!-- Name -->
            <div>
                <input id="input1"
                    placeholder="Enter your Name"
                     id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <div class="mt-2" id="ancor">
                    @foreach($errors->get('name') as $message)
                        <span>{{ $message }}</span>
                    @endforeach
                </div>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <input id="input1"
                    placeholder="Enter Email Address"
                     id="email" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <div class="mt-2" id="ancor">
                    @foreach($errors->get('email') as $message)
                        <span>{{ $message }}</span>
                    @endforeach
                </div>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <input id="input1"
                    placeholder="Enter your Password"
                     id="password" type="password" name="password" required autocomplete="new-password" />
                <div class="mt-2" id="ancor">
                    @foreach($errors->get('password') as $message)
                        <span>{{ $message }}</span>
                    @endforeach
                </div>
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <input id="input1"
                    placeholder="Confirm Password"
                    id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
                <div class="mt-2" id="ancor">
                    @foreach($errors->get('password_confirmation') as $message)
                        <span>{{ $message }}</span>
                    @endforeach
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a id="ancor" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <button id="btn1"
                type="submit">Register</button>
            </div>
        </form>
        </div>
    </div>
</body>
@endsection
