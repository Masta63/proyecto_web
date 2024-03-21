@extends('layouts.app')

@section('title', 'Checkout')

@section('content')
    <form class="flex flex-col" method="POST" action="{{ route('checkout.confirm') }}">
        @csrf
        <div class="flex justify-center items-center gap-x-4">
            <div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <tbody>
                            <tr>
                                <th colspan="3" scope="row"
                                    class="px-6 py-4 font-bold text-center text-gray-900 whitespace-nowrap">
                                    Resume
                                </th>
                            </tr>
                            @foreach ($cart as $product)
                                <tr class="odd:bg-white even:bg-gray-50 border">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $product['name'] }}
                                    </th>
                                    <td class="px-6 py-4">
                                        ${{ $product['price'] }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $product['quantity'] }}
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <th colspan="3" class="px-6 py-4">
                                    <div class="flex justify-end">
                                        <h2 class="font-bold ">Total: </h2>
                                        <span>${{ $totalPrice }}</span>
                                    </div>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div>
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
                <div class="text-2xl font-semibold uppercase text-center mb-4">Checkout Information</div>
                <div class="flex justify-center items-center">
                    <div class="flex gap-x-4">
                        <div class="flex flex-col gap-y-4">
                            <div>
                                <input id="name" type="text" value="{{ old('name') }}"
                                    class="border border-gray-300 text-gray-900 text-sm focus:ring-slate-900 focus:border-slate-900 block w-full p-2.5"
                                    placeholder="Your name" name="name" required autocomplete="new-name" autofocus>
                            </div>
                            <div>
                                <input id="address" type="text" value="{{ old('address') }}"
                                    class="border border-gray-300 text-gray-900 text-sm focus:ring-slate-900 focus:border-slate-900 block w-full p-2.5"
                                    placeholder="Address" name="address" required autocomplete="new-address" autofocus>
                            </div>
                            <div>
                                <input id="city" type="text" value="{{ old('city') }}"
                                    class="border border-gray-300 text-gray-900 text-sm focus:ring-slate-900 focus:border-slate-900 block w-full p-2.5"
                                    placeholder="City" name="city" required autocomplete="new-city" autofocus>
                            </div>
                            <div>
                                <input id="zipcode" type="text" value="{{ old('zipcode') }}"
                                    class="border border-gray-300 text-gray-900 text-sm focus:ring-slate-900 focus:border-slate-900 block w-full p-2.5"
                                    placeholder="Zipcode" name="zipcode" required autocomplete="new-zipcode" autofocus>
                            </div>
                            <div>
                                <input id="phone" type="phone" value="{{ old('phone') }}"
                                    class="border border-gray-300 text-gray-900 text-sm focus:ring-slate-900 focus:border-slate-900 block w-full p-2.5"
                                    placeholder="Phone number" name="phone" required autocomplete="new-phone" autofocus>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-4 gap-x-4 mb-8">
            <a href="{{ route('cart.index') }}"
                class="uppercase text-slate-900 border-slate-900 border-2 hover:bg-slate-900 hover:text-white focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                {{ __('Cancel') }}
            </a>
            <button type="submit"
                class="uppercase text-white bg-slate-900 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                {{ __('Confirm') }}
            </button>
        </div>
    </form>
@endsection
