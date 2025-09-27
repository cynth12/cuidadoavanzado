
@extends('layouts.app')

@section('title', '- Home')

@push('custom_css')
@endpush

@section('content')


<section id="inicio" class="section-lg bg-image-1 section-intro">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="intro-box wow fadeInLeft" data-wow-dalay=".2s"><span class="subtitle">Bienvenidos a cuidado avanzado de heridas</span>
                <h1>ATENCION ESPECIALIZADA DE HERIDAS</h1>
                <div class="button-group"><a class="button-primary button button-md" href="{{ url('#contacto')}}">Agenda tu cita</a><a class="button-secondary-outline button" href="{{ url('#servicios')}}">SERVICIOS</a></div>
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

      <section class="section bg-gray-light">
        <div class="container">
          <div class="row row-narrow-80 flex-column-reverse flex-lg-row align-items-center">
            <div class="col-lg-5 col-12 d-flex justify-content-center mb-4 mb-lg-0">
              <div class="media-creative wow fadeInLeft"><img src="{{ asset('assets/images/herida_1.png') }}" alt="" width="499" height="524"/>
              </div>
            </div>

          <div class="col-xl-6 wow fadeInRight" data-wow-dalay=".2s">
              <div class="section-lg">
                <h2 class="wow fadeInRight">¿Por que <span class="text-primary"> no </span> cicatriza una herida</h2>
                <div class="card-group-custom card-group-classic wow fadeInRight" id="accordion2" data-wow-dalay=".2s" role="tablist" aria-multiselectable="false">
                  <!--Bootstrap card-->
                  <article class="card card-custom card-corporate">
                    <div class="collapse show" id="accordion2-card-body-uvkyrxya" aria-labelledby="accordion2-card-head-wefnjavp" data-parent="#accordion2" role="tabpanel">
                      <div class="card-body">
                        <p>El proceso de cicatrización es un fenómeno natural que 
                      tiene la finalidad cicatrizar una herida, sin embargo, muchos pacientes padecen de heridas que no cicatrizan 
                      esto debido a factores que entorpecen esa cicatrización estos se dividen en dos grupos:</p>
                      </div>
                    </div>
                  </article>
                 <article class="card card-custom card-corporate">
                    <div class="card-header" role="tab">
                      <div class="card-title"><a id="accordion2-card-head-wefnjavp" data-toggle="collapse" data-parent="#accordion2" href="index.html#accordion2-card-body-uvkyrxya" aria-controls="accordion2-card-body-uvkyrxya" aria-expanded="true" role="button">
                       Factores sistémicos:
                          <div class="card-arrow"></div></a></div>
                    </div>
                    <div class="card-header" role="tab">
                      <div class="card-title"><a class="collapsed" id="accordion2-card-head-hexhebfa" data-toggle="collapse" data-parent="#accordion2" href="index.html#accordion2-card-body-vmwcuvnm" aria-controls="accordion2-card-body-vmwcuvnm" aria-expanded="false" role="button">
                      Edad
                          <div class="card-arrow"></div></a></div>
                    </div>
                    <div class="card-header" role="tab">
                      <div class="card-title"><a class="collapsed" id="accordion2-card-head-hexhebfa" data-toggle="collapse" data-parent="#accordion2" href="index.html#accordion2-card-body-vmwcuvnm" aria-controls="accordion2-card-body-vmwcuvnm" aria-expanded="false" role="button">
                           Diabetes mellitus
                          <div class="card-arrow"></div></a></div>
                    </div>
                    <div class="card-header" role="tab">
                      <div class="card-title"><a class="collapsed" id="accordion2-card-head-hexhebfa" data-toggle="collapse" data-parent="#accordion2" href="index.html#accordion2-card-body-vmwcuvnm" aria-controls="accordion2-card-body-vmwcuvnm" aria-expanded="false" role="button">
                          Insuficiencia arterial y venosa
                          <div class="card-arrow"></div></a></div>
                    </div>
                    <div class="card-header" role="tab">
                      <div class="card-title"><a class="collapsed" id="accordion2-card-head-hexhebfa" data-toggle="collapse" data-parent="#accordion2" href="index.html#accordion2-card-body-vmwcuvnm" aria-controls="accordion2-card-body-vmwcuvnm" aria-expanded="false" role="button">
                        Problemas de movilidad
                          <div class="card-arrow"></div></a></div>
                    </div>
                    <div class="card-header" role="tab">
                      <div class="card-title"><a class="collapsed" id="accordion2-card-head-hexhebfa" data-toggle="collapse" data-parent="#accordion2" href="index.html#accordion2-card-body-vmwcuvnm" aria-controls="accordion2-card-body-vmwcuvnm" aria-expanded="false" role="button">
                      Desnutrición
                          <div class="card-arrow"></div></a></div>
                    </div>
                    
                  </article>
                   <article class="card card-custom card-corporate">
                    <div class="card-header" role="tab">
                      <div class="card-title"><a id="accordion2-card-head-wefnjavp" data-toggle="collapse" data-parent="#accordion2" href="index.html#accordion2-card-body-uvkyrxya" aria-controls="accordion2-card-body-uvkyrxya" aria-expanded="true" role="button">
                      Factores locales:
                          <div class="card-arrow"></div></a></div>
                    </div>
                    <div class="card-header" role="tab">
                      <div class="card-title"><a class="collapsed" id="accordion2-card-head-hexhebfa" data-toggle="collapse" data-parent="#accordion2" href="index.html#accordion2-card-body-vmwcuvnm" aria-controls="accordion2-card-body-vmwcuvnm" aria-expanded="false" role="button">
                          Infección
                          <div class="card-arrow"></div></a></div>
                    </div>
                    <div class="card-header" role="tab">
                      <div class="card-title"><a class="collapsed" id="accordion2-card-head-hexhebfa" data-toggle="collapse" data-parent="#accordion2" href="index.html#accordion2-card-body-vmwcuvnm" aria-controls="accordion2-card-body-vmwcuvnm" aria-expanded="false" role="button">
                          Tejido muerto
                          <div class="card-arrow"></div></a></div>
                    </div>
                    <div class="card-header" role="tab">
                      <div class="card-title"><a class="collapsed" id="accordion2-card-head-hexhebfa" data-toggle="collapse" data-parent="#accordion2" href="index.html#accordion2-card-body-vmwcuvnm" aria-controls="accordion2-card-body-vmwcuvnm" aria-expanded="false" role="button">
                      Escara
                          <div class="card-arrow"></div></a></div>
                    </div>
                    <div class="card-header" role="tab">
                      <div class="card-title"><a class="collapsed" id="accordion2-card-head-hexhebfa" data-toggle="collapse" data-parent="#accordion2" href="index.html#accordion2-card-body-vmwcuvnm" aria-controls="accordion2-card-body-vmwcuvnm" aria-expanded="false" role="button">
                        Bacterias
                          <div class="card-arrow"></div></a></div>
                    </div>
                    <div class="card-header" role="tab">
                      <div class="card-title"><a class="collapsed" id="accordion2-card-head-hexhebfa" data-toggle="collapse" data-parent="#accordion2" href="index.html#accordion2-card-body-vmwcuvnm" aria-controls="accordion2-card-body-vmwcuvnm" aria-expanded="false" role="button">
                       Cuerpos extraños
                          <div class="card-arrow"></div></a></div>
                    </div>
                  </article>
                  </p><a class="wow fadeInRight button-primary button button-md" href="{{ url('#contacto')}}" data-wow-dalay=".2s">Contactanos</a>
                </div>
              </div>
             </div>
          </div>
        </div>
      </section><br/>
   
     @include('nosotros.index')
       
     @include('servicios.index') 

    @include('tecnologias.index') 

     @include('contacto.index') 
      
   
    

@endsection



