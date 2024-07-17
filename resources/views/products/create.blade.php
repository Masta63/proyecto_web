@extends('layouts.admin')

@section('title', 'Create product')

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
        <div class="text-2xl font-semibold uppercase text-center mb-4">Create Product</div>
        <div class="flex justify-center items-center">
            <form method="POST" action="{{ route('products.store') }}">
                @csrf
                <div class="flex flex-col gap-y-4">
                    <div>
                        <input id="name" type="name" value="{{ old('name') }}"
                            class="border border-gray-300 text-gray-900 text-sm focus:ring-slate-900 focus:border-slate-900 block w-full p-2.5"
                            placeholder="Name" name="name" required autocomplete="new-name" autofocus>
                    </div>
                    <div>
                        <textarea id="description" type="description" cols="4" rows="6"
                            class="border border-gray-300 text-gray-900 text-sm focus:ring-slate-900 focus:border-slate-900 block w-full p-2.5"
                            placeholder="Description" name="description" required autocomplete="new-description" autofocus>{{ trim($product->description ?? old('description')) }}</textarea>
                    </div>
                    <div>
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Category</label>
                        <select id="category" name="category"
                            class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="cafe">
                                Living
                                room</option>
                            <option value="frutas">frutas
                            </option>
                            <option value="verduras">verduras
                            </option>
                        </select>
                    </div>
                    <div>
                        <input id="price" type="price" value="{{ old('price') }}"
                            class="border border-gray-300 text-gray-900 text-sm focus:ring-slate-900 focus:border-slate-900 block w-full p-2.5"
                            placeholder="Price" name="price" required autocomplete="new-price" autofocus>
                    </div>
                    <div>
                        <input id="quantity" type="number" min=0 max=99 value="{{ old('quantity') }}"
                            class="border border-gray-300 text-gray-900 text-sm focus:ring-slate-900 focus:border-slate-900 block w-full p-2.5"
                            placeholder="Quantity" name="quantity" required autocomplete="new-quantity" autofocus>
                    </div>
                    <input id="image" type="text" value="{{ old('image') }}"
                        class="w-full border border-gray-300 text-gray-900 text-sm focus:ring-slate-900 focus:border-slate-900 block w-full p-2.5"
                        placeholder="Image" name="image" required autocomplete="new-image" autofocus>
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
