
@extends('layouts.app')

@section('title', '- Home')

@push('custom_css')
@endpush

@section('content')


<section class="section-lg bg-image-1 section-intro">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="intro-box wow fadeInLeft" data-wow-dalay=".2s"><span class="subtitle">Bienvenidos a cuidado avanzado de heridas</span>
                <h1>ATENCION ESPECIALIZADA DE HERIDAS</h1>
                <div class="button-group"><a class="button-primary button button-md" href="index.html#">Agenda tu cita</a><a class="button-secondary-outline button" href="departments.html">SERVICIOS</a></div>
              </div>
            </div>
          </div>
        </div>
    </section>
  <section class="section section-sm section-negative bg-default">
        <div class="container">
          <div class="row row-narrow-12 row-30 justify-content-center">
            <div class="col-12 col-lg-6 col-xl-4 wow fadeInUp" data-wow-dalay=".1">
              <div class="icon-box-creative secondary">
                <div class="icon-box-creative__info">
                  <div class="icon-box-creative__media"><img src="{{ asset('assets/images/service-1-34x44.png') }}" alt="" width="34" height="44"/>
                  </div>
                  <div class="icon-box-creative__title">Especialistas en cuidado de heridas</div>
                  <p>Personal capacitado en curación de heridas quirurgicas, quemaduras y prevención de complicaciones como dehiscencias y úlceras por presión.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4 wow fadeInUp" data-wow-dalay=".2">
              <div class="icon-box-creative secondary-light">
                <div class="icon-box-creative__info">
                  <div class="icon-box-creative__media"><img src="{{ asset('assets/images/service-2-48x34.png') }}" alt="" width="48" height="34"/>
                  </div>
                  <div class="icon-box-creative__title">Valoración sin esperas</div>
                  <p>Ofrecemos atención rápida y seguimiento continuo para evitar infecciones y acelerar tu recuperación.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4 wow fadeInUp" data-wow-dalay=".3">
              <div class="icon-box-creative primary">
                <div class="icon-box-creative__info">
                  <div class="icon-box-creative__media"><img src="{{ asset('assets/images/service-3-35x44.png') }}" alt="" width="35" height="44"/>
                  </div>
                  <div class="icon-box-creative__title">Estamos contigo 24/7</div>
                  <p>Desde urgencias hasta seguimiento postoperatorio, nuestro equipo está disponible para ti en todo momento.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
   
     @include('nosotros.index')
       
     @include('servicios.index') 
   
    

@endsection



