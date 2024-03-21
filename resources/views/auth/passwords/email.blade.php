@extends('layouts.app')

@section('title', 'Reset password')

@section('content')
    <div class="container">
        <div class="flex h-[600px] justify-around">
            <div class="flex flex-col items-center justify-center">
                <div class="text-2xl font-semibold uppercase mb-4">Reset password</div>
                <form method="POST" action="{{ route('password.email') }}">
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
                    <div class="flex flex-col">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit"
                                class="uppercase text-white bg-slate-900 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <img src="{{ asset('assets/login-img.jpeg') }}" alt="background login image">
        </div>
    </div>
@endsection
