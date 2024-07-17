@extends('layouts.app')

@section('title', 'Products')

@section('content')
<main class="flex flex-col md:flex-row">
    <aside class="md:w-5/12 md:flex md:flex-col mt-12 hidden md:block">
        <h2 class="text-4xl">Categoria</h2>
        <div class="py-4 overflow-y-auto mt-2">
            <ul class="space-y-2">
                <li>
                    <a href="/products?category=cafe" class="w-full py-2 flex items-center hover:font-medium">
                        <span class="text-center">Cafe</span>
                    </a>
                </li>
                <li>
                    <a href="/products?category=frutas" class="w-full py-2 flex items-center hover:font-medium">
                        <span class="text-center">Frutas</span>
                    </a>
                </li>
                <li>
                    <a href="/products?category=verduras" class="w-full py-2 flex items-center hover:font-medium">
                        <span class="text-center">Verduras</span>
                    </a>
                </li>
                <li>
                     <!-- resaltar -->
                    <a href="/products?category?" class="w-full py-2 flex items-center hover:font-medium">
                        <span class="text-center">Todo</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <section class="w-full ml-4 md:w-9/12">
        <div class="grid grid-cols-2 md:grid-cols-3 mt-12 gap-x-4 gap-y-4">
            @foreach ($products as $product)
            <div class="bg-white border border-slate-700 flex flex-col">
                <div>
                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-64 object-cover" />
                </div>
                <div class="p-4 flex-grow">
                    <h3 class="text-lg font-medium mb-2">{{ $product->name }}</h3>
                    <p class="text-gray-600 mb-4">{{ $product->description }}</p>
                    <span class="text-lg font-bold">${{ $product->price }}</span>
                </div>
                <form method="POST" action="{{ route('cart.store') }}" class="flex justify-center">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <button type="submit" class="uppercase text-white bg-slate-900 hover:bg-blue-800 focus:ring-4
                     focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Añadir al carrito</button>
                </form>
            </div>
            @endforeach
        </div>
    </section>
</main>
@endsection
