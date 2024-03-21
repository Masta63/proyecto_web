@extends('layouts.app')

@section('title', 'Information')

@section('content')
    <div class="flex justify-center items-center">
        <!-- Banner -->
        <div class="flex flex-col">
            <div class="flex flex-col justify-center items-center mt-4">
                <h2 class="uppercase font-bold text-4xl">
                    Trabajo practico final
                </h2>
                <h2 class="uppercase font-bold text-4xl">
                    Produccion web
                </h2>
                <p class="text-left uppercase font-bold text-lg">
                    Profesor: Fernando Gonzalo Gaitán
                </p>
            </div>
            <div class="flex flex-col justify-center items-center mt-10">
                <p class="text-left uppercase font-bold text-lg">
                    Integrantes:
                </p>
                <p class="text-left uppercase font-bold text-normal">
                    Ignacio Contreras </p>
                <p class="text-left uppercase font-bold text-normal">
                    Luciano Bolicio </p>
                <p class="text-left uppercase font-bold text-normal">
                    Sebastian Villareal </p>
            </div>
            <div class="flex flex-col justify-center items-center mt-10">
                <p class="text-center text-lg">
                    Les presentamos rucula store un proyecto hecho por alumnos para la materia de produccion web,
                    la idea del proyecto es una webapp hecha en laravel para la venta de productos simulando un e-commerce.
                    El proyecto consta de dos partes, una parte es el front-end y la otra parte es el back-end.
                    El front-end es el encargado de mostrar los productos en una interfaz de usuario, el back-end es
                    el encargado de gestionar los usuarios con sus distintos roles, los productos y la venta de los mismos.
                    Los roles de usuarios son administradores, operadores y clientes.
                </p>
            </div>
        </div>
    </div>
@endsection
