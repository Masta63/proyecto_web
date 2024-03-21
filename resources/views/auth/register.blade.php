@extends('layouts.app')

@section('title', 'Sign up')

@section('content')
    <div class="container">
        <div class="flex h-[600px] justify-around">
            <div class="flex flex-col items-center justify-center">
                <div class="text-2xl font-semibold uppercase mb-4 text-center">Sign up</div>
                <form class="flex flex-col gap-y-4" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div>
                        <input id="name" type="text"
                            class="border border-gray-300 text-gray-900 text-sm focus:ring-slate-900 focus:border-slate-900 block w-full p-2.5"
                            name="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name"
                            autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div>
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
                    <div>

                        <input id="password" type="password"
                            class="border border-gray-300 text-gray-900 text-sm focus:ring-slate-900 focus:border-slate-900 block w-full p-2.5"
                            placeholder="Password" name="password" required autocomplete="new-password">

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
                            {{ __('Submit') }}
                        </button>
                    </div>
                </form>
            </div>
            <img src="{{ asset('assets/login-img.jpeg') }}" alt="background login image">
        </div>
    </div>
@endsection
