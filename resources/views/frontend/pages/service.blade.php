@extends('layouts.app')

@section('content')
  <!--* Main Wrapper -->
            {{-- <div id="main-wrapper" class="page-wrapper"> --}}
          
                <!--* Page Header -->
                <div class="service-section section-padding">
                    <div class="container">
                        <div class="row clearfix no-gutters dc-features-group">
                              @foreach($services as $service)
                            <div class="col-lg-4 col-md-6 dc-features-item">
                                <a href="#">
                                    <div class="dc-features-item-front">
                                        <div class="inner-box">
                                            <div class="icon">
                                                <img class="normal" src="{{ asset('/') }}frontend/assets/images/default-color/icon-2.svg" alt="">
                                            </div>
                                            <h3 class="dc-features-title">{{ $service->service_title }}</h3>
                                        </div>
                                    </div>
                                    <div class="dc-features-item-hover">
                                        <div class="inner-box">
                                            <h3 class="dc-features-title">{{ $service->service_title }}</h3>
                                            <p>{{ $service->service_subtitle }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!--* End Col -->
                        </div>
                        @endforeach
                        <!--* End Row -->
                    </div>
                </div>
                <!--* About Section -->
                <div class="cta-section section-padding style-dark">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="call-to-action-content i-text-center">
                                    <h2 class="h1">Get a personalized demo, instantly. <span class="special-fonts">Schedule a demo</span></h2>
                                </div>
                            </div>
                            <!--* End Col -->
                            <div class="col-lg-5">
                                <div class="call-to-action-btn text-right i-text-center">
                                    <a href="{{ route('com') }}" class="btn btn-primary btn-light btn-large">Contact Us Now!</a>
                                </div>
                            </div>
                            <!--* End Col -->
                        </div>
                        <!--* End Row -->
                    </div>
                </div>
                <!--* Call to Action Section -->
                 <div class="testimonial-section section-padding">
                    <div class="container">
                        <div class="row justify-content-center clearfix">
                            <div class="col-lg-8">
                                <div class="heading-wrapper text-center with-separator">
                                    <h2 class="h1">Happy Clients <span>Feedback</span></h2>
                                    <div class="lead-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis finibus mi id elit gravida, quis tincidunt purus fringilla. Aenean convallis a neque non pellentesque.</p>
                                    </div>
                                </div>
                                <!--* End Heading -->
                            </div>
                            <!--* End Col -->
                        </div>
                        <!--* End Row -->
                        <div class="row clearfix">
                            <div class="col-lg-12">
                                <div class="client-testimonial theme-four">
                                    <div class="testimonial-slider">
                                     @foreach($testimonials as $testimonial)
                                        <div class="item">
                                            <div class="client-info-wrapper">
                                                <div class="client-img">
                                                    <img src="{{ asset($testimonial->client_img) }}" alt="client">
                                                </div>
                                                <div class="client-info">
                                                    <h5>{{ $testimonial->client_name }}</h5>
                                                </div>
                                            </div>
                                            <div class="testimonial-text">
                                                <blockquote>
                                                  {{ $testimonial->client_qute }}
                                                </blockquote>
                                            </div>
                                        </div>
                                      @endforeach
                                    </div>
                                    <!--* End Testimonial Slider -->
                                </div>
                            </div>
                            <!--* End Col -->
                        </div>
                        <!--* End Row -->
                    </div>
                </div>
                <!--* Testimonial Section -->
            {{-- </div> --}}
@endsection