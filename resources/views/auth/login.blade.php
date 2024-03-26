@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="container">

        <div class="flex h-[600px] justify-around">
        <img src="{{ asset('assets/images/descripcion2.jpg') }}" alt="background login image">

            <div class="flex flex-col items-center justify-center">
                <div class="text-2xl font-semibold uppercase mb-4">Credentials</div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <input id="email" type="email"
                                class="border border-gray-300 text-gray-900 text-sm focus:ring-slate-900 focus:border-slate-900 block w-full p-2.5"
                                placeholder={{ __('Email Address') }} name="email" value="{{ old('email') }}" required
                                autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <input id="password" type="password"
                                class="border border-gray-300 text-gray-900 text-sm focus:ring-slate-900 focus:border-slate-900 block w-full p-2.5"
                                placeholder={{ __('Password') }} name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex items-center mb-4">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                        <label for="remember" class="ms-2 text-sm font-medium text-gray-900">{{ __('Remember Me') }}</label>
                    </div>
                    <div class="flex flex-col">
                        <button type="submit"
                            class="uppercase text-white bg-slate-900 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <div class="flex flex-col items-center">
                                <a class="underline hover:text-slate-500" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                <span>or</span>
                                <a class="underline hover:text-slate-500" href="{{ route('register') }}">
                                    Sign up
                                </a>
                            </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
