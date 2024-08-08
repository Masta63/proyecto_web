@extends('layouts.admin')

@section('title', 'List of products')

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
        <a class="ml-auto w-64 uppercase text-center text-white bg-slate-900 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2"
            href="{{ route('products.create') }}">
            {{ __('Agregar producto') }}
        </a>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Imagen
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nombre del producto
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Descripción
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Categoria
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Precio
                        </th>
                        <th scope="col" class="px-6 py-3">
                            cantidad
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Acción
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr class="odd:bg-white even:bg-gray-50 border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                <img src="{{ asset('/assets/images/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-32 object-cover" />
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $product->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $product->description }}
                            </td>
                            <td class="px-6 py-4 uppercase">
                                {{ $product->category }}
                            </td>
                            <td class="px-6 py-4">
                                ${{ $product->price }}
                            </td>
                            <td class="px-6 py-4 uppercase">
                                {{ $product->quantity }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex justify-around">
                                    <a href="{{ route('products.edit', $product) }}"
                                        class="font-medium text-blue-600 hover:underline"><i class="ph ph-pencil-simple"
                                            style="font-size: 20px"></i>
                                    </a>
                                    <a href="{{ route('products.confirmDestroy', $product) }}"
                                        class="font-medium text-blue-600 hover:underline"><i class="ph ph-trash"
                                            style="font-size: 20px"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
