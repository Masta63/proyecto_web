@extends('layouts.app')

@section('title', 'Congratulations!')

@section('content')
    <div class="flex justify-center items-center">
        <div class="flex flex-col justify-center items-center text-center w-[325px] mt-32">
            <i class="ph ph-check-circle text-green-300" style="font-size: 100px"></i>
            <h2 class="uppercase font-bold text-2xl">
                Congratulations!
            </h2>
            <h2 class="font-bold text-slate-600">
                The order was placed correctly,
                we will contact you shortly to coordinate delivery.
            </h2>
        </div>
    </div>
@endsection
