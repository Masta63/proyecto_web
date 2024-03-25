@extends('layouts.app')

@section('title', 'Information')

@section('content')
<div class="flex justify-center items-center">
    <!-- Banner -->
    <div class="flex flex-col">
        <div class="flex flex-col justify-center items-center mt-4">
            <h2 class="uppercase font-bold text-4xl">
                Trabajo práctico final
            </h2>
            <h2 class="uppercase font-bold text-4xl">
                Producción web
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
                Rambo Gaston
            </p>
            <p class="text-left uppercase font-bold text-normal">
                Irrisarri Gerenias
            </p>
            <p class="text-left uppercase font-bold text-normal">
                Irrisarri Natalia
            </p>
            <p class="text-left uppercase font-bold text-normal">
                Batista Felipe
            </p>
        </div>
        <div class="flex flex-col justify-center items-center mt-10">
            <p class="text-center text-lg">
                Queremos presentarte Rucula Store, un proyecto desarrollado por estudiantes como parte de un curso de
                producción web. Este proyecto consiste en una aplicación web creada con Laravel que simula un sitio de
                comercio electrónico para la venta de productos.
            </p>
            <p class="text-center text-lg">
                Rucula Store se divide en dos partes principales: el frontend y el backend. El frontend se encarga de la
                interfaz de usuario, mostrando los productos de manera atractiva y accesible para los visitantes del
                sitio. Mientras tanto, el backend se encarga de la gestión de usuarios con diferentes roles, la
                administración de productos y la facilitación de las ventas.
            </p>
            <p class="text-center text-lg">
                Los roles de usuario en Rucula Store se dividen en tres categorías: administradores, operadores y
                clientes. Cada uno de estos roles tiene diferentes niveles de acceso y privilegios dentro del sistema,
                permitiendo una gestión eficiente de la plataforma y una experiencia personalizada para cada tipo de
                usuario.
            </p>
        </div>
    </div>
</div>
@endsection
