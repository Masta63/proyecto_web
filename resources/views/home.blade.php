@extends('layouts.app')
@section('content')
<div class="div">
    <!-- descripcion -->
    @include('layouts.secciones.descripcion')
</div>
    <div class="h-[580px] flex justify-around gap-x-4 mt-4">
        <!-- Banner -->
        <div
            class="flex flex-col flex-1 items-center justify-end text-white py-10 bg-cafe bg-no-repeat bg-center bg-cover">
            <a href="{{ route('cafe') }}"
                class="w-max p-4 border-white-600 border-2 font-bold text-white-600 uppercase hover:bg-red-600 hover:text-white">
                Café
            </a>
        </div>
        <!-- Banner -->
        <div
            class="flex flex-col flex-1 items-center justify-end text-white py-6 bg-frutas bg-no-repeat bg-center bg-cover">
            <a href="{{ route('frutas') }}"
                class="w-max p-4 border-white-600 border-2 font-bold text-white-600 uppercase hover:bg-red-600 hover:text-white">
                Frutas
            </a>
        </div>
        <!-- Banner -->
        <div
            class="flex flex-col flex-1 items-center justify-end text-white py-10 bg-verduras bg-no-repeat bg-center bg-cover">
            <a href="{{ route('verduras') }}"
                class="w-max p-4 border-white-600 border-2 font-bold white-red-600 uppercase hover:bg-red-600 hover:text-white">
                Verduras
            </a>
        </div>
        <!-- Banner -->
    </div>
    <div>
        <!-- apoyo -->
        @include('layouts.secciones.apoyo')
    </div>
@endsection
