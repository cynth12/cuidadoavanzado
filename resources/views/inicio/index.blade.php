
@extends('layouts.app')

@section('title', '- Home')

@push('custom_css')
@endpush

@section('content')


<section class="section-lg bg-image-1 section-intro">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="intro-box wow fadeInLeft" data-wow-dalay=".2s"><span class="subtitle">Welcome to MedCare Clinic</span>
                <h1>The best specialists of the city expect you</h1>
                <div class="button-group"><a class="button-primary button button-md" href="index.html#">Make an appointment</a><a class="button-secondary-outline button" href="departments.html">Departments</a></div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <div class="container">
        <h1>Bienvenido a Cuidado Avanzado</h1>
        <p>Contenido de prueba para verificar que todo carga bien.</p>
    </div>
@endsection



