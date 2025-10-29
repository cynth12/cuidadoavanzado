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
    <meta property="og:image" content="https://i.imgur.com/6vmSsyM.png">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

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

