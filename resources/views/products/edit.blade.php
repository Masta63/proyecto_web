@extends('layouts.admin')

@section('title', 'Edit product')

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
        <div class="text-2xl font-semibold uppercase text-center mb-4">Editar Producto</div>
        <div class="flex justify-center items-center">
            <form method="POST" action="{{ route('products.update', $product) }}">
                @csrf
                @method('PUT')
                <div class="flex gap-x-4">
                    <div class="flex flex-col gap-y-4">
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nombre</label>
                            <input id="name" type="name" value="{{ $product->name ?? old('name') }}"
                                class="border border-gray-300 text-gray-900 text-sm focus:ring-slate-900 focus:border-slate-900 block w-full p-2.5"
                                placeholder="Nombre" name="name" required autocomplete="new-name" autofocus>
                        </div>
                        <div>
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Descripción</label>
                            <textarea id="description" type="description" cols="4" rows="6"
                                class="border border-gray-300 text-gray-900 text-sm focus:ring-slate-900 focus:border-slate-900 block w-full p-2.5"
                                placeholder="Descripcion" name="description" required autocomplete="new-description" autofocus>{{ trim($product->description ?? old('description')) }}</textarea>
                        </div>
                        <div>
                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Categoria</label>
                            <select id="category" name="category"
                                class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option {{ $product->category == 'cafe' ? 'selected' : '' }} value="cafe">
                                    Café</option>
                                <option {{ $product->category == 'frutas' ? 'selected' : '' }} value="frutas">frutas
                                </option>
                                <option {{ $product->category == 'verduras' ? 'selected' : '' }} value="verduras">verduras
                                </option>
                            </select>
                        </div>
                        <div>
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Precio</label>
                            <input id="price" type="price" value="{{ $product->price ?? old('price') }}"
                                class="border border-gray-300 text-gray-900 text-sm focus:ring-slate-900 focus:border-slate-900 block w-full p-2.5"
                                placeholder="Price" name="price" required autocomplete="new-price" autofocus>
                        </div>
                        <div>
                            <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900">Cantidad</label>
                            <input id="quantity" type="number" min=0 max=99
                                value="{{ $product->quantity ?? old('quantity') }}"
                                class="border border-gray-300 text-gray-900 text-sm focus:ring-slate-900 focus:border-slate-900 block w-full p-2.5"
                                placeholder="Cantidad" name="quantity" required autocomplete="new-quantity" autofocus>
                        </div>
                    </div>
                    {{-- //TODO: ver como subir imagen --}}
                    <div class="flex flex-col">
                        <img class="w-[287px] h-[287px]" src="{{ $product->image }}" alt="product image">
                        <input id="image" type="text" value="{{ $product->image ?? old('image') }}"
                            class="w-[287px] mt-4 border border-gray-300 text-gray-900 text-sm focus:ring-slate-900 focus:border-slate-900 block w-full p-2.5"
                            placeholder="Imagen" name="image" required autocomplete="new-image" autofocus>
                    </div>
                </div>
                <div class="flex justify-center mt-4 gap-x-4 mb-8">
                    <a href="{{ route('panel.products') }}"
                        class="uppercase text-slate-900 border-slate-900 border-2 hover:bg-slate-900 hover:text-white focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                        {{ __('Cancelar') }}
                    </a>
                    <button type="submit"
                        class="uppercase text-white bg-slate-900 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                        {{ __('Editar') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
