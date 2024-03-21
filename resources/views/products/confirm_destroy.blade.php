@extends('layouts.admin')
@section('content')
    <div class="flex justify-center items-center">
        <!-- Banner -->
        <div class="flex flex-col justify-center items-center">
            <h2 class="uppercase font-bold text-xl">
                Do you confirm that you want to remove {{ $product->name }} from the product list?
            </h2>
            <form method="POST" action="{{ route('products.destroy', $product) }}">
                @csrf
                @method('DELETE')
                <div class="flex justify-center mt-4 gap-x-4 mb-8">
                    <a href="{{ route('panel.products') }}"
                        class="uppercase text-slate-900 border-slate-900 border-2 hover:bg-slate-900 hover:text-white focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                        {{ __('Cancel') }}
                    </a>
                    <button type="submit"
                        class="uppercase text-white bg-slate-900 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                        {{ __('Remove') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
