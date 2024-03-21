@extends('layouts.app')

@section('title', 'Cart')

@section('content')
    <div class="flex flex-col gap-y-4">
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
        @if (count($cart) > 0)
            <div class="text-2xl font-semibold uppercase text-center mb-4">Cart</div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <tbody>
                        @foreach ($cart as $product)
                            <tr class="odd:bg-white even:bg-gray-50 border">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $product['name'] }}
                                </th>
                                <td class="px-6 py-4">
                                    ${{ $product['price'] }}
                                </td>
                                <td class="px-6 py-4">
                                    <form class="flex items-center" method="POST"
                                        action="{{ route('cart.update', $product['id']) }}">
                                        @csrf
                                        @method('PUT')
                                        <input value="{{ $product['quantity'] }}" id="quantity" type="number" min=0 max=25
                                            class="w-3/5" value="{{ old('quantity') }}"
                                            class="border border-gray-300 text-gray-900 text-sm focus:ring-slate-900 focus:border-slate-900 block w-full p-2.5"
                                            placeholder="Quantity" name="quantity" required autocomplete="new-quantity"
                                            autofocus>
                                        <button>
                                            <i class="ph ph-arrow-circle-right text-slate-700" style="font-size: 40px"></i>
                                        </button>
                                    </form>
                                </td>
                                <td class="px-6 py-4">
                                    <form class="flex justify-around" method="POST"
                                        action="{{ route('cart.destroy', $product['id']) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="font-medium text-blue-600 hover:underline"><i
                                                class="ph ph-trash" style="font-size: 20px"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="flex justify-end">
                <div class="shadow- md sm:rounded-lg w-[100px] border py-2 text-center">
                    <h2 class="font-bold ">Total: </h2>
                    <span>${{ $totalPrice }}</span>
                </div>
            </div>
            <div class="flex justify-end">
                <a href="{{ route('cart.empty') }}"
                    class="uppercase text-slate-900 border-slate-900 border-2 hover:bg-slate-900 hover:text-white focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                    {{ __('Empty cart') }}
                </a>
                <a href="{{ route('checkout.index') }}"
                    class="uppercase text-white bg-slate-900 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Continue
                    to checkout</a>
            </div>
        @else
            <div class="text-2xl font-semibold uppercase text-center mb-4">Your cart is empty</div>
        @endif
    </div>
@endsection
