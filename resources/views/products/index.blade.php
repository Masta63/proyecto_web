@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <main class="flex flex-col md:flex-row">
        <aside class="md:w-5/12 md:flex md:flex-col mt-12 hidden md:block">
            <h2 class="text-4xl">Categories</h2>
            <div class="py-4 overflow-y-auto mt-2">
                <ul class="space-y-2">
                    <li>
                        <a href="/products?category=living-room" class="w-full py-2 flex items-center hover:font-medium">
                            <span class="text-center">Living room</span>
                        </a>
                    </li>
                    <li>
                        <a href="/products?category=kitchen" class="w-full py-2 flex items-center hover:font-medium">
                            <span class="text-center">Kitchen</span>
                        </a>
                    </li>
                    <li>
                        <a href="/products?category=bathroom" class="w-full py-2 flex items-center hover:font-medium">
                            <span class="text-center">Bathroom</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <section class="w-full ml-4 md:w-9/12">
            <div class="grid grid-cols-2 md:grid-cols-3 mt-12 gap-x-4 gap-y-4">
                @foreach ($products as $product)
                    <div class="bg-white border border-slate-700">
                        <img src={{ $product->image }} alt={{ $product->name }} class="w-full h-64 object-cover" />
                        <div class="p-4">
                            <h3 class="text-lg font-medium mb-2">{{ $product->name }}</h3>
                            <p class="text-gray-600 mb-4">{{ $product->description }}</p>
                            <span>${{ $product->price }}</span>
                        </div>
                        <form method="POST" action="{{ route('cart.store') }}" class="flex justify-center">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <button type="submit"
                                class="uppercase text-white bg-slate-900 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Add
                                to cart</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
@endsection
@section('script')
    <script>
        const navLinks = document.querySelector(".nav-links");

        function onToggleMenu(e) {
            e.name = e.name === "menu" ? "close" : "menu";
            navLinks.classList.toggle("top-[9%]");
        }
    </script>
@endsection
