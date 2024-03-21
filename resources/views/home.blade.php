@extends('layouts.app')
@section('content')
    <div class="h-[580px] flex justify-around gap-x-4 mt-4">
        <!-- Banner -->
        <div
            class="flex flex-col flex-1 items-center justify-end text-white py-10 bg-livingRoom bg-no-repeat bg-center bg-cover">
            <a href="{{ route('livingRoom') }}"
                class="w-max p-4 border-white-600 border-2 font-bold text-white-600 uppercase hover:bg-red-600 hover:text-white">
                Living room
            </a>
        </div>
        <!-- Banner -->
        <!-- Banner -->
        <div
            class="flex flex-col flex-1 items-center justify-end text-white py-6 bg-kitchen bg-no-repeat bg-center bg-cover">
            <a href="{{ route('kitchen') }}"
                class="w-max p-4 border-white-600 border-2 font-bold text-white-600 uppercase hover:bg-red-600 hover:text-white">
                Kitchen
            </a>
        </div>
        <!-- Banner -->
        <!-- Banner -->
        <div
            class="flex flex-col flex-1 items-center justify-end text-white py-10 bg-bathroom bg-no-repeat bg-center bg-cover">
            <a href="{{ route('bathroom') }}"
                class="w-max p-4 border-white-600 border-2 font-bold white-red-600 uppercase hover:bg-red-600 hover:text-white">
                Bathroom
            </a>
        </div>
        <!-- Banner -->
    </div>
@endsection
