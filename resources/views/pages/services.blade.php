@extends('layouts.app')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos y Servicios - Servitech Soluciones</title>
    <link rel="stylesheet" href="{{ asset('css/slyless.css') }}">
</head>
<body>

    <main>
        <section>
            <h2>Catálogo de Productos y Servicios</h2>
            <p>Consulta nuestra oferta de equipamiento y mantenimiento técnico disponible:</p>
            <br>
            <div class="contenedor-productos">
                <article class="tarjeta-producto">
                    <img src="{{ asset('img/mantenimiento.jpg') }}" alt="Mantenimiento PC" width="200">
                    <h3>Mantenimiento Preventivo</h3>
                    <p>Limpieza profunda, cambio de pasta térmica y optimización del sistema.</p>
                    <p class="precio">$35.00</p>
                </article>

                <article class="tarjeta-producto">
                    <img src="{{ asset('img/teclado.jpg') }}" alt="Teclado Mecánico" width="200">
                    <h3>Teclado Mecánico RGB</h3>
                    <p>Teclado de alto rendimiento con switches red y diseño ergonómico.</p>
                    <p class="precio">$65.00</p>
                </article>

                <article class="tarjeta-producto">
                    <img src="{{ asset('img/router.jpg') }}" alt="Router Neutro" width="200">
                    <h3>Router Gigabit AC1200</h3>
                    <p>Equipo de red de alta velocidad ideal para oficinas y entornos exigentes.</p>
                    <p class="precio">$45.00</p>
                </article>
            </div>
        </section>

        <section>
            <h2>Documentación Técnica</h2>
            <p>Para revisar las especificaciones de arquitectura y compatibilidad del hardware, consulta la guía en el <a href="https://www.linux.org" target="_blank" rel="noopener noreferrer">Portal de Documentación de Linux</a>.</p>
        </section>
    </main>

</body>
@endsection