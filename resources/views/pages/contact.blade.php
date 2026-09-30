@extends('layouts.app')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Servitech Soluciones</title>
    <link rel="stylesheet" href="{{ asset('css/slyless.css') }}">
</head>
<body>

    <main>
        <section>
            <h2>Información y Formulario de Contacto</h2>
            <p>Si deseas cotizar un equipo o solicitar una consulta técnica, completa los datos del formulario a continuación:</p>
            <br>
            <form action="#" method="post">
                <div class="campo-form">
                    <label for="nombre">Nombre Completo:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ej. Juan Pérez" required>
                </div>

                <div class="campo-form">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" placeholder="ejemplo@correo.com" required>
                </div>

                <div class="campo-form">
                    <label for="mensaje">Consulta o Mensaje:</label>
                    <textarea id="mensaje" name="mensaje" rows="4" placeholder="Describe tu requerimiento..." required></textarea>
                </div>

                <button type="submit">Enviar Consulta</button>
            </form>
        </section>

        <section>
            <h2>Otros Canales de Atención</h2>
            <p>También puedes comunicarte con nuestro equipo técnico a través de las siguientes vías:</p>
            <ul>
                <li><strong>Ubicación:</strong> Centro Técnico Servitech, Oficina 2B</li>
                <li><strong>Teléfono de atención:</strong> +34 900 123 456</li>
                <li><strong>Horario:</strong> Lunes a Viernes de 9:00 a 18:00</li>
            </ul>
            <br>
            <p>Para conocer la ubicación exacta y rutas de llegada, consulta el mapa en <a href="https://www.openstreetmap.org" target="_blank" rel="noopener noreferrer">OpenStreetMap</a>.</p>
        </section>
    </main>

</body>
@endsection