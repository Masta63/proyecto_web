<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Home')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    @yield('css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    backgroundImage: {
                        livingRoom: "url('assets/living-room.jpeg')",
                        kitchen: "url('assets/kitchen.jpeg')",
                        bathroom: "url('assets/bathroom.jpeg')",
                    },
                },
            },
        };
    </script>
</head>

<body>
    <!-- Navbar -->
    <nav class="h-[80px] flex justify-between items-center px-10 shadow mb-4">
        <div aria-label="logo">
            <a href="/">RUCULA STORE</a>
        </div>
        <div class="flex items-center gap-x-4" aria-label="navbar-menu">
            <ul class="flex gap-x-4">
                <li><a href="/">Home</a></li>
                <!-- Dropdown -->
                <li><a href="/products">Products</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/information">Information</a></li>
            </ul>
            <!-- Search Input -->
            <form action="{{ route('products.index') }}" method="get" class="flex items-center">
                <label for="search-product" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search
                    products</label>
                <div class="relative flex">
                    <input type="search" id="search-product" name="search"
                        class="block w-full p-4 pr-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Search products..." required />
                    <button type="submit" class="absolute inset-y-0 right-0 flex items-center pr-3 focus:outline-none">
                        <i class="ph ph-magnifying-glass text-blue-500 text-lg"></i>
                    </button>
                </div>
            </form>

            <!-- Search Input -->
        </div>
        <div class="flex" aria-label="user">
            @if (Route::has('login'))
                @auth
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">
                            <i class="ph ph-sign-out" style="font-size: 32px"></i>
                        </button>
                    </form>
                    @if (auth()->check() &&
                            (auth()->user()->isAdmin() ||
                                auth()->user()->isOperator()))
                        <a href="{{ route('panel') }}">
                            <i class="ph ph-gear" style="font-size: 32px"></i>
                        </a>
                    @endif
                @else
                    <a href="{{ route('login') }}">
                        <i class="ph ph-user" style="font-size: 32px"></i>
                    </a>
                @endauth
            @endif
            <a href="{{ route('cart.index') }}">
                <i class="ph ph-shopping-cart" style="font-size: 32px"></i>
            </a>
        </div>
    </nav>
    <!-- Navbar -->
    <!-- Container -->
    <div class="container mx-auto min-h-screen">
        @yield('content')
    </div>
    <!-- Container -->
    <footer class="h-[80px] flex justify-center items-center mt-4 bg-gray-700 font-bold text-slate-50">
        <h4>Hecho con amor por los pibes ❤️</h4>
    </footer>
    @yield('scripts')
</body>

</html>
