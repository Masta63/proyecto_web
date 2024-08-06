@extends('layouts.app')

@section('title', 'Congratulations!')

@section('content')
    <div class="flex justify-center items-center">
        <div class="flex flex-col justify-center items-center text-center w-[325px] mt-32">
            <i class="ph ph-check-circle text-green-300" style="font-size: 100px"></i>
            <h2 class="uppercase font-bold text-2xl">
                Gracias por su compra!
            </h2>
            <h2 class="font-bold text-slate-600">
                El pedido se ha realizado correctamente,
                nos pondremos en contacto con usted pronto para coordinar la entrega.
            </h2>
        </div>
    </div>
@endsection
