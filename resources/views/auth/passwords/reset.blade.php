@extends('layouts.app')

@section('title', 'Reset Password')

@section('content')
    <div class="container">
        <div class="flex h-[600px] justify-around">
            <div class="flex flex-col items-center justify-center">
                <div class="text-2xl font-semibold uppercase mb-4 text-center">Reset password</div>
                <form class="flex flex-col gap-y-4" method="POST" action="{{ route('password.update') }}">
                    <input type="hidden" name="token" value="{{ $token }}">
                    @csrf
                    <div>
                        <input id="email" type="email"
                            class="opacity-75 bg-gray-100 border border-gray-300
                            text-gray-900 text-sm focus:ring-slate-900 
                            focus:border-slate-900 block w-full p-2.5
                            cursor-not-allowed"
                            name="email" value="{{ $email ?? old('email') }}" autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div>
                        <input id="password" type="password"
                            class="border border-gray-300 text-gray-900 text-sm focus:ring-slate-900 focus:border-slate-900 block w-full p-2.5"
                            placeholder="Password" name="password" required autocomplete="new-password" autofocus>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <input id="password-confirm" type="password"
                        class="border border-gray-300 text-gray-900 text-sm focus:ring-slate-900 focus:border-slate-900 block w-full p-2.5"
                        placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                    <div class="flex justify-center">
                        <button type="submit"
                            class="uppercase text-white bg-slate-900 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </form>
            </div>
            <img src="{{ asset('assets/login-img.jpeg') }}" alt="background login image">
        </div>
    </div>
@endsection
