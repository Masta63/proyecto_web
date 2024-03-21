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
        <div class="flex items-center gap-x-4 pr-24" aria-label="navbar-menu">
            <ul class="flex gap-x-4">
                <li><a href="/panel/products">Products</a></li>
                @if (auth()->check() &&
                        auth()->user()->isAdmin())
                    <li><a href="/panel/users">Users</a></li>
                @endif
            </ul>
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
                @else
                    <a href="{{ route('login') }}">
                        <i class="ph ph-user" style="font-size: 32px"></i>
                    </a>
                @endauth
            @endif
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
