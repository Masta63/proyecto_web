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
        <div class="text-2xl font-semibold uppercase text-center mb-4">Editar Usuario</div>
        <div class="flex justify-center items-center">
            <form method="POST" action="{{ route('users.update', $user) }}">
                @csrf
                @method('PUT')
                <div class="flex flex-col gap-y-4">
                    <div>
                        <input id="name" type="name" value="{{ $user->name ?? old('name') }}"
                            class="border border-gray-300 text-gray-900 text-sm focus:ring-slate-900 focus:border-slate-900 block w-full p-2.5"
                            placeholder="Nombre" name="name" required autocomplete="new-name" autofocus>
                    </div>
                    <div>
                        <input id="email" type="email" value="{{ $user->email }}"
                            class="opacity-75 bg-gray-100 cursor-not-allowed
                                border border-gray-300 text-gray-900 text-sm focus:ring-slate-900 focus:border-slate-900 block w-full p-2.5"
                            placeholder="Email" name="email" required autocomplete="new-email" autofocus>
                    </div>
                    <div>
                        <label for="role" class="block mb-2 text-sm font-medium text-gray-900">Rol</label>
                        <select id="role" name="role"
                            class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option {{ $user->role == 'admin' ? 'selected' : '' }} value="admin">Admin</option>
                            <option {{ $user->role == 'operator' ? 'selected' : '' }} value="operator">Operator</option>
                        </select>
                    </div>
                </div>
                <div class="flex justify-center mt-4 gap-x-4 mb-8">
                    <a href="{{ route('panel.users') }}"
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
