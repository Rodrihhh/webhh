@extends('layouts.app')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Servitech Soluciones</title>
    <link rel="stylesheet" href="{{ asset('css/slyless.css') }}">
</head>
<body>

    <main>
        <section>
            <h2>Bienvenidos a Servitech Soluciones</h2>
            <p>Somos una iniciativa enfocada en brindar servicios de montaje, optimización y mantenimiento de infraestructura informática para pequeñas empresas y entusiastas del hardware.</p>
            <br>
            <img src="{{ asset('img/servidor.webp') }}" alt="Mantenimiento de servidores" width="400">
        </section>

        <section>
            <h2>Nuestra Especialidad</h2>
            <p>Nos encargamos de estructurar redes locales, configurar entornos virtuales de trabajo y ensamblar equipos a medida según las necesidades del cliente.</p>
            
            <p><strong>Nuestros pilares fundamentales:</strong></p>
            <ul>
                <li>Diagnóstico detallado de componentes informáticos.</li>
                <li>Despliegue de sistemas operativos y scripts de automatización.</li>
                <li>Soporte técnico directo y asesoramiento personalizado.</li>
            </ul>
            <br>
            <p>Puedes obtener más información sobre estándares de hardware en la <a href="https://www.ieee.org" target="_blank" rel="noopener noreferrer">Página Oficial de IEEE</a>.</p>
        </section>
    </main>

</body>
@endsection