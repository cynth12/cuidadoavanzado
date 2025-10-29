<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>cuidado_avanzado 🦶 Clínica de Heridas y Estomas</title>
    <meta name="description" content="Centro especializado en el manejo avanzado de heridas, estomas y pie diabético. Atención profesional en Tulancingo, Hidalgo.">

    {{-- Open Graph --}}
    <meta property="og:title" content="@yield('og_title', 'CUIDADO AVANZADO 🦶 Clínica Especializada en Heridas y Estomas')">
    <meta property="og:description" content="@yield('og_description', 'Expertos en curación de heridas, ostomías y pie diabético en Tulancingo. Agenda tu cita hoy.')">
    <meta property="og:image" content="https://cuidadoavanzado.com/assets/images/material_heridas.jpg">
    <meta property="og:url" content="https://cuidadoavanzado.com/">
    <meta property="og:type" content="website">
    <meta property="og:image:width" content="1953" />
	<meta property="og:image:height" content="937" />
	<meta property="og:image:type" content="image/jpeg" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @include('layouts.commonCSS')
</head>
<body>
    

    @include('layouts.navbar')

    <div>
        @yield('content')
    </div>

    @include('footer')
    @include('layouts.commonJS')
<a href="https://wa.me/5217713336968" target="_blank" class="whatsapp-float" title="Envíanos un mensaje">
        <i class="fab fa-whatsapp"></i>
    </a>
   
</a>
</body>
</html>

