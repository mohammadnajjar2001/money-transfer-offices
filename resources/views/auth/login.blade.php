@extends('layouts.app')
@vite(['resources/sass/login.scss'])
@section('content')

                <div class="card-body" >
                    <div class="login-card"  style="width: 40%">
                        <h2>Login</h2>
                        <h3>Enter your account</h3>

                        <form method="POST" action="{{ route('login') }}" class="login-form">
                            @csrf

                            <!-- Email Address -->
                            <div>
                                <input id='input1'
                                placeholder="Enter your Email"
                                id="username" type="text" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                <div class="mt-2" id="ancor"> 
                                    @foreach($errors->get('email') as $message)
                                        <span>{{ $message }}</span>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="mt-4" id="div1">
                                <input id='input1'
                                placeholder="Enter your password"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                                <div id="ancor">
                                    @foreach($errors->get('password') as $message)
                                        <span>{{ $message }}</span>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Remember Me -->
                            <div class="block mt-4">
                                <input
                                type="checkbox" name="remember">
                                <span id="ancor" >{{ __('Remember me') }}</span>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a id="ancor"  href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                            </div>
                            <button id="btn1"  type="submit">Log in</button>
                        </form>
                    </div>
                </div>
@endsection
