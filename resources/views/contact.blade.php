@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="flex items-center p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50" role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-medium">Errors!</span>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
        @if (Session('status'))
            <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-medium">{{ Session('status') }}</span>
                </div>
            </div>
        @endif
        <div class="text-2xl font-semibold uppercase text-center mb-4">Contact</div>
        <div class="flex items-center mx-20">
            <form class="w-full" method="POST" action="{{ route('contact.send') }}">
                @csrf
                <div class="flex flex-col gap-y-4">
                    <input id="name" type="name" value="{{ old('name') }}"
                        class="border border-gray-300 text-gray-900 text-sm focus:ring-slate-900 focus:border-slate-900 block w-full p-2.5"
                        placeholder="Name" name="name" required autocomplete="new-name" autofocus>
                    <input id="email" type="email" value="{{ old('email') }}"
                        class="border border-gray-300 text-gray-900 text-sm focus:ring-slate-900 focus:border-slate-900 block w-full p-2.5"
                        placeholder="Email" name="email" required autocomplete="new-email" autofocus>
                    <textarea id="description" cols="4" rows="6"
                        class="border border-gray-300 text-gray-900 text-sm focus:ring-slate-900 focus:border-slate-900 block w-full p-2.5"
                        placeholder="Description" name="description" required autocomplete="new-description" autofocus>{{ trim($product->description ?? old('description')) }}</textarea>
                </div>
                <div class="flex justify-center mt-4 gap-x-4 mb-8">
                    <a href="{{ route('panel.products') }}"
                        class="uppercase text-slate-900 border-slate-900 border-2 hover:bg-slate-900 hover:text-white focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                        {{ __('Cancel') }}
                    </a>
                    <button type="submit"
                        class="uppercase text-white bg-slate-900 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                        {{ __('Submit') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
